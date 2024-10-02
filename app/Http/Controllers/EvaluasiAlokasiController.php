<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringAlokasiRequest;
use App\Http\Requests\UpdateMonitoringAlokasiRequest;
use App\Repositories\MonitoringAlokasiRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringAlokasi;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvaluasiAlokasiController extends AppBaseController
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
        //
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
        $monitoringAlokasis = MonitoringAlokasi::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->where('tipe_tkd', $request->tipe_tkd)->where('bidang_tkd', $request->bidang_tkd)->where('subbidang_tkd', $request->subbidang_tkd)->get();

        if (empty($monitoringAlokasis)) {
            Flash::error('Alokasi not found');
            return redirect()->back();
        }

        foreach ($monitoringAlokasis as $monitoringAlokasi) {
            MonitoringAlokasi::where('id', $monitoringAlokasi->id)->update([
                'status_pemda' => $request->{'status_pemda_' . $monitoringAlokasi->id},
                'rk_usulan' => $request->{'rk_usulan_' . $monitoringAlokasi->id},
                'rk_disetujui' => $request->{'rk_disetujui_' . $monitoringAlokasi->id},
                'tgl_juknis' => $request->{'tgl_juknis_' . $monitoringAlokasi->id},
                'alokasi_tkd' => $request->{'alokasi_tkd_' . $monitoringAlokasi->id},
                'alokasi_tkd_sebelumnya' => $request->{'alokasi_tkd_sebelumnya_' . $monitoringAlokasi->id},
                'penyebab_tidak_tepat_jumlah' => $request->{'penyebab_tidak_tepat_jumlah_' . $monitoringAlokasi->id}
            ]);
        }

        Flash::success('Alokasi updated successfully.');

        $monitoringAlokasi = MonitoringAlokasi::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->first();

        return redirect(route('evaluasiTrens.show', $monitoringAlokasi->id));
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
        //
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
        $alokasi_id = $this->monitoringAlokasiRepository->find($id);

        if (empty($alokasi_id)) {
            Flash::error('Alokasi not found');
            return redirect()->back();
        }

        $monitoringAlokasis = MonitoringAlokasi::where('tahun', $alokasi_id->tahun)->where('nama_pemda', $alokasi_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->where('tipe_tkd', $alokasi_id->tipe_tkd)->where('bidang_tkd', $alokasi_id->bidang_tkd)->where('subbidang_tkd', $alokasi_id->subbidang_tkd)->get();

        return view('evaluasi_alokasis.edit')->with([
            'monitoringAlokasis' => $monitoringAlokasis,
            'alokasi_id' => $monitoringAlokasis->first()
        ]);
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
