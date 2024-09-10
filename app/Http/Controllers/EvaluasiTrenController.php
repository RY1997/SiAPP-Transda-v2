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
use App\Models\ParameterTkd;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class EvaluasiTrenController extends AppBaseController
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
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi')->get();

        $nama_pemda = $request->query('nama_pemda');

        $monitoringTrens = MonitoringAlokasi::whereHas('st', function ($query) {
            $query->where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi');
        });

        if (Auth::user()->role != 'Admin') {
            $monitoringTrens = $monitoringTrens->where('kode_pwk', Auth::user()->kode_pwk);
        }

        $monitoringTrens = $monitoringTrens->where('jenis_tkd', session('jenis_tkd'))
            ->whereIn('tahun', [2023, 2024])
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

        return view('evaluasi_trens.index')
            ->with([
                'monitoringTrens' => $monitoringTrens,
                'suratTugas' => $suratTugas,
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
        //
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
        //
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
            return redirect(route('evaluasiTrens.index'));
        }

        $monitoringAlokasis = MonitoringAlokasi::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(alokasi_tkd) as total_alokasi, SUM(rk_usulan) as total_rk_usulan, SUM(rk_disetujui) as total_rk_disetujui')
            ->groupBy('bidang_tkd', 'subbidang_tkd')->orderBy('tipe_tkd')->get();

        $monitoringPenyalurans = MonitoringPenyaluran::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(penyaluran_tkd) as total_penyaluran, SUM(potong_salur) as total_potong_salur, SUM(tunda_salur) as total_tunda_salur')
            ->groupBy('bidang_tkd', 'subbidang_tkd')->get();

        $monitoringPenggunaans = MonitoringPenggunaan::where('tahun', $pemda->tahun)
            ->where('nama_pemda', $pemda->nama_pemda)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
            ->groupBy('bidang_tkd', 'subbidang_tkd')->get();

        return view('evaluasi_trens.show')->with([
            'pemda' => $pemda,
            'monitoringAlokasis' => $monitoringAlokasis,
            'monitoringPenyalurans' => $monitoringPenyalurans,
            'monitoringPenggunaans' => $monitoringPenggunaans,
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
        //
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
        //
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
        //
    }
}
