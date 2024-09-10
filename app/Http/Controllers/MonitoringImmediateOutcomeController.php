<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringImmediateOutcomeRequest;
use App\Http\Requests\UpdateMonitoringImmediateOutcomeRequest;
use App\Repositories\MonitoringImmediateOutcomeRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\MonitoringImmediateOutcome;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class MonitoringImmediateOutcomeController extends AppBaseController
{
    /** @var MonitoringImmediateOutcomeRepository $monitoringImmediateOutcomeRepository*/
    private $monitoringImmediateOutcomeRepository;

    public function __construct(MonitoringImmediateOutcomeRepository $monitoringImmediateOutcomeRepo)
    {
        $this->middleware('auth');
        $this->monitoringImmediateOutcomeRepository = $monitoringImmediateOutcomeRepo;
    }

    /**
     * Display a listing of the MonitoringImmediateOutcome.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $monitoringImmediateOutcomes = MonitoringImmediateOutcome::selectRaw('*, COUNT(CASE WHEN keberadaan_io = "Ada" THEN 1 END) as total_keberadaan, AVG(CASE WHEN target != 0 THEN capaian / target ELSE 0 END) as rerata_capaian')
            ->where('nama_pemda', 'like', '%' . $request->nama_pemda . '%')
            ->groupBy('nama_pemda');

        if (Auth::user()->role == 'admin') {
            $monitoringImmediateOutcomes = $monitoringImmediateOutcomes->paginate(10);
        } else {
            $monitoringImmediateOutcomes = $monitoringImmediateOutcomes->where('kode_pwk', Auth::user()->kode_pwk)->paginate(10);
        }

        return view('monitoring_immediate_outcomes.index')
            ->with('monitoringImmediateOutcomes', $monitoringImmediateOutcomes);
    }

    /**
     * Show the form for creating a new MonitoringImmediateOutcome.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created MonitoringImmediateOutcome in storage.
     *
     * @param CreateMonitoringImmediateOutcomeRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringImmediateOutcomeRequest $request)
    {
        $monitoringImmediateOutcomes = MonitoringImmediateOutcome::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->get();

        if (empty($monitoringImmediateOutcomes)) {
            Flash::error('Immediate Outcome not found');
            return redirect()->back();
        }

        foreach ($monitoringImmediateOutcomes as $monitoringImmediateOutcome) {
            MonitoringImmediateOutcome::where('id', $monitoringImmediateOutcome->id)->update([
                'keberadaan_io' => $request->{'keberadaan_io_' . $monitoringImmediateOutcome->id},
                'target' => $request->{'target_' . $monitoringImmediateOutcome->id},
                'capaian' => $request->{'capaian_' . $monitoringImmediateOutcome->id},
                'penyebab' => $request->{'penyebab_' . $monitoringImmediateOutcome->id}
            ]);
        }

        Flash::success('Immediate Outcome updated successfully.');

        return redirect(route('monitoringImmediateOutcomes.index'));
    }

    /**
     * Display the specified MonitoringImmediateOutcome.
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
     * Show the form for editing the specified MonitoringImmediateOutcome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $io_id = $this->monitoringImmediateOutcomeRepository->find($id);

        if (empty($io_id)) {
            Flash::error('Immediate Outcome not found');
            return redirect(route('monitoringImmediateOutcomes.index'));
        }

        $monitoringImmediateOutcomes = MonitoringImmediateOutcome::where('tahun', $io_id->tahun)->where('nama_pemda', $io_id->nama_pemda)->get();

        return view('monitoring_immediate_outcomes.edit')->with([
            'monitoringImmediateOutcomes' => $monitoringImmediateOutcomes,
            'io_id' => $io_id
        ]);
    }

    /**
     * Update the specified MonitoringImmediateOutcome in storage.
     *
     * @param int $id
     * @param UpdateMonitoringImmediateOutcomeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringImmediateOutcomeRequest $request)
    {
        //
    }

    /**
     * Remove the specified MonitoringImmediateOutcome from storage.
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
