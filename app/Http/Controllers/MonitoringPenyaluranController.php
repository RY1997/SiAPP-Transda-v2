<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringPenyaluranRequest;
use App\Http\Requests\UpdateMonitoringPenyaluranRequest;
use App\Repositories\MonitoringPenyaluranRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringAlokasi;
use App\Models\MonitoringPenyaluran;
use Illuminate\Http\Request;
use Flash;
use Response;

class MonitoringPenyaluranController extends AppBaseController
{
    /** @var MonitoringPenyaluranRepository $monitoringPenyaluranRepository*/
    private $monitoringPenyaluranRepository;

    public function __construct(MonitoringPenyaluranRepository $monitoringPenyaluranRepo)
    {
        $this->middleware('auth');
        $this->monitoringPenyaluranRepository = $monitoringPenyaluranRepo;
    }

    /**
     * Display a listing of the MonitoringPenyaluran.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new MonitoringPenyaluran.
     *
     * @return Response
     */
    public function create($pemda_id, $tahun)
    {
        //
    }

    /**
     * Store a newly created MonitoringPenyaluran in storage.
     *
     * @param CreateMonitoringPenyaluranRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringPenyaluranRequest $request)
    {
        $monitoringPenyalurans = MonitoringPenyaluran::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->where('tipe_tkd', $request->tipe_tkd)->where('bidang_tkd', $request->bidang_tkd)->get();

        if (empty($monitoringPenyalurans)) {
            Flash::error('Penyaluran not found');
            return redirect()->back();
        }

        foreach ($monitoringPenyalurans as $monitoringPenyaluran) {
            MonitoringPenyaluran::where('id', $monitoringPenyaluran->id)->update([
                'tgl_salur' => $request->{'tgl_salur_' . $monitoringPenyaluran->id},
                'saldo_rkud' => $request->{'saldo_rkud_' . $monitoringPenyaluran->id},
                'saldo_pokok' => $request->{'saldo_pokok_' . $monitoringPenyaluran->id},
                'remunerasi' => $request->{'remunerasi_' . $monitoringPenyaluran->id},
                'penarikan_seluruhnya' => $request->{'penarikan_seluruhnya_' . $monitoringPenyaluran->id},
                'penyaluran_tkd' => session('jenis_tkd') == 'Dana Bagi Hasil' ? ($request->{'saldo_rkud_' . $monitoringPenyaluran->id} + $request->{'saldo_pokok_' . $monitoringPenyaluran->id} + $request->{'remunerasi_' . $monitoringPenyaluran->id} - $request->{'penarikan_seluruhnya_' . $monitoringPenyaluran->id} - $request->{'potong_salur_' . $monitoringPenyaluran->id} - $request->{'tunda_salur_' . $monitoringPenyaluran->id}) : $request->{'penyaluran_tkd_' . $monitoringPenyaluran->id},
                'penyaluran_tkd_sebelumnya' => $request->{'penyaluran_tkd_sebelumnya_' . $monitoringPenyaluran->id},
                'penyebab_tidak_tepat_jumlah' => $request->{'penyebab_tidak_tepat_jumlah_' . $monitoringPenyaluran->id},
                'potong_salur' => $request->{'potong_salur_' . $monitoringPenyaluran->id},
                'tunda_salur' => $request->{'tunda_salur_' . $monitoringPenyaluran->id}
            ]);
        }

        Flash::success('Penyaluran updated successfully.');

        $monitoringAlokasi = MonitoringAlokasi::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->first();

        return redirect(route('monitoringTrens.show', $monitoringAlokasi->id));
    }

    /**
     * Display the specified MonitoringPenyaluran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified MonitoringPenyaluran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $penyaluran_id = $this->monitoringPenyaluranRepository->find($id);

        if (empty($penyaluran_id)) {
            Flash::error('Penyaluran not found');
            return redirect()->back();
        }

        $monitoringPenyalurans = MonitoringPenyaluran::where('tahun', $penyaluran_id->tahun)->where('nama_pemda', $penyaluran_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->where('tipe_tkd', $penyaluran_id->tipe_tkd)->where('bidang_tkd', $penyaluran_id->bidang_tkd)->get();

        $alokasi_id = MonitoringAlokasi::where('tahun', $penyaluran_id->tahun)->where('nama_pemda', $penyaluran_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->first();

        return view('monitoring_penyalurans.edit')->with(['monitoringPenyalurans' => $monitoringPenyalurans, 'alokasi_id' => $alokasi_id]);
    }

    /**
     * Update the specified MonitoringPenyaluran in storage.
     *
     * @param int $id
     * @param UpdateMonitoringPenyaluranRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringPenyaluranRequest $request)
    {
        //
    }

    /**
     * Remove the specified MonitoringPenyaluran from storage.
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
