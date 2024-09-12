<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKontrak;
use App\Models\MonitoringAlokasi;
use App\Models\MonitoringApbd;
use App\Models\MonitoringPenggunaan;
use App\Models\MonitoringPenyaluran;
use App\Models\ParameterTkd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['anggaran_aceh']  = MonitoringAlokasi::where('kode_pwk', '01')
            ->where('tahun', '2023')
            ->groupBy('kode_pwk', 'tahun')
            ->get([\DB::raw('SUM(alokasi_tkd) AS sum_alokasi')]);
        
        $totalAlokasis = MonitoringAlokasi::where('jenis_tkd', session('jenis_tkd'))->selectRaw('tahun , SUM(alokasi_tkd) AS sum_alokasi')->groupBy('tahun')->groupBy('bidang_tkd')->get();
        $totalPenyalurans = MonitoringPenyaluran::where('jenis_tkd', session('jenis_tkd'))->selectRaw('tahun , SUM(penyaluran_tkd) AS sum_penyaluran')->groupBy('tahun')->get();
        $totalPenggunaans = MonitoringPenggunaan::where('jenis_tkd', session('jenis_tkd'))->selectRaw('tahun , SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) AS sum_penganggaran , SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) AS sum_penggunaan')->groupBy('tahun')->groupBy('bidang_tkd')->get();
        $apbds = MonitoringApbd::selectRaw('tahun , SUM(pendapatan_pad) AS sum_pad')->groupBy('tahun')->get();

        $bidangTkds = ParameterTkd::where('jenis_tkd', session('jenis_tkd'))->get();

        $evaluasiKontraks = EvaluasiKontrak::where('jenis_tkd', session('jenis_tkd'))->get();

        // dd($data['anggaran_aceh']);
        return view('home')->with([
            'data' => $data,
            'totalAlokasis' => $totalAlokasis,
            'totalPenyalurans' => $totalPenyalurans,
            'totalPenggunaans' => $totalPenggunaans,
            'apbds' => $apbds,
            'bidangTkds' => $bidangTkds,
            'evaluasiKontraks' => $evaluasiKontraks,
        ]);
    }

    public function comboChartData()
    {
        $monApbdData = MonitoringApbd::whereIn('kode_pwk', ['pw01', 'pw26', 'pw27'])
            ->groupBy('kode_pwk', 'tahun')
            ->get(['kode_pwk', 'tahun', \DB::raw('SUM(pendapatan_pad + pendapatan_transfer + pendapatan_lainnya) AS total_all_sums')]);

        $monAlokasiData = MonitoringAlokasi::whereIn('kode_pwk', ['pw01', 'pw26', 'pw27'])
            ->groupBy('kode_pwk', 'tahun')
            ->get(['kode_pwk', 'tahun', \DB::raw('SUM(alokasi_tkd) AS sum_alokasi')]);

        return response()->json([
            'monApbdData' => $monApbdData,
            'monAlokasiData' => $monAlokasiData,
        ]);
    }
}
