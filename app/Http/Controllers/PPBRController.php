<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringTlRequest;
use App\Http\Requests\UpdateMonitoringTlRequest;
use App\Repositories\MonitoringTlRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringHibah;
use App\Models\MonitoringImmediateOutcome;
use App\Models\MonitoringPenggunaan;
use App\Models\MonitoringPenyaluran;
use App\Models\MonitoringSisaTkd;
use App\Models\MonitoringTl;
use App\Models\ParameterTkd;
use App\Models\PPBR;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class PPBRController extends AppBaseController
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $nama_pemda = $request->nama_pemda;

        if (Auth::user()->role == 'Admin') {
            $ppbr = DaftarPemda::where('nama_pemda', 'like', '%' . $nama_pemda . '%')
                ->orderBy('uji_petik', 'DESC')->orderBy('kode_pwk')
                ->paginate(20);
        } else {
            $ppbr = DaftarPemda::where('kode_pwk', Auth::user()->kode_pwk)
                ->where('nama_pemda', 'like', '%' . $nama_pemda . '%')->orderBy('uji_petik', 'DESC')->orderBy('kode_pwk')->paginate(20);
        }

        return view('ppbr.index')
            ->with([
                'ppbr' => $ppbr,
                'nama_pemda' => $nama_pemda
            ]);
    }

    /**
     * Show the form for creating a new MonitoringTl.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        // Otsus
        // $pemdas = DaftarPemda::whereIn('kode_pwk', ['PW01', 'PW26', 'PW27'])->get();

        // $tahunMonitorings = [
        //     ['tahun' => '2020'],
        //     ['tahun' => '2021'],
        //     ['tahun' => '2022'],
        //     ['tahun' => '2023'],
        //     ['tahun' => '2024'],
        // ];

        // $bidangOtsus = [
        //     ['bidang' => 'Pendidikan'],
        //     ['bidang' => 'Kesehatan'],
        //     ['bidang' => 'Pemberdayaan Ekonomi Masyarakat'],
        //     ['bidang' => 'Lainnya'],
        // ];

        // $tahapOtsus = [
        //     ['tahap' => 'Tahap 1'],
        //     ['tahap' => 'Tahap 2'],
        //     ['tahap' => 'Tahap 3'],
        // ];

        // foreach ($pemdas as $pemda) {
        //     foreach ($tahunMonitorings as $tahun) {
        //         foreach ($tahapOtsus as $tahap) {
        //             MonitoringPenyaluran::firstOrCreate([
        //                 'tahun' => $tahun['tahun'],
        //                 'kode_pwk' => $pemda->kode_pwk,
        //                 'nama_pemda' => $pemda->nama_pemda,
        //                 'jenis_tkd' => 'Dana Otonomi Khusus',
        //                 'tipe_tkd' => 'Dana Otonomi Khusus',
        //                 'bidang_tkd' => 'Dana Otonomi Khusus',
        //                 'subbidang_tkd' => 'Dana Otonomi Khusus',
        //                 'uraian' => $tahap['tahap'],
        //             ]);

        //             if ($pemda->kode_pwk != 'PW01') {
        //                 MonitoringPenyaluran::firstOrCreate([
        //                     'tahun' => $tahun['tahun'],
        //                     'kode_pwk' => $pemda->kode_pwk,
        //                     'nama_pemda' => $pemda->nama_pemda,
        //                     'jenis_tkd' => 'Dana Otonomi Khusus',
        //                     'tipe_tkd' => 'Dana Otonomi Khusus',
        //                     'bidang_tkd' => 'Dana Tambahan Infrastruktur',
        //                     'subbidang_tkd' => 'Dana Tambahan Infrastruktur',
        //                     'uraian' => $tahap['tahap'],
        //                 ]);
        //             }
        //         }

        //         foreach ($bidangOtsus as $bidang) {
        //             MonitoringPenggunaan::firstOrCreate([
        //                 'tahun' => $tahun['tahun'],
        //                 'kode_pwk' => $pemda->kode_pwk,
        //                 'nama_pemda' => $pemda->nama_pemda,
        //                 'jenis_tkd' => 'Dana Otonomi Khusus',
        //                 'tipe_tkd' => 'Block Grant',
        //                 'bidang_tkd' => 'Block Grant',
        //                 'subbidang_tkd' => 'Block Grant',
        //                 'uraian' => $bidang['bidang'],
        //             ]);

        //             MonitoringPenggunaan::firstOrCreate([
        //                 'tahun' => $tahun['tahun'],
        //                 'kode_pwk' => $pemda->kode_pwk,
        //                 'nama_pemda' => $pemda->nama_pemda,
        //                 'jenis_tkd' => 'Dana Otonomi Khusus',
        //                 'tipe_tkd' => 'Spesific Grant',
        //                 'bidang_tkd' => 'Spesific Grant',
        //                 'subbidang_tkd' => 'Spesific Grant',
        //                 'uraian' => $bidang['bidang'],
        //             ]);
        //         }
        //     }
        // }

        // MonitoringPenggunaan::whereIn('tahun', ['2020','2021'])->where('bidang_tkd', 'Spesific Grant')->delete();

        // $updates = MonitoringPenggunaan::where('tipe_tkd', 'Block Grant')->get();
        // foreach ($updates as $update) {
        //     $update->update([
        //         'bidang_tkd' => $update->tipe_tkd,
        //         'subbidang_tkd' => $update->tipe_tkd,
        //     ]);
        // }

        // DAU

        // Ambil satu record dari DaftarPemda yang belum diproses (antrian null)
        $pemdas = DaftarPemda::whereNull('antrian')->get();
        // foreach ($pemdas as $pemda) {
        //     $pemda->update([
        //         'antrian' => NULL,
        //     ]);
        // }

        // // Ambil semua bidang yang tidak termasuk 'Dana Otonomi Khusus'
        // $bidangs = ParameterTkd::where('jenis_tkd', '<>', 'Dana Otonomi Khusus')->get();
        // $monitoringTahuns = [
        //     ['tahun' => '2020'],
        //     ['tahun' => '2021'],
        //     ['tahun' => '2022'],
        //     ['tahun' => '2023'],
        //     ['tahun' => '2024'],
        // ];

        // // Lakukan pemrosesan untuk setiap tahun dan bidang

        // foreach ($pemda as $pemdas) {
        //     foreach ($monitoringTahuns as $tahun) {
        //         foreach ($bidangs as $bidang) {
        //             // Cek kondisi uji petik
        //             if ($pemdas->uji_petik == 'Ya' && ($tahun['tahun'] == '2023' || $tahun['tahun'] == '2024')) {
        //                 // Proses eva_penyaluran
        //                 if (!empty($bidang->eva_penyaluran)) {
        //                     $uraianSalurs = explode(';', $bidang->eva_penyaluran);
        //                     foreach ($uraianSalurs as $item) {
        //                         MonitoringPenyaluran::create([
        //                             'tahun' => $tahun['tahun'],
        //                             'kode_pwk' => $pemdas->kode_pwk,
        //                             'nama_pemda' => $pemdas->nama_pemda,
        //                             'jenis_tkd' => $bidang->jenis_tkd,
        //                             'tipe_tkd' => $bidang->tipe_tkd,
        //                             'bidang_tkd' => $bidang->bidang_tkd,
        //                             'subbidang_tkd' => $bidang->subbidang_tkd,
        //                             'uraian' => $item,
        //                         ]);
        //                     }
        //                 }

        //                 // Proses eva_penggunaan
        //                 if (!empty($bidang->eva_penggunaan)) {
        //                     $uraianGunas = explode(';', $bidang->eva_penggunaan);
        //                     foreach ($uraianGunas as $item) {
        //                         MonitoringPenggunaan::create([
        //                             'tahun' => $tahun['tahun'],
        //                             'kode_pwk' => $pemdas->kode_pwk,
        //                             'nama_pemda' => $pemdas->nama_pemda,
        //                             'jenis_tkd' => $bidang->jenis_tkd,
        //                             'tipe_tkd' => $bidang->tipe_tkd,
        //                             'bidang_tkd' => $bidang->bidang_tkd,
        //                             'subbidang_tkd' => $bidang->subbidang_tkd,
        //                             'uraian' => $item,
        //                         ]);
        //                     }
        //                 }
        //             } else {
        //                 // Proses mon_penyaluran
        //                 if (!empty($bidang->mon_penyaluran)) {
        //                     $uraianSalurs = explode(';', $bidang->mon_penyaluran);
        //                     foreach ($uraianSalurs as $item) {
        //                         MonitoringPenyaluran::create([
        //                             'tahun' => $tahun['tahun'],
        //                             'kode_pwk' => $pemdas->kode_pwk,
        //                             'nama_pemda' => $pemdas->nama_pemda,
        //                             'jenis_tkd' => $bidang->jenis_tkd,
        //                             'tipe_tkd' => $bidang->tipe_tkd,
        //                             'bidang_tkd' => $bidang->bidang_tkd,
        //                             'subbidang_tkd' => $bidang->subbidang_tkd,
        //                             'uraian' => $item,
        //                         ]);
        //                     }
        //                 }

        //                 // Proses mon_penggunaan
        //                 if (!empty($bidang->mon_penggunaan)) {
        //                     $uraianGunas = explode(';', $bidang->mon_penggunaan);
        //                     foreach ($uraianGunas as $item) {
        //                         MonitoringPenggunaan::create([
        //                             'tahun' => $tahun['tahun'],
        //                             'kode_pwk' => $pemdas->kode_pwk,
        //                             'nama_pemda' => $pemdas->nama_pemda,
        //                             'jenis_tkd' => $bidang->jenis_tkd,
        //                             'tipe_tkd' => $bidang->tipe_tkd,
        //                             'bidang_tkd' => $bidang->bidang_tkd,
        //                             'subbidang_tkd' => $bidang->subbidang_tkd,
        //                             'uraian' => $item,
        //                         ]);
        //                     }
        //                 }
        //             }
        //         }
        //     }

        //     // Setelah selesai, tandai record sebagai diproses dengan memberikan nilai antrian
        //     $pemdas->update([
        //         'antrian' => 1
        //     ]);
        // }

        // $tkd_array = [
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Air Minum'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Sanitasi'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Pertanian'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Irigasi'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Kelautan dan Perikanan'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Jalan'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Kehutanan'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Pendidikan'],
        //     ['tipe_tkd' => 'Bidang DAK Fisik', 'jenis_tkd' => 'Kesehatan'],
        //     ['tipe_tkd' => 'Bidang DAK Non Fisik', 'jenis_tkd' => 'Bantuan Operasional Satuan Pendidikan (BOSP)'],
        //     ['tipe_tkd' => 'Bidang DAK Non Fisik', 'jenis_tkd' => 'Tunjangan Guru ASN Daerah'],
        //     ['tipe_tkd' => 'Bidang DAK Non Fisik', 'jenis_tkd' => 'Bantuan Operasional Kesehatan'],
        //     ['tipe_tkd' => 'Bidang DAK Non Fisik', 'jenis_tkd' => 'Bantuan Operasional Keluarga Berencana']
        // ];

        // foreach ($pemdas as $pemda) {
        //     MonitoringImmediateOutcome::create([
        //         'tahun' => 2023,
        //         'kode_pwk' => $pemda->kode_pwk,
        //         'nama_pemda' => $pemda->nama_pemda,
        //         'jenis_tkd' => 'Dana Alokasi Khusus',
        //         'tipe_tkd' => 'Bidang DAK Fisik',
        //         'bidang_tkd' => 'Pendidikan',
        //         'subbidang_tkd' => 'Pendidikan',
        //     ]);

        //     MonitoringImmediateOutcome::create([
        //         'tahun' => 2023,
        //         'kode_pwk' => $pemda->kode_pwk,
        //         'nama_pemda' => $pemda->nama_pemda,
        //         'jenis_tkd' => 'Dana Alokasi Khusus',
        //         'tipe_tkd' => 'Bidang DAK Fisik',
        //         'bidang_tkd' => 'Air Minum',
        //         'subbidang_tkd' => 'Air Minum',
        //     ]);

        //     MonitoringImmediateOutcome::create([
        //         'tahun' => 2023,
        //         'kode_pwk' => $pemda->kode_pwk,
        //         'nama_pemda' => $pemda->nama_pemda,
        //         'jenis_tkd' => 'Dana Alokasi Khusus',
        //         'tipe_tkd' => 'Bidang DAK Fisik',
        //         'bidang_tkd' => 'Sanitasi',
        //         'subbidang_tkd' => 'Sanitasi',
        //     ]);

        //     MonitoringImmediateOutcome::create([
        //         'tahun' => 2023,
        //         'kode_pwk' => $pemda->kode_pwk,
        //         'nama_pemda' => $pemda->nama_pemda,
        //         'jenis_tkd' => 'Dana Alokasi Khusus',
        //         'tipe_tkd' => 'Bidang DAK Fisik',
        //         'bidang_tkd' => 'Irigasi',
        //         'subbidang_tkd' => 'Irigasi',
        //     ]);

        //     MonitoringImmediateOutcome::create([
        //         'tahun' => 2023,
        //         'kode_pwk' => $pemda->kode_pwk,
        //         'nama_pemda' => $pemda->nama_pemda,
        //         'jenis_tkd' => 'Dana Alokasi Khusus',
        //         'tipe_tkd' => 'Bidang DAK Fisik',
        //         'bidang_tkd' => 'Pertanian',
        //         'subbidang_tkd' => 'Pertanian',
        //     ]);

        //     MonitoringImmediateOutcome::create([
        //         'tahun' => 2023,
        //         'kode_pwk' => $pemda->kode_pwk,
        //         'nama_pemda' => $pemda->nama_pemda,
        //         'jenis_tkd' => 'Dana Alokasi Khusus',
        //         'tipe_tkd' => 'Bidang DAK Fisik',
        //         'bidang_tkd' => 'Kelautan dan Perikanan',
        //         'subbidang_tkd' => 'Kelautan dan Perikanan',
        //     ]);

        //     foreach ([2023,2024] as $tahun) {
        //         foreach (['Pinjaman Luar Negeri yang Diterushibahkan', 'Hibah Luar Negeri yang Diterushibahkan', 'Penerimaan Dalam Negeri yang Dihibahkan'] as $hibah) {
        //             MonitoringHibah::create([
        //                 'tahun' => $tahun,
        //                 'kode_pwk' => $pemda->kode_pwk,
        //                 'nama_pemda' => $pemda->nama_pemda,
        //                 'jenis_tkd' => 'Dana Alokasi Khusus',
        //                 'tipe_tkd' => 'Bidang DAK Fisik',
        //                 'bidang_tkd' => 'Kelautan dan Perikanan',
        //                 'uraian_hibah' => $hibah,
        //             ]);
        //         }
        //     }

        //     // Setelah selesai, tandai record sebagai diproses dengan memberikan nilai antrian
        //     $pemda->update([
        //         'antrian' => 1
        //     ]);
        // }


        // Jika tidak ada pemda dengan antrian null, redirect ke home
        // return redirect(route('ppbrs.create'));
    }

    /**
     * Store a newly created MonitoringTl in storage.
     *
     * @param CreateMonitoringTlRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringTlRequest $request)
    {
        //
    }

    /**
     * Display the specified MonitoringTl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        return view('monitoring_tls.show')->with('monitoringTl', $monitoringTl);
    }

    /**
     * Show the form for editing the specified MonitoringTl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lastPenggunaan = MonitoringPenyaluran::orderBy('id', 'DESC')->first();
        dd($lastPenggunaan);
    }

    /**
     * Update the specified MonitoringTl in storage.
     *
     * @param int $id
     * @param UpdateMonitoringTlRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $pemda = DaftarPemda::find($id);

        if (empty($pemda)) {
            Flash::error('Pemda not found');
            return redirect(route('ppbrs.index'));
        }

        MonitoringPenyaluran::where('nama_pemda', $pemda->nama_pemda)->whereIn('tahun', ['2023', '2024'])->get();
        MonitoringPenggunaan::where('nama_pemda', $pemda->nama_pemda)->whereIn('tahun', ['2023', '2024'])->get();

        if ($request->action == 'Jadikan Uji Petik') {
            $uji_petik = 'Ya';

            $pemda = DaftarPemda::where('id', $id)->first();
            $bidangs = ParameterTkd::where('jenis_tkd', '<>', 'Dana Otonomi Khusus')->get();
            foreach ([2023, 2024] as $tahun) {
                foreach ($bidangs as $bidang) {
                    MonitoringPenyaluran::where('nama_pemda', $pemda->nama_pemda)->whereIn('tahun', ['2023', '2024'])->get();
                    MonitoringPenggunaan::where('nama_pemda', $pemda->nama_pemda)->whereIn('tahun', ['2023', '2024'])->get();
                    // Proses eva_penyaluran
                    if (!empty($bidang->eva_penyaluran)) {
                        $uraianSalurs = explode(';', $bidang->eva_penyaluran);
                        foreach ($uraianSalurs as $item) {
                            MonitoringPenyaluran::create([
                                'tahun' => $tahun,
                                'kode_pwk' => $pemda->kode_pwk,
                                'nama_pemda' => $pemda->nama_pemda,
                                'jenis_tkd' => $bidang->jenis_tkd,
                                'tipe_tkd' => $bidang->tipe_tkd,
                                'bidang_tkd' => $bidang->bidang_tkd,
                                'subbidang_tkd' => $bidang->subbidang_tkd,
                                'uraian' => $item,
                            ]);
                        }
                    }

                    // Proses eva_penggunaan
                    if (!empty($bidang->eva_penggunaan)) {
                        $uraianGunas = explode(';', $bidang->eva_penggunaan);
                        foreach ($uraianGunas as $item) {
                            MonitoringPenggunaan::create([
                                'tahun' => $tahun,
                                'kode_pwk' => $pemda->kode_pwk,
                                'nama_pemda' => $pemda->nama_pemda,
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
        } else {
            $uji_petik = NULL;

            $pemda = DaftarPemda::where('id', $id)->first();
            $bidangs = ParameterTkd::where('jenis_tkd', '<>', 'Dana Otonomi Khusus')->get();
            foreach ([2023, 2024] as $tahun) {
                foreach ($bidangs as $bidang) {
                    // Proses mon_penyaluran
                    if (!empty($bidang->mon_penyaluran)) {
                        $uraianSalurs = explode(';', $bidang->mon_penyaluran);
                        foreach ($uraianSalurs as $item) {
                            MonitoringPenyaluran::create([
                                'tahun' => $tahun,
                                'kode_pwk' => $pemda->kode_pwk,
                                'nama_pemda' => $pemda->nama_pemda,
                                'jenis_tkd' => $bidang->jenis_tkd,
                                'tipe_tkd' => $bidang->tipe_tkd,
                                'bidang_tkd' => $bidang->bidang_tkd,
                                'subbidang_tkd' => $bidang->subbidang_tkd,
                                'uraian' => $item,
                            ]);
                        }
                    }

                    // Proses mon_penggunaan
                    if (!empty($bidang->mon_penggunaan)) {
                        $uraianGunas = explode(';', $bidang->mon_penggunaan);
                        foreach ($uraianGunas as $item) {
                            MonitoringPenggunaan::create([
                                'tahun' => $tahun,
                                'kode_pwk' => $pemda->kode_pwk,
                                'nama_pemda' => $pemda->nama_pemda,
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

        $pemda = DaftarPemda::where('id', $id)->update([
            'uji_petik' => $uji_petik
        ]);

        Flash::success('Pemda Uji Petik updated successfully.');

        return redirect(route('ppbrs.index'));
    }

    /**
     * Remove the specified MonitoringTl from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        $this->monitoringTlRepository->delete($id);

        Flash::success('Monitoring Tl deleted successfully.');

        return redirect(route('monitoringTls.index'));
    }
}
