<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiKontrakRequest;
use App\Http\Requests\UpdateEvaluasiKontrakRequest;
use App\Repositories\EvaluasiKontrakRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiKontrak;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class EvaluasiKontrakController extends AppBaseController
{
    /** @var EvaluasiKontrakRepository $evaluasiKontrakRepository*/
    private $evaluasiKontrakRepository;

    public function __construct(EvaluasiKontrakRepository $evaluasiKontrakRepo)
    {
        $this->evaluasiKontrakRepository = $evaluasiKontrakRepo;
    }

    /**
     * Display a listing of the EvaluasiKontrak.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $suratTugas = SuratTugas::query();
        } else {
            $suratTugas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $suratTugas = $suratTugas->where('jenis_tkd', session('jenis_tkd'))
            ->where('jenis_penugasan', 'Evaluasi')
            ->withCount(['kontrak as kontrak2023' => function ($query) {
                $query->where('tahun', '2023');
            }])
            ->withCount(['kontrak as kontrak2024' => function ($query) {
                $query->where('tahun', '2024');
            }])
            ->withCount(['kontrak as nilai_kontrak2023' => function ($query) {
                $query->where('tahun', '2023')->selectRaw('sum(nilai_kontrak)');
            }])
            ->withCount(['kontrak as nilai_kontrak2024' => function ($query) {
                $query->where('tahun', '2024')->selectRaw('sum(nilai_kontrak)');
            }])
            ->withCount(['kontrak as nilai_masalah2023' => function ($query) {
                $query->where('tahun', '2023')->selectRaw('sum(masalah1 + masalah2 + masalah3 + masalah4 + masalah5 + masalah6 + masalah7 + masalah8)');
            }])
            ->withCount(['kontrak as nilai_masalah2024' => function ($query) {
                $query->where('tahun', '2024')->selectRaw('sum(masalah1 + masalah2 + masalah3 + masalah4 + masalah5 + masalah6 + masalah7 + masalah8)');
            }])
            ->withCount(['kontrak as nilai_manfaat2023' => function ($query) {
                $query->where('tahun', '2023')->selectRaw('sum(manfaat1 + manfaat2 + manfaat3 + manfaat4 + manfaat5 + manfaat6 + manfaat7 + manfaat8)');
            }])
            ->withCount(['kontrak as nilai_manfaat2024' => function ($query) {
                $query->where('tahun', '2024')->selectRaw('sum(manfaat1 + manfaat2 + manfaat3 + manfaat4 + manfaat5 + manfaat6 + manfaat7 + manfaat8)');
            }])
            ->paginate(20);

        return view('evaluasi_kontraks.index')
            ->with([
                'suratTugas' => $suratTugas
            ]);
    }

    /**
     * Show the form for creating a new EvaluasiKontrak.
     *
     * @return Response
     */
    public function create($st_id, $tahun)
    {

        $suratTugas = SuratTugas::find($st_id);

        $evaluasiKontrak = EvaluasiKontrak::create([
            'kode_pwk' => $suratTugas->kode_pwk,
            'tahun' => $tahun,
            'nama_pemda' => $suratTugas->nama_pemda,
            'jenis_tkd' => $suratTugas->jenis_tkd
        ]);

        return redirect(url('evaluasiKontraks/' . $evaluasiKontrak->id . '/edit?step=data'));
    }

    /**
     * Store a newly created EvaluasiKontrak in storage.
     *
     * @param CreateEvaluasiKontrakRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiKontrakRequest $request)
    {
        $input = $request->all();

        $evaluasiKontrak = $this->evaluasiKontrakRepository->create($input);

        Flash::success('Evaluasi Kontrak saved successfully.');

        return redirect(route('evaluasiKontraks.index'));
    }

    /**
     * Display the specified EvaluasiKontrak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($st_id, $tahun)
    {
        $suratTugas = SuratTugas::find($st_id);
        $evaluasiKontraks = EvaluasiKontrak::where('nama_pemda', $suratTugas->nama_pemda)
            ->where('tahun', $tahun)
            ->selectRaw('*, 
        COALESCE(masalah1, 0) + COALESCE(masalah2, 0) + COALESCE(masalah3, 0) + COALESCE(masalah4, 0) + COALESCE(masalah5, 0) + COALESCE(masalah6, 0) + COALESCE(masalah7, 0) + COALESCE(masalah8, 0) as nilai_masalah, 
        COALESCE(manfaat1, 0) + COALESCE(manfaat2, 0) + COALESCE(manfaat3, 0) + COALESCE(manfaat4, 0) + COALESCE(manfaat5, 0) + COALESCE(manfaat6, 0) + COALESCE(manfaat7, 0) + COALESCE(manfaat8, 0) as nilai_manfaat')
            ->paginate(20);


        return view('evaluasi_kontraks.show')->with(['suratTugas' => $suratTugas, 'tahun' => $tahun, 'evaluasiKontraks' => $evaluasiKontraks]);
    }

    /**
     * Show the form for editing the specified EvaluasiKontrak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $evaluasiKontrak = $this->evaluasiKontrakRepository->find($id);
        $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('nama_pemda', $evaluasiKontrak->nama_pemda)->first();
        $step = $request->step;

        if (empty($evaluasiKontrak)) {
            Flash::error('Evaluasi Kontrak not found');
            return redirect(route('evaluasiKontraks.index'));
        }

        return view('evaluasi_kontraks.edit')->with(['evaluasiKontrak' => $evaluasiKontrak, 'suratTugas' => $suratTugas, 'step' => $step]);
    }

    /**
     * Update the specified EvaluasiKontrak in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiKontrakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiKontrakRequest $request)
    {
        $evaluasiKontrak = $this->evaluasiKontrakRepository->find($id);

        $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('nama_pemda', $evaluasiKontrak->nama_pemda)->first();

        if (empty($evaluasiKontrak)) {
            Flash::error('Evaluasi Kontrak not found');
            return redirect(route('evaluasiKontraks.index'));
        }

        if ($request->target_omspan > 0) {
            $fisikOmspan = $request->realisasi_omspan / $request->target_omspan;
        } else {
            $fisikOmspan = '0.00';
        }
        if ($request->target_auditor > 0) {
            $fisikAuditor = $request->realisasi_auditor / $request->target_auditor;
        } else {
            $fisikAuditor = '0.00';
        }
        $requestData = $request->all();
        $requestData['fisik_omspan'] = $fisikOmspan;
        $requestData['fisik_auditor'] = $fisikAuditor;

        $this->evaluasiKontrakRepository->update($requestData, $id);

        Flash::success('Evaluasi Kontrak updated successfully.');
        if ($request->step == 'data') {
            return redirect(url('evaluasiKontraks/' . $id . '/edit?step=pelaksanaan'));
        } elseif ($request->step == 'pelaksanaan') {
            return redirect(url('evaluasiKontraks/' . $id . '/edit?step=penyelesaian'));
        } elseif ($request->step == 'penyelesaian') {
            return redirect(url('evaluasiKontraks/' . $id . '/edit?step=pengujian'));
        } elseif ($request->step == 'pengujian') {
            return redirect(url('evaluasiKontraks/' . $suratTugas->id . '/' . $evaluasiKontrak->tahun));
        }
    }

    /**
     * Remove the specified EvaluasiKontrak from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiKontrak = $this->evaluasiKontrakRepository->find($id);

        if (empty($evaluasiKontrak)) {
            Flash::error('Evaluasi Kontrak not found');
            return redirect(route('evaluasiKontraks.index'));
        }

        $this->evaluasiKontrakRepository->delete($id);

        Flash::success('Evaluasi Kontrak deleted successfully.');
        return redirect()->back();
    }
}
