<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringTlRequest;
use App\Http\Requests\UpdateMonitoringTlRequest;
use App\Repositories\MonitoringTlRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringTl;
use App\Models\PPBR;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class PPBRController extends AppBaseController
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $nama_pemda = $request->nama_pemda;

        if (Auth::user()->role == 'Admin') {
            $ppbr = DaftarPemda::where('nama_pemda', 'like', '%' . $nama_pemda . '%')
            ->orderBy('uji_petik', 'DESC')->orderBy('kode_pwk')
            ->paginate(20);
        } else {
            $ppbr = DaftarPemda::where('kode_pwk', Auth::user()->kode_pwk)
            ->where('nama_pemda', 'like', '%' . $nama_pemda . '%')->orderBy('uji_petik', 'DESC')->orderBy('kode_pwk')->paginate(20);
        }

        return view('ppbr.index')
            ->with([
                'ppbr' => $ppbr,
                'nama_pemda' => $nama_pemda
            ]);
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
    public function update($id, Request $request)
    {
        $pemda = DaftarPemda::find($id);

        if (empty($pemda)) {
            Flash::error('Pemda not found');
            return redirect(route('ppbrs.index'));
        }

        if ($request->action == 'Jadikan Uji Petik') {
            $uji_petik = 'Ya';
        } else {
            $uji_petik = NULL;
        }

        $pemda = DaftarPemda::where('id', $id)->update([
            'uji_petik' => $uji_petik
        ]);

        Flash::success('Pemda Uji Petik updated successfully.');

        return redirect(route('ppbrs.index'));
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
