<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringPpRequest;
use App\Http\Requests\UpdateMonitoringPpRequest;
use App\Repositories\MonitoringPpRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringPp;
use Illuminate\Http\Request;
use Flash;
use Response;

class MonitoringPpController extends AppBaseController
{
    /** @var MonitoringPpRepository $monitoringPpRepository*/
    private $monitoringPpRepository;

    public function __construct(MonitoringPpRepository $monitoringPpRepo)
    {
        $this->middleware('auth');
        $this->monitoringPpRepository = $monitoringPpRepo;
    }

    /**
     * Display a listing of the MonitoringPp.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nama_pemda = $request->query('nama_pemda');
        $monitoringPps = MonitoringPp::where('nama_pemda', 'like', '%' . $nama_pemda . '%')->orderBy('kode_pwk')->orderBy('nama_pemda', 'DESC')->orderBy('tahun')->paginate(50);

        return view('monitoring_pps.index')
            ->with([
                'monitoringPps' => $monitoringPps,
                'nama_pemda' => $nama_pemda,
                'page' => $request->page
            ]);
    }

    /**
     * Show the form for creating a new MonitoringPp.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_pps.create');
    }

    /**
     * Store a newly created MonitoringPp in storage.
     *
     * @param CreateMonitoringPpRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringPpRequest $request)
    {
        $input = $request->all();

        $monitoringPp = $this->monitoringPpRepository->create($input);

        Flash::success('Monitoring Pp saved successfully.');

        return redirect(route('monitoringPps.index'));
    }

    /**
     * Display the specified MonitoringPp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $monitoringPp = $this->monitoringPpRepository->find($id);

        if (empty($monitoringPp)) {
            Flash::error('Monitoring Pp not found');

            return redirect(route('monitoringPps.index'));
        }

        return view('monitoring_pps.show')->with('monitoringPp', $monitoringPp);
    }

    /**
     * Show the form for editing the specified MonitoringPp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $monitoringPp = $this->monitoringPpRepository->find($id);

        if (empty($monitoringPp)) {
            Flash::error('Monitoring Pp not found');

            return redirect(route('monitoringPps.index'));
        }

        return view('monitoring_pps.edit')->with('monitoringPp', $monitoringPp);
    }

    /**
     * Update the specified MonitoringPp in storage.
     *
     * @param int $id
     * @param UpdateMonitoringPpRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringPpRequest $request)
    {
        $monitoringPp = $this->monitoringPpRepository->find($id);

        if (empty($monitoringPp)) {
            Flash::error('Monitoring Pp not found');

            return redirect(route('monitoringPps.index'));
        }

        $monitoringPp = $this->monitoringPpRepository->update($request->all(), $id);

        Flash::success('Monitoring Pp updated successfully.');

        return redirect(route('monitoringPps.index'));
    }

    /**
     * Remove the specified MonitoringPp from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoringPp = $this->monitoringPpRepository->find($id);

        if (empty($monitoringPp)) {
            Flash::error('Monitoring Pp not found');

            return redirect(route('monitoringPps.index'));
        }

        $this->monitoringPpRepository->delete($id);

        Flash::success('Monitoring Pp deleted successfully.');

        return redirect(route('monitoringPps.index'));
    }
}
