<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringPenyaluranRequest;
use App\Http\Requests\UpdateMonitoringPenyaluranRequest;
use App\Repositories\MonitoringPenyaluranRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MonitoringPenyaluranController extends AppBaseController
{
    /** @var MonitoringPenyaluranRepository $monitoringPenyaluranRepository*/
    private $monitoringPenyaluranRepository;

    public function __construct(MonitoringPenyaluranRepository $monitoringPenyaluranRepo)
    {
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
        $monitoringPenyalurans = $this->monitoringPenyaluranRepository->all();

        return view('monitoring_penyalurans.index')
            ->with('monitoringPenyalurans', $monitoringPenyalurans);
    }

    /**
     * Show the form for creating a new MonitoringPenyaluran.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_penyalurans.create');
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
        $input = $request->all();

        $monitoringPenyaluran = $this->monitoringPenyaluranRepository->create($input);

        Flash::success('Monitoring Penyaluran saved successfully.');

        return redirect(route('monitoringPenyalurans.index'));
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
        $monitoringPenyaluran = $this->monitoringPenyaluranRepository->find($id);

        if (empty($monitoringPenyaluran)) {
            Flash::error('Monitoring Penyaluran not found');

            return redirect(route('monitoringPenyalurans.index'));
        }

        return view('monitoring_penyalurans.show')->with('monitoringPenyaluran', $monitoringPenyaluran);
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
        $monitoringPenyaluran = $this->monitoringPenyaluranRepository->find($id);

        if (empty($monitoringPenyaluran)) {
            Flash::error('Monitoring Penyaluran not found');

            return redirect(route('monitoringPenyalurans.index'));
        }

        return view('monitoring_penyalurans.edit')->with('monitoringPenyaluran', $monitoringPenyaluran);
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
        $monitoringPenyaluran = $this->monitoringPenyaluranRepository->find($id);

        if (empty($monitoringPenyaluran)) {
            Flash::error('Monitoring Penyaluran not found');

            return redirect(route('monitoringPenyalurans.index'));
        }

        $monitoringPenyaluran = $this->monitoringPenyaluranRepository->update($request->all(), $id);

        Flash::success('Monitoring Penyaluran updated successfully.');

        return redirect(route('monitoringPenyalurans.index'));
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
        $monitoringPenyaluran = $this->monitoringPenyaluranRepository->find($id);

        if (empty($monitoringPenyaluran)) {
            Flash::error('Monitoring Penyaluran not found');

            return redirect(route('monitoringPenyalurans.index'));
        }

        $this->monitoringPenyaluranRepository->delete($id);

        Flash::success('Monitoring Penyaluran deleted successfully.');

        return redirect(route('monitoringPenyalurans.index'));
    }
}
