<?php

namespace App\Http\Controllers;

use App\Models\MonitoringAlokasi;
use App\Models\MonitoringApbd;
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

        dd($data['anggaran_aceh']);
        return view('home');
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
