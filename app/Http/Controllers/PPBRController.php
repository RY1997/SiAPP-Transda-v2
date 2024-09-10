<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringTlRequest;
use App\Http\Requests\UpdateMonitoringTlRequest;
use App\Repositories\MonitoringTlRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringPenggunaan;
use App\Models\MonitoringPenyaluran;
use App\Models\MonitoringTl;
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
    public function create()
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

        $updates = MonitoringPenggunaan::where('tipe_tkd', 'Block Grant')->get();
        foreach ($updates as $update) {
            $update->update([
                'bidang_tkd' => $update->tipe_tkd,
                'subbidang_tkd' => $update->tipe_tkd,
            ]);
        }
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
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        return view('monitoring_tls.edit')->with('monitoringTl', $monitoringTl);
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

        if ($request->action == 'Jadikan Uji Petik') {
            $uji_petik = 'Ya';
        } else {
            $uji_petik = NULL;
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
