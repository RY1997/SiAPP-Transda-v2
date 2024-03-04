<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringAlokasiRequest;
use App\Http\Requests\UpdateMonitoringAlokasiRequest;
use App\Repositories\MonitoringAlokasiRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use Illuminate\Http\Request;
use Flash;
use Response;

class MonitoringAlokasiController extends AppBaseController
{
    /** @var MonitoringAlokasiRepository $monitoringAlokasiRepository*/
    private $monitoringAlokasiRepository;

    public function __construct(MonitoringAlokasiRepository $monitoringAlokasiRepo)
    {
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
        $nama_pemda = $request->query('nama_pemda');

        $daftarPemdas = DaftarPemda::where('nama_pemda', 'like', '%' . $nama_pemda . '%')->paginate(10);

        $monitoringAlokasis = $this->monitoringAlokasiRepository->all();

        return view('monitoring_alokasis.index')
            ->with(['monitoringAlokasis' => $monitoringAlokasis , 'daftarPemdas' => $daftarPemdas , 'nama_pemda' => $nama_pemda]);
    }

    /**
     * Show the form for creating a new MonitoringAlokasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_alokasis.create');
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
        $input = $request->all();

        $monitoringAlokasi = $this->monitoringAlokasiRepository->create($input);

        Flash::success('Monitoring Alokasi saved successfully.');

        return redirect(route('monitoringAlokasis.index'));
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
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        return view('monitoring_alokasis.show')->with('monitoringAlokasi', $monitoringAlokasi);
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
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        return view('monitoring_alokasis.edit')->with('monitoringAlokasi', $monitoringAlokasi);
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
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        $monitoringAlokasi = $this->monitoringAlokasiRepository->update($request->all(), $id);

        Flash::success('Monitoring Alokasi updated successfully.');

        return redirect(route('monitoringAlokasis.index'));
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
        $monitoringAlokasi = $this->monitoringAlokasiRepository->find($id);

        if (empty($monitoringAlokasi)) {
            Flash::error('Monitoring Alokasi not found');

            return redirect(route('monitoringAlokasis.index'));
        }

        $this->monitoringAlokasiRepository->delete($id);

        Flash::success('Monitoring Alokasi deleted successfully.');

        return redirect(route('monitoringAlokasis.index'));
    }
}
