<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringPenggunaanRequest;
use App\Http\Requests\UpdateMonitoringPenggunaanRequest;
use App\Repositories\MonitoringPenggunaanRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringAlokasi;
use App\Models\MonitoringPenggunaan;
use App\Models\ParameterTkd;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvaluasiPenggunaanController extends AppBaseController
{
    /** @var MonitoringPenggunaanRepository $monitoringPenggunaanRepository*/
    private $monitoringPenggunaanRepository;

    public function __construct(MonitoringPenggunaanRepository $monitoringPenggunaanRepo)
    {
        $this->middleware('auth');
        $this->monitoringPenggunaanRepository = $monitoringPenggunaanRepo;
    }

    /**
     * Display a listing of the MonitoringPenggunaan.
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
     * Show the form for creating a new MonitoringPenggunaan.
     *
     * @return Response
     */
    public function create($pemda_id, $tahun)
    {
        //
    }

    /**
     * Store a newly created MonitoringPenggunaan in storage.
     *
     * @param CreateMonitoringPenggunaanRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringPenggunaanRequest $request)
    {
        $monitoringPenggunaans = MonitoringPenggunaan::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->where('bidang_tkd', $request->bidang_tkd)->where('subbidang_tkd', $request->subbidang_tkd)->get();

        if (empty($monitoringPenggunaans)) {
            Flash::error('Penggunaan not found');
            return redirect()->back();
        }

        foreach ($monitoringPenggunaans as $monitoringPenggunaan) {
            MonitoringPenggunaan::where('id', $monitoringPenggunaan->id)->update([
                'jml_kontrak' => $request->{'jml_kontrak_' . $monitoringPenggunaan->id},
                'anggaran_barjas' => $request->{'anggaran_barjas_' . $monitoringPenggunaan->id},
                'anggaran_pegawai' => $request->{'anggaran_pegawai_' . $monitoringPenggunaan->id},
                'anggaran_modal' => $request->{'anggaran_modal_' . $monitoringPenggunaan->id},
                'anggaran_hibah' => $request->{'anggaran_hibah_' . $monitoringPenggunaan->id},
                'anggaran_lainnya' => $request->{'anggaran_lainnya_' . $monitoringPenggunaan->id},
                'realisasi_barjas' => $request->{'realisasi_barjas_' . $monitoringPenggunaan->id},
                'realisasi_pegawai' => $request->{'realisasi_pegawai_' . $monitoringPenggunaan->id},
                'realisasi_modal' => $request->{'realisasi_modal_' . $monitoringPenggunaan->id},
                'realisasi_hibah' => $request->{'realisasi_hibah_' . $monitoringPenggunaan->id},
                'realisasi_lainnya' => $request->{'realisasi_lainnya_' . $monitoringPenggunaan->id}
            ]);
        }

        Flash::success('Penggunaan updated successfully.');

        $monitoringAlokasi = MonitoringAlokasi::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->first();

        return redirect(route('evaluasiTrens.show', $monitoringAlokasi->id));
    }

    /**
     * Display the specified MonitoringPenggunaan.
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
     * Show the form for editing the specified MonitoringPenggunaan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $penggunaan_id = $this->monitoringPenggunaanRepository->find($id);

        if (empty($penggunaan_id)) {
            Flash::error('Penggunaan not found');
            return redirect()->back();
        }

        $monitoringPenggunaans = MonitoringPenggunaan::where('tahun', $penggunaan_id->tahun)->where('nama_pemda', $penggunaan_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->where('bidang_tkd', $penggunaan_id->bidang_tkd)->where('subbidang_tkd', $penggunaan_id->subbidang_tkd)->get();

        $alokasi_id = MonitoringAlokasi::where('tahun', $penggunaan_id->tahun)->where('nama_pemda', $penggunaan_id->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->first();

        return view('evaluasi_penggunaans.edit')->with(['monitoringPenggunaans' => $monitoringPenggunaans, 'alokasi_id' => $alokasi_id]);
    }

    /**
     * Update the specified MonitoringPenggunaan in storage.
     *
     * @param int $id
     * @param UpdateMonitoringPenggunaanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringPenggunaanRequest $request)
    {
        //
    }

    /**
     * Remove the specified MonitoringPenggunaan from storage.
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
