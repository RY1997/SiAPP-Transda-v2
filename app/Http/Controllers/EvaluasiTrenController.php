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

        $monitoringTrens = MonitoringAlokasi::whereIn('tahun', [2023, 2024])->where('jenis_tkd', session('jenis_tkd'))->whereHas('st', function ($query) {
            $query->where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi');
        });

        if (Auth::user()->role != 'Admin') {
            $monitoringTrens = $monitoringTrens->where('kode_pwk', Auth::user()->kode_pwk);
        }

        $monitoringTrens = $monitoringTrens
            ->groupBy('nama_pemda')
            ->groupBy('tahun')
            ->selectRaw('*, SUM(alokasi_tkd) as total_alokasi')
            ->orderBy('nama_pemda')
            ->orderBy('tahun')
            ->paginate(50);
        $monitoringPenyalurans = MonitoringPenyaluran::whereIn('nama_pemda', $monitoringTrens->pluck('nama_pemda'))->selectRaw('*, SUM(penyaluran_tkd) as total_penyaluran')->where('jenis_tkd', session('jenis_tkd'))
        ->groupBy('nama_pemda')->groupBy('tahun')->get();

        $monitoringPenggunaans = MonitoringPenggunaan::whereIn('nama_pemda', $monitoringTrens->pluck('nama_pemda'))->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
            ->where('jenis_tkd', session('jenis_tkd'))
            ->groupBy('nama_pemda')->groupBy('tahun')->get();

        return view('evaluasi_trens.index')
            ->with([
                'monitoringTrens' => $monitoringTrens,
                'monitoringPenyalurans' => $monitoringPenyalurans,
                'monitoringPenggunaans' => $monitoringPenggunaans,
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

        $pemdas = DaftarPemda::where('nama_pemda', $pemda->nama_pemda)->first();
        $bidangs = ParameterTkd::where('jenis_tkd', $pemda->jenis_tkd)->get();
        $monitoringTahuns = [
            ['tahun' => '2020'],
            ['tahun' => '2021'],
            ['tahun' => '2022'],
            ['tahun' => '2023'],
            ['tahun' => '2024'],
        ];

        // Lakukan pemrosesan untuk setiap tahun dan bidang
        foreach ($monitoringTahuns as $tahun) {
            foreach ($bidangs as $bidang) {
                // Cek kondisi uji petik
                if ($pemdas->uji_petik == 'Ya' && ($tahun['tahun'] == '2023' || $tahun['tahun'] == '2024')) {
                    // Proses eva_penggunaan
                    if (!empty($bidang->eva_penggunaan)) {
                        $uraianGunas = explode(';', $bidang->eva_penggunaan);
                        foreach ($uraianGunas as $item) {
                            MonitoringPenggunaan::updateOrCreate([
                                'tahun' => $tahun['tahun'],
                                'kode_pwk' => $pemdas->kode_pwk,
                                'nama_pemda' => $pemdas->nama_pemda,
                                'jenis_tkd' => $bidang->jenis_tkd,
                                'tipe_tkd' => $bidang->tipe_tkd,
                                'bidang_tkd' => $bidang->bidang_tkd,
                                'subbidang_tkd' => $bidang->subbidang_tkd,
                                'uraian' => $item,
                            ]);
                        }
                    }
                } else {
                    // Proses mon_penggunaan
                    if (!empty($bidang->mon_penggunaan)) {
                        $uraianGunas = explode(';', $bidang->mon_penggunaan);
                        foreach ($uraianGunas as $item) {
                            MonitoringPenggunaan::updateOrCreate([
                                'tahun' => $tahun['tahun'],
                                'kode_pwk' => $pemdas->kode_pwk,
                                'nama_pemda' => $pemdas->nama_pemda,
                                'jenis_tkd' => $bidang->jenis_tkd,
                                'tipe_tkd' => $bidang->tipe_tkd,
                                'bidang_tkd' => $bidang->bidang_tkd,
                                'subbidang_tkd' => $bidang->subbidang_tkd,
                                'uraian' => $item,
                            ]);
                        }
                    }
                }
            }
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
