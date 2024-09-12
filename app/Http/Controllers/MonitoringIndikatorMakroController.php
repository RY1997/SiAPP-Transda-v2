<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringIndikatorMakroRequest;
use App\Http\Requests\UpdateMonitoringIndikatorMakroRequest;
use App\Repositories\MonitoringIndikatorMakroRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\MonitoringImmediateOutcome;
use App\Models\MonitoringIndikatorMakro;
use App\Models\ParameterIndikator;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class MonitoringIndikatorMakroController extends AppBaseController
{
    /** @var MonitoringIndikatorMakroRepository $monitoringIndikatorMakroRepository*/
    private $monitoringIndikatorMakroRepository;

    public function __construct(MonitoringIndikatorMakroRepository $monitoringIndikatorMakroRepo)
    {
        $this->middleware('auth');
        $this->monitoringIndikatorMakroRepository = $monitoringIndikatorMakroRepo;
    }

    /**
     * Display a listing of the MonitoringIndikatorMakro.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nama_pemda = $request->query('nama_pemda');

        if (Auth::user()->role == 'Admin') {
            $monitoringIndikatorMakros = MonitoringIndikatorMakro::query();
        } else {
            // $pemdas = DaftarPemda::where('kode_pwk', Auth::user()->kode_pwk)->get();
            // $indikators = ParameterIndikator::all();

            // foreach ($pemdas as $pemda) {
            //     foreach ($indikators as $indikator) {
            //         foreach ([2020, 2021, 2022, 2023, 2024] as $tahun) {
            //             MonitoringIndikatorMakro::updateOrCreate([
            //                 'tahun' => $tahun,
            //                 'kode_pwk' => $pemda->kode_pwk,
            //                 'nama_pemda' => $pemda->nama_pemda,
            //                 'uraian_indikator' => $indikator->uraian_indikator
            //             ], [
            //                 'batas_indikator' => $indikator->batas_indikator
            //             ]);
            //         }
            //     }
            // }

            $monitoringIndikatorMakros = MonitoringIndikatorMakro::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $monitoringIndikatorMakros = $monitoringIndikatorMakros->where('nama_pemda', 'like', '%' . $nama_pemda . '%')
            ->paginate(100);

        return view('monitoring_indikator_makros.index')
            ->with([
                'monitoringIndikatorMakros' => $monitoringIndikatorMakros,
                'nama_pemda' => $nama_pemda,
            ]);
    }

    /**
     * Show the form for creating a new MonitoringIndikatorMakro.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_indikator_makros.create');
    }

    /**
     * Store a newly created MonitoringIndikatorMakro in storage.
     *
     * @param CreateMonitoringIndikatorMakroRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringIndikatorMakroRequest $request)
    {
        $monitoringIndikatorMakros = MonitoringIndikatorMakro::where('nama_pemda', $request->nama_pemda)->where('uraian_indikator', $request->uraian_indikator)->get();

        if (empty($monitoringIndikatorMakros)) {
            Flash::error('Indikator Makro not found');
            return redirect()->back();
        }

        foreach ($monitoringIndikatorMakros as $monitoringIndikatorMakro) {
            MonitoringIndikatorMakro::where('id', $monitoringIndikatorMakro->id)->update([
                'capaian_1' => $request->{'capaian_1_' . $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun},
                'capaian_2' => $request->{'capaian_2_' . $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun},
                'capaian_3' => $request->{'capaian_3_' . $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun},
                'capaian_4' => $request->{'capaian_4_' . $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun}
            ]);
        }

        Flash::success('Indikator Makro updated successfully.');

        return redirect(route('monitoringIndikatorMakros.index'));
    }

    /**
     * Display the specified MonitoringIndikatorMakro.
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
     * Show the form for editing the specified MonitoringIndikatorMakro.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $indikator = $this->monitoringIndikatorMakroRepository->find($id);

        if (empty($indikator)) {
            Flash::error('Indikator Makro not found');
            return redirect()->back();
        }

        $monitoringIndikatorMakros = MonitoringIndikatorMakro::where('nama_pemda', $indikator->nama_pemda)->where('uraian_indikator', $indikator->uraian_indikator)->get();

        return view('monitoring_indikator_makros.edit')->with([
            'monitoringIndikatorMakros' => $monitoringIndikatorMakros,
            'indikator' => $indikator
        ]);
    }

    /**
     * Update the specified MonitoringIndikatorMakro in storage.
     *
     * @param int $id
     * @param UpdateMonitoringIndikatorMakroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringIndikatorMakroRequest $request)
    {
        //
    }

    /**
     * Remove the specified MonitoringIndikatorMakro from storage.
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
