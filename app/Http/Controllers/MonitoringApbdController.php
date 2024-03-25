<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringApbdRequest;
use App\Http\Requests\UpdateMonitoringApbdRequest;
use App\Repositories\MonitoringApbdRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringApbd;
use Illuminate\Http\Request;
use Flash;
use Response;

class MonitoringApbdController extends AppBaseController
{
    /** @var MonitoringApbdRepository $monitoringApbdRepository*/
    private $monitoringApbdRepository;

    public function __construct(MonitoringApbdRepository $monitoringApbdRepo)
    {
        $this->monitoringApbdRepository = $monitoringApbdRepo;
    }

    /**
     * Display a listing of the MonitoringApbd.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nama_pemda = $request->query('nama_pemda');
        $daftarPemdas = DaftarPemda::where('nama_pemda', 'like', '%' . $nama_pemda . '%')->paginate(20);

        $monitoringApbds = MonitoringApbd::orderBy('nama_pemda')->orderBy('nama_pemda')->orderBy('tahun')->paginate(50);

        return view('monitoring_apbds.index')
            ->with(['monitoringApbds' => $monitoringApbds , 'daftarPemdas' => $daftarPemdas , 'nama_pemda' => $nama_pemda]);
    }

    /**
     * Show the form for creating a new MonitoringApbd.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_apbds.create');
    }

    /**
     * Store a newly created MonitoringApbd in storage.
     *
     * @param CreateMonitoringApbdRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringApbdRequest $request)
    {
        $input = $request->all();

        $monitoringApbd = $this->monitoringApbdRepository->create($input);

        Flash::success('Monitoring Apbd saved successfully.');

        return redirect(route('monitoringApbds.index'));
    }

    /**
     * Display the specified MonitoringApbd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $monitoringApbd = $this->monitoringApbdRepository->find($id);

        if (empty($monitoringApbd)) {
            Flash::error('Monitoring Apbd not found');

            return redirect(route('monitoringApbds.index'));
        }

        return view('monitoring_apbds.show')->with('monitoringApbd', $monitoringApbd);
    }

    /**
     * Show the form for editing the specified MonitoringApbd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $monitoringApbd = $this->monitoringApbdRepository->find($id);

        if (empty($monitoringApbd)) {
            Flash::error('Monitoring Apbd not found');

            return redirect(route('monitoringApbds.index'));
        }

        return view('monitoring_apbds.edit')->with('monitoringApbd', $monitoringApbd);
    }

    /**
     * Update the specified MonitoringApbd in storage.
     *
     * @param int $id
     * @param UpdateMonitoringApbdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringApbdRequest $request)
    {
        $monitoringApbd = $this->monitoringApbdRepository->find($id);

        if (empty($monitoringApbd)) {
            Flash::error('Monitoring Apbd not found');

            return redirect(route('monitoringApbds.index'));
        }

        $monitoringApbd = $this->monitoringApbdRepository->update($request->all(), $id);

        Flash::success('Monitoring Apbd updated successfully.');

        return redirect(route('monitoringApbds.index'));
    }

    /**
     * Remove the specified MonitoringApbd from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoringApbd = $this->monitoringApbdRepository->find($id);

        if (empty($monitoringApbd)) {
            Flash::error('Monitoring Apbd not found');

            return redirect(route('monitoringApbds.index'));
        }

        $this->monitoringApbdRepository->delete($id);

        Flash::success('Monitoring Apbd deleted successfully.');

        return redirect(route('monitoringApbds.index'));
    }
}
