<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringTlRequest;
use App\Http\Requests\UpdateMonitoringTlRequest;
use App\Repositories\MonitoringTlRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\MonitoringTl;
use App\Models\PPBR;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class PPBRController extends AppBaseController
{
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $ppbr = PPBR::where('jenis_tkd', session('jenis_tkd'))->paginate(20);
        } else {
            $ppbr = PPBR::where('kode_pwk', Auth::user()->kode_pwk)->where('jenis_tkd', session('jenis_tkd'))->orderBy('rank_risiko_total', 'DESC')->paginate(20);
        }

        return view('ppbr.index')
            ->with('ppbr', $ppbr);
    }

    /**
     * Show the form for creating a new MonitoringTl.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_tls.create');
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
        $input = $request->all();

        $monitoringTl = $this->monitoringTlRepository->create($input);

        Flash::success('Monitoring Tl saved successfully.');

        return redirect(route('monitoringTls.index'));
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
    public function update($id, UpdateMonitoringTlRequest $request)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        $monitoringTl = $this->monitoringTlRepository->update($request->all(), $id);

        Flash::success('Monitoring Tl updated successfully.');

        return redirect(route('monitoringTls.index'));
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
