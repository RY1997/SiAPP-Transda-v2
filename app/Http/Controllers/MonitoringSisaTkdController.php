<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringSisaTkdRequest;
use App\Http\Requests\UpdateMonitoringSisaTkdRequest;
use App\Repositories\MonitoringSisaTkdRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\MonitoringAlokasi;
use App\Models\MonitoringSisaTkd;
use Illuminate\Http\Request;
use Flash;
use Response;

class MonitoringSisaTkdController extends AppBaseController
{
    /** @var MonitoringSisaTkdRepository $monitoringSisaTkdRepository*/
    private $monitoringSisaTkdRepository;

    public function __construct(MonitoringSisaTkdRepository $monitoringSisaTkdRepo)
    {
        $this->middleware('auth');
        $this->monitoringSisaTkdRepository = $monitoringSisaTkdRepo;
    }

    /**
     * Display a listing of the MonitoringSisaTkd.
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
     * Show the form for creating a new MonitoringSisaTkd.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created MonitoringSisaTkd in storage.
     *
     * @param CreateMonitoringSisaTkdRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringSisaTkdRequest $request)
    {
        $monitoringSisaTkds = MonitoringSisaTkd::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->where('tipe_tkd', $request->tipe_tkd)->where('bidang_tkd', $request->bidang_tkd)->get();

        if (empty($monitoringSisaTkds)) {
            Flash::error('Sisa Dana not found');
            return redirect()->back();
        }

        foreach ($monitoringSisaTkds as $monitoringSisaTkd) {
            MonitoringSisaTkd::where('id', $monitoringSisaTkd->id)->update([
                'sisa_dana_tkd' => $request->{'sisa_dana_tkd_' . $monitoringSisaTkd->id},
                'dianggarkan_kembali' => $request->{'dianggarkan_kembali_' . $monitoringSisaTkd->id},
                'tidak_dianggarkan_kembali' => $request->{'tidak_dianggarkan_kembali_' . $monitoringSisaTkd->id},
                'penyebab' => $request->{'penyebab_' . $monitoringSisaTkd->id},
            ]);
        }

        Flash::success('Sisa Dana updated successfully.');

        $monitoringAlokasi = MonitoringAlokasi::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->first();

        return redirect(route('monitoringTrens.show', $monitoringAlokasi->id));
    }

    /**
     * Display the specified MonitoringSisaTkd.
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
     * Show the form for editing the specified MonitoringSisaTkd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisa_id = $this->monitoringSisaTkdRepository->find($id);

        if (empty($sisa_id)) {
            Flash::error('Sisa Dana not found');
            return redirect()->back();
        }

        $monitoringSisaTkds = MonitoringSisaTkd::where('tahun', $sisa_id->tahun)->where('nama_pemda', $sisa_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->where('tipe_tkd', $sisa_id->tipe_tkd)->where('bidang_tkd', $sisa_id->bidang_tkd)->get();

        $alokasi_id = MonitoringAlokasi::where('tahun', $sisa_id->tahun)->where('nama_pemda', $sisa_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->first();

        return view('monitoring_sisa_tkds.edit')->with([
            'monitoringSisaTkds' => $monitoringSisaTkds,
            'sisa_id' => $sisa_id,
        ]);
    }

    /**
     * Update the specified MonitoringSisaTkd in storage.
     *
     * @param int $id
     * @param UpdateMonitoringSisaTkdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringSisaTkdRequest $request)
    {
        //
    }

    /**
     * Remove the specified MonitoringSisaTkd from storage.
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
