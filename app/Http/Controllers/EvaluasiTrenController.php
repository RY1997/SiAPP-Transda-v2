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
            $monitoringTrens = MonitoringAlokasi::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $monitoringTrens = $monitoringTrens->where('jenis_tkd', session('jenis_tkd'))->whereIn('tahun', [2023, 2024])
            ->where('nama_pemda', 'like', '%' . $nama_pemda . '%')
            ->groupBy('nama_pemda')
            ->groupBy('tahun')
            ->withSum('penyaluran', 'penyaluran_tkd')
            ->withSum('penggunaan', 'anggaran_barjas')
            ->withSum('penggunaan', 'anggaran_pegawai')
            ->withSum('penggunaan', 'anggaran_modal')
            ->withSum('penggunaan', 'anggaran_hibah')
            ->withSum('penggunaan', 'anggaran_lainnya')
            ->withSum('penggunaan', 'realisasi_barjas')
            ->withSum('penggunaan', 'realisasi_pegawai')
            ->withSum('penggunaan', 'realisasi_modal')
            ->withSum('penggunaan', 'realisasi_hibah')
            ->withSum('penggunaan', 'realisasi_lainnya')
            ->selectRaw('SUM(alokasi_tkd) as total_alokasi')
            ->orderBy('nama_pemda')->orderBy('tahun')
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

        //Delete Latest Input
        MonitoringPenyaluran::where('tahun', $pemda->tahun)->where('nama_pemda', $pemda->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->whereNull('tahap_salur')->delete();
        MonitoringPenggunaan::where('tahun', $pemda->tahun)->where('nama_pemda', $pemda->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->whereNull('bidang_tkd')->delete();

        if (session('jenis_tkd') == 'Dana Otonomi Khusus') {
            $tahap = [
                ['tahap_salur' => 'Tahap I'],
                ['tahap_salur' => 'Tahap II'],
                ['tahap_salur' => 'Tahap III'],
            ];

            foreach ($tahap as $item1) {
                MonitoringPenyaluran::updateOrCreate([
                    'kode_pwk' => $pemda->kode_pwk,
                    'tahun' => $pemda->tahun,
                    'nama_pemda' => $pemda->nama_pemda,
                    'jenis_tkd' => session('jenis_tkd'),
                    'tahap_salur' => $item1['tahap_salur'],
                    'bidang_tkd' => NULL
                ]);
            }
        } elseif (session('jenis_tkd') == 'Dana Alokasi Umum') {
            $tahap = [
                ['tahap_salur' => 'Bulan Januari'],
                ['tahap_salur' => 'Bulan Februari'],
                ['tahap_salur' => 'Bulan Maret'],
                ['tahap_salur' => 'Bulan April'],
                ['tahap_salur' => 'Bulan Mei'],
                ['tahap_salur' => 'Bulan Juni'],
                ['tahap_salur' => 'Bulan Juli'],
                ['tahap_salur' => 'Bulan Agustus'],
                ['tahap_salur' => 'Bulan September'],
                ['tahap_salur' => 'Bulan Oktober'],
                ['tahap_salur' => 'Bulan November'],
                ['tahap_salur' => 'Bulan Desember'],
            ];

            foreach ($tahap as $item1) {
                MonitoringPenyaluran::updateOrCreate([
                    'kode_pwk' => $pemda->kode_pwk,
                    'tahun' => $pemda->tahun,
                    'nama_pemda' => $pemda->nama_pemda,
                    'jenis_tkd' => session('jenis_tkd'),
                    'tahap_salur' => $item1['tahap_salur'],
                    'bidang_tkd' => NULL
                ]);
            }
        } elseif (session('jenis_tkd') == 'Dana Bagi Hasil') {
            $tahap = [
                ['tahap_salur' => 'Tahap I'],
                ['tahap_salur' => 'Tahap II'],
                ['tahap_salur' => 'Tahap III'],
                ['tahap_salur' => 'Tahap IV']
            ];

            $jenis = [
                ['bidang_tkd' => 'DBH CHT'],
                ['bidang_tkd' => 'DBH Dana Reboisasi'],
                ['bidang_tkd' => 'DBH Sawit'],
                ['bidang_tkd' => 'DBH PPh'],
                ['bidang_tkd' => 'DBH PPB'],
                ['bidang_tkd' => 'DBH Kehutanan (diluar DBH Reboisasi)'],
                ['bidang_tkd' => 'DBH Migas'],
                ['bidang_tkd' => 'DBH Minerba'],
                ['bidang_tkd' => 'DBH Perikanan'],
                ['bidang_tkd' => 'DBH Panas Bumi'],
            ];

            foreach ($tahap as $item1) {
                foreach ($jenis as $item2) {
                    MonitoringPenyaluran::updateOrCreate([
                        'kode_pwk' => $pemda->kode_pwk,
                        'tahun' => $pemda->tahun,
                        'nama_pemda' => $pemda->nama_pemda,
                        'jenis_tkd' => session('jenis_tkd'),
                        'tahap_salur' => $item1['tahap_salur'],
                        'bidang_tkd' => $item2['bidang_tkd'],
                    ]);
                }
            }
        } elseif (session('jenis_tkd') == 'Dana Alokasi Khusus') {
            $tahap = [
                ['tahap_salur' => 'Tahap I'],
                ['tahap_salur' => 'Tahap II'],
                ['tahap_salur' => 'Tahap III'],
                ['tahap_salur' => 'Sekaligus']
            ];

            $bidang = ParameterTkd::where('jenis_tkd', session('jenis_tkd'))->get();

            foreach ($tahap as $item1) {
                foreach ($bidang as $item2) {
                    MonitoringPenyaluran::updateOrCreate([
                        'kode_pwk' => $pemda->kode_pwk,
                        'tahun' => $pemda->tahun,
                        'nama_pemda' => $pemda->nama_pemda,
                        'jenis_tkd' => session('jenis_tkd'),
                        'tahap_salur' => $item1['tahap_salur'],
                        'bidang_tkd' => $item2->bidang_tkd,
                    ]);
                }
            }
        }

        $monitoringAlokasis = MonitoringAlokasi::where('tahun', $pemda->tahun)
        ->where('nama_pemda', $pemda->nama_pemda)
        ->where('jenis_tkd', session('jenis_tkd'))
        ->selectRaw('*, SUM(rk_usulan) as total_rk_usulan, SUM(rk_disetujui) as total_rk_disetujui, SUM(alokasi_tkd) as total_alokasi')
        ->groupBy('subbidang_tkd')->get();

        $tipeAlokasis = MonitoringAlokasi::where('tahun', $pemda->tahun)->where('nama_pemda', $pemda->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->groupBy('tipe_tkd')->get();

        $bidang = ParameterTkd::where('jenis_tkd', session('jenis_tkd'))->get();

        if ($pemda->jenis_tkd == 'Dana Bagi Hasil') {
            foreach ($jenis as $alokasi) {
                foreach ($bidang as $item) {
                    MonitoringPenggunaan::updateOrCreate([
                        'kode_pwk' => $pemda->kode_pwk,
                        'tahun' => $pemda->tahun,
                        'nama_pemda' => $pemda->nama_pemda,
                        'jenis_tkd' => session('jenis_tkd'),
                        'tipe_tkd' => $alokasi['bidang_tkd'],
                        'bidang_tkd' => $item->bidang_tkd
                    ]);
                }
            }
        } else {
            foreach ($tipeAlokasis as $alokasi) {
                foreach ($bidang as $item) {
                    MonitoringPenggunaan::updateOrCreate([
                        'kode_pwk' => $pemda->kode_pwk,
                        'tahun' => $pemda->tahun,
                        'nama_pemda' => $pemda->nama_pemda,
                        'jenis_tkd' => session('jenis_tkd'),
                        'tipe_tkd' => $alokasi->tipe_tkd,
                        'bidang_tkd' => $item->bidang_tkd
                    ]);
                }
            }
        }

        $monitoringPenyalurans = MonitoringPenyaluran::where('tahun', $pemda->tahun)->where('nama_pemda', $pemda->nama_pemda)->where('jenis_tkd', session('jenis_tkd'));

        $monitoringPenggunaans = MonitoringPenggunaan::where('tahun', $pemda->tahun)->where('nama_pemda', $pemda->nama_pemda)->where('jenis_tkd', session('jenis_tkd'));

        if (session('jenis_tkd') == 'Dana Bagi Hasil') {
            $monitoringPenyalurans = $monitoringPenyalurans->groupBy('bidang_tkd')->orderBy('bidang_tkd')->get();
            $monitoringPenggunaans = $monitoringPenggunaans->groupBy('tipe_tkd')->orderBy('tipe_tkd')->orderBy('bidang_tkd')->get();
        } else {
            $monitoringPenyalurans = $monitoringPenyalurans->groupBy('bidang_tkd')->orderBy('bidang_tkd')->get();
            $monitoringPenggunaans = $monitoringPenggunaans->groupBy('bidang_tkd')->orderBy('tipe_tkd')->orderBy('bidang_tkd')->get();
        }

        $totalPenggunaan = MonitoringPenggunaan::where('tahun', $pemda->tahun)->where('nama_pemda', $pemda->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->get();

        return view('evaluasi_trens.show')->with([
            'pemda' => $pemda,
            'monitoringAlokasis' => $monitoringAlokasis,
            'monitoringPenyalurans' => $monitoringPenyalurans,
            'monitoringPenggunaans' => $monitoringPenggunaans,
            'totalPenggunaan' => $totalPenggunaan,
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
