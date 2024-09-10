<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringAlokasiRequest;
use App\Http\Requests\UpdateMonitoringAlokasiRequest;
use App\Repositories\MonitoringAlokasiRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringAlokasi;
use App\Models\MonitoringPenggunaan;
use App\Models\MonitoringPenyaluran;
use App\Models\MonitoringSisaTkd;
use App\Models\ParameterTkd;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class MonitoringTrenController extends AppBaseController
{
    /** @var MonitoringAlokasiRepository $monitoringAlokasiRepository*/
    private $monitoringAlokasiRepository;

    public function __construct(MonitoringAlokasiRepository $monitoringAlokasiRepo)
    {
        $this->middleware('auth');
        $this->monitoringAlokasiRepository = $monitoringAlokasiRepo;
    }

    /**
     * Display a listing of the MonitoringAlokasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nama_pemda = $request->query('nama_pemda');

        if (Auth::user()->role == 'Admin') {
            if (session('jenis_tkd') == 'Dana Otonomi Khusus') {
                $monitoringTrens = MonitoringAlokasi::whereIn('kode_pwk', ['PW01', 'PW26', 'PW27']);
            } else {
                $monitoringTrens = MonitoringAlokasi::query();
            }
        } else {
            $monitoringTrens = MonitoringAlokasi::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $monitoringTrens = $monitoringTrens->where('jenis_tkd', session('jenis_tkd'))
            ->where('nama_pemda', 'like', '%' . $nama_pemda . '%')
            ->groupBy('nama_pemda')
            ->groupBy('tahun')
            ->withCount(['penyaluran as total_penyaluran' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'))->select(DB::raw('SUM(penyaluran_tkd) as total_penyaluran'));
            }])
            ->withCount(['penggunaan as total_anggaran' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'))->select(DB::raw('SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran'));
            }])
            ->withCount(['penggunaan as total_realisasi' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'))->select(DB::raw('SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi'));
            }])
            ->selectRaw('SUM(alokasi_tkd) as total_alokasi')
            ->orderBy('nama_pemda')
            ->orderBy('tahun')
            ->paginate(50);

        return view('monitoring_trens.index')
            ->with([
                'monitoringTrens' => $monitoringTrens,
                'nama_pemda' => $nama_pemda,
                'page' => $request->page
            ]);
    }

    /**
     * Show the form for creating a new MonitoringAlokasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_alokasis.create');
    }

    /**
     * Store a newly created MonitoringAlokasi in storage.
     *
     * @param CreateMonitoringAlokasiRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringAlokasiRequest $request)
    {
        $input = $request->all();

        $monitoringAlokasi = $this->monitoringAlokasiRepository->create($input);

        Flash::success('Monitoring Alokasi saved successfully.');

        return redirect(route('monitoringAlokasis.index'));
    }

    /**
     * Display the specified MonitoringAlokasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemda = MonitoringAlokasi::find($id);

        if (empty($pemda)) {
            Flash::error('Pemda not found');
            return redirect(route('monitoringTrens.index'));
        }

        $monitoringAlokasis = MonitoringAlokasi::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(alokasi_tkd) as total_alokasi, SUM(rk_usulan) as total_rk_usulan, SUM(rk_disetujui) as total_rk_disetujui')
            ->groupBy('bidang_tkd')->orderBy('tipe_tkd')->get();

        $monitoringPenyalurans = MonitoringPenyaluran::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(penyaluran_tkd) as total_penyaluran, SUM(potong_salur) as total_potong_salur, SUM(tunda_salur) as total_tunda_salur')
            ->groupBy('bidang_tkd')->get();

        $monitoringPenggunaans = MonitoringPenggunaan::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
            ->groupBy('bidang_tkd')->orderBy('bidang_tkd')->get();

        $monitoringSisaTkds = MonitoringSisaTkd::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(sisa_dana_tkd) as total_sisa_dana_tkd, SUM(dianggarkan_kembali) as total_dianggarkan_kembali, SUM(tidak_dianggarkan_kembali) as total_tidak_dianggarkan_kembali')
            ->groupBy('bidang_tkd')->orderBy('bidang_tkd')->get();

        return view('monitoring_trens.show')->with([
            'pemda' => $pemda,
            'monitoringAlokasis' => $monitoringAlokasis,
            'monitoringPenyalurans' => $monitoringPenyalurans,
            'monitoringPenggunaans' => $monitoringPenggunaans,
            'monitoringSisaTkds' => $monitoringSisaTkds,
        ]);
    }

    /**
     * Show the form for editing the specified MonitoringAlokasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        return view('monitoring_alokasis.edit')->with('monitoringAlokasi', $monitoringAlokasi);
    }

    /**
     * Update the specified MonitoringAlokasi in storage.
     *
     * @param int $id
     * @param UpdateMonitoringAlokasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringAlokasiRequest $request)
    {
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        $monitoringAlokasi = $this->monitoringAlokasiRepository->update($request->all(), $id);

        Flash::success('Monitoring Alokasi updated successfully.');

        return redirect(route('monitoringAlokasis.index'));
    }

    /**
     * Remove the specified MonitoringAlokasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        $this->monitoringAlokasiRepository->delete($id);

        Flash::success('Monitoring Alokasi deleted successfully.');

        return redirect(route('monitoringAlokasis.index'));
    }
}
