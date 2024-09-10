<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringHibahRequest;
use App\Http\Requests\UpdateMonitoringHibahRequest;
use App\Repositories\MonitoringHibahRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\MonitoringHibah;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class MonitoringHibahController extends AppBaseController
{
    /** @var MonitoringHibahRepository $monitoringHibahRepository*/
    private $monitoringHibahRepository;

    public function __construct(MonitoringHibahRepository $monitoringHibahRepo)
    {
        $this->middleware('auth');
        $this->monitoringHibahRepository = $monitoringHibahRepo;
    }

    /**
     * Display a listing of the MonitoringHibah.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $monitoringHibahs = MonitoringHibah::where('nama_pemda', 'like', '%' . $request->nama_pemda . '%');

        if (Auth::user()->role == 'admin') {
            $monitoringHibahs = $monitoringHibahs->paginate(30);
        } else {
            $monitoringHibahs = $monitoringHibahs->where('kode_pwk', Auth::user()->kode_pwk)->paginate(30);
        }

        return view('monitoring_hibahs.index')
            ->with('monitoringHibahs', $monitoringHibahs);
    }

    /**
     * Show the form for creating a new MonitoringHibah.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_hibahs.create');
    }

    /**
     * Store a newly created MonitoringHibah in storage.
     *
     * @param CreateMonitoringHibahRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringHibahRequest $request)
    {
        $monitoringHibahs = MonitoringHibah::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->get();

        if (empty($monitoringHibahs)) {
            Flash::error('Hibah not found');
            return redirect()->back();
        }

        foreach ($monitoringHibahs as $monitoringHibah) {
            MonitoringHibah::where('id', $monitoringHibah->id)->update([
                'alokasi_hibah' => $request->{'alokasi_hibah_' . $monitoringHibah->id},
                'penyaluran_hibah' => $request->{'penyaluran_hibah_' . $monitoringHibah->id},
                'penggunaan_hibah' => $request->{'penggunaan_hibah_' . $monitoringHibah->id}
            ]);
        }

        Flash::success('Hibah updated successfully.');

        return redirect(route('monitoringHibahs.index'));
    }

    /**
     * Display the specified MonitoringHibah.
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
     * Show the form for editing the specified MonitoringHibah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hibah_id = $this->monitoringHibahRepository->find($id);

        if (empty($hibah_id)) {
            Flash::error('Hibah not found');
            return redirect(route('monitoringHibahs.index'));
        }

        $monitoringHibahs = MonitoringHibah::where('tahun', $hibah_id->tahun)->where('nama_pemda', $hibah_id->nama_pemda)->get();

        return view('monitoring_hibahs.edit')->with([
            'monitoringHibahs' => $monitoringHibahs,
            'hibah_id' => $hibah_id
        ]);
    }

    /**
     * Update the specified MonitoringHibah in storage.
     *
     * @param int $id
     * @param UpdateMonitoringHibahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringHibahRequest $request)
    {
        //
    }

    /**
     * Remove the specified MonitoringHibah from storage.
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
