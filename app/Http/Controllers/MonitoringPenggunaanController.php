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

class MonitoringPenggunaanController extends AppBaseController
{
    /** @var MonitoringPenggunaanRepository $monitoringPenggunaanRepository*/
    private $monitoringPenggunaanRepository;

    public function __construct(MonitoringPenggunaanRepository $monitoringPenggunaanRepo)
    {
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
        $nama_pemda = $request->query('nama_pemda');

        $daftarPemdas = DaftarPemda::where('nama_pemda', 'like', '%' . $nama_pemda . '%')->paginate(10);
        
        $monitoringPenggunaans = $this->monitoringPenggunaanRepository->all();

        return view('monitoring_penggunaans.index')
            ->with(['monitoringPenggunaans' => $monitoringPenggunaans , 'daftarPemdas' => $daftarPemdas , 'nama_pemda' => $nama_pemda]);
    }

    /**
     * Show the form for creating a new MonitoringPenggunaan.
     *
     * @return Response
     */
    public function create($pemda_id, $tahun)
    {
        $pemda = DaftarPemda::find($pemda_id);
        $bidang_tkds = ParameterTkd::where('jenis_tkd', session('jenis_tkd'))->get();
        $monitoringPenggunaan = [];
        return view('monitoring_penggunaans.create')
            ->with([
                'pemda' => $pemda,
                'tahun' => $tahun,
                'bidang_tkds' => $bidang_tkds,
                'monitoringPenggunaan' => $monitoringPenggunaan
            ]);
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
        $input = $request->all();

        $monitoringPenggunaan = $this->monitoringPenggunaanRepository->create($input);

        Flash::success('Monitoring Penggunaan saved successfully.');

        return redirect(route('monitoringPenggunaans.index'));
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
        $monitoringPenggunaan = $this->monitoringPenggunaanRepository->find($id);

        if (empty($monitoringPenggunaan)) {
            Flash::error('Monitoring Penggunaan not found');

            return redirect(route('monitoringPenggunaans.index'));
        }

        return view('monitoring_penggunaans.show')->with('monitoringPenggunaan', $monitoringPenggunaan);
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
        $monitoringPenggunaan = $this->monitoringPenggunaanRepository->find($id);
        $alokasi_id = MonitoringAlokasi::where('tahun', $monitoringPenggunaan->tahun)->where('nama_pemda', $monitoringPenggunaan->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->first();

        if (empty($monitoringPenggunaan)) {
            Flash::error('Monitoring Penggunaan not found');
            return redirect(route('monitoringPenggunaans.index'));
        }

        return view('monitoring_penggunaans.edit')->with(['monitoringPenggunaan' => $monitoringPenggunaan, 'alokasi_id' => $alokasi_id->id]);
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
        $monitoringPenggunaan = $this->monitoringPenggunaanRepository->find($id);

        if (empty($monitoringPenggunaan)) {
            Flash::error('Monitoring Penggunaan not found');

            return redirect(route('monitoringPenggunaans.index'));
        }

        $monitoringPenggunaan = $this->monitoringPenggunaanRepository->update($request->all(), $id);

        Flash::success('Monitoring Penggunaan updated successfully.');

        return redirect(route('monitoringPenggunaans.index'));
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
        $monitoringPenggunaan = $this->monitoringPenggunaanRepository->find($id);

        if (empty($monitoringPenggunaan)) {
            Flash::error('Monitoring Penggunaan not found');

            return redirect(route('monitoringPenggunaans.index'));
        }

        $this->monitoringPenggunaanRepository->delete($id);

        Flash::success('Monitoring Penggunaan deleted successfully.');

        return redirect()->back();
    }
}
