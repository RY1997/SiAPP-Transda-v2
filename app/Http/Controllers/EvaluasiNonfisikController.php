<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiNonfisikRequest;
use App\Http\Requests\UpdateEvaluasiNonfisikRequest;
use App\Repositories\EvaluasiNonfisikRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\EvaluasiNonfisik;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class EvaluasiNonfisikController extends AppBaseController
{
    /** @var EvaluasiNonfisikRepository $evaluasiNonfisikRepository*/
    private $evaluasiNonfisikRepository;

    public function __construct(EvaluasiNonfisikRepository $evaluasiNonfisikRepo)
    {
        $this->middleware('auth');
        $this->evaluasiNonfisikRepository = $evaluasiNonfisikRepo;
    }

    /**
     * Display a listing of the EvaluasiNonfisik.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nama_pemda = $request->nama_pemda;

        if (Auth::user()->role == 'Admin') {
            $suratTugas = SuratTugas::query();
        } else {
            $suratTugas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $suratTugas = $suratTugas->where('nama_pemda', 'like', '%' . $nama_pemda . '%')->where('jenis_tkd', session('jenis_tkd'))
            ->where('jenis_penugasan', 'Evaluasi')
            ->withCount(['nonfisik as nonfisik2023' => function ($query) {
                $query->where('tahun', '2023');
            }])
            ->withCount(['nonfisik as nonfisik2024' => function ($query) {
                $query->where('tahun', '2024');
            }])
            ->withSum([
                'nonfisik as nilai_nonfisik2023' => function ($query) {
                    $query->where('tahun', '2023')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_kontrak')
            ->withSum([
                'nonfisik as nilai_nonfisik2024' => function ($query) {
                    $query->where('tahun', '2024')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_kontrak')
            ->withSum([
                'nonfisik as nilai_masalah2023' => function ($query) {
                    $query->select(DB::raw('SUM(masalah1 + masalah2 + masalah3 + masalah4 + masalah5 + masalah6 + masalah7 + masalah8) as total_masalah'))
                        ->where('tahun', '2023')
                        ->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'total_masalah')
            ->withSum([
                'nonfisik as nilai_masalah2024' => function ($query) {
                    $query->select(DB::raw('SUM(masalah1 + masalah2 + masalah3 + masalah4 + masalah5 + masalah6 + masalah7 + masalah8) as total_masalah'))
                        ->where('tahun', '2024')
                        ->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'total_masalah')
            ->withSum([
                'nonfisik as nilai_manfaat2023' => function ($query) {
                    $query->select(DB::raw('SUM(manfaat1 + manfaat2 + manfaat3 + manfaat4 + manfaat5 + manfaat6 + manfaat7 + manfaat8) as total_manfaat'))
                        ->where('tahun', '2023')
                        ->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'total_manfaat')
            ->withSum([
                'nonfisik as nilai_manfaat2024' => function ($query) {
                    $query->select(DB::raw('SUM(manfaat1 + manfaat2 + manfaat3 + manfaat4 + manfaat5 + manfaat6 + manfaat7 + manfaat8) as total_manfaat'))
                        ->where('tahun', '2024')
                        ->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'total_manfaat')
            ->paginate(20);


        return view('evaluasi_nonfisiks.index')
            ->with([
                'suratTugas' => $suratTugas,
                'nama_pemda' => $nama_pemda
            ]);
    }

    /**
     * Show the form for creating a new EvaluasiNonfisik.
     *
     * @return Response
     */
    public function create($st_id, $tahun)
    {

        $suratTugas = SuratTugas::find($st_id);

        // $evaluasiNonfisik = EvaluasiNonfisik::create([
        //     'kode_pwk' => $suratTugas->kode_pwk,
        //     'tahun' => $tahun,
        //     'nama_pemda' => $suratTugas->nama_pemda,
        //     'jenis_tkd' => $suratTugas->jenis_tkd
        // ]);

        return view('evaluasi_nonfisiks.create')
            ->with([
                'suratTugas' => $suratTugas,
                'tahun' => $tahun
            ]);
    }

    /**
     * Store a newly created EvaluasiNonfisik in storage.
     *
     * @param CreateEvaluasiNonfisikRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiNonfisikRequest $request)
    {
        $input = $request->all();
        $input['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $evaluasiNonfisik = $this->evaluasiNonfisikRepository->create($input);

        Flash::success('Evaluasi Non Fisik saved successfully.');

        return redirect(route('evaluasiNonfisiks.index'));
    }

    /**
     * Display the specified EvaluasiNonfisik.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($st_id, $tahun)
    {
        $suratTugas = SuratTugas::find($st_id);
        $evaluasiNonfisiks = EvaluasiNonfisik::where('nama_pemda', $suratTugas->nama_pemda)
            ->where('tahun', $tahun)
            ->selectRaw('*, 
        COALESCE(masalah1, 0) + COALESCE(masalah2, 0) + COALESCE(masalah3, 0) + COALESCE(masalah4, 0) + COALESCE(masalah5, 0) + COALESCE(masalah6, 0) + COALESCE(masalah7, 0) + COALESCE(masalah8, 0) as nilai_masalah, 
        COALESCE(manfaat1, 0) + COALESCE(manfaat2, 0) + COALESCE(manfaat3, 0) + COALESCE(manfaat4, 0) + COALESCE(manfaat5, 0) + COALESCE(manfaat6, 0) + COALESCE(manfaat7, 0) + COALESCE(manfaat8, 0) as nilai_manfaat')
            ->paginate(20);


        return view('evaluasi_nonfisiks.show')->with(['suratTugas' => $suratTugas, 'tahun' => $tahun, 'evaluasiNonfisiks' => $evaluasiNonfisiks]);
    }

    /**
     * Show the form for editing the specified EvaluasiNonfisik.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $evaluasiNonfisik = $this->evaluasiNonfisikRepository->find($id);
        $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('nama_pemda', $evaluasiNonfisik->nama_pemda)->first();
        $step = $request->step;

        if (empty($evaluasiNonfisik)) {
            Flash::error('Evaluasi Non Fisik not found');
            return redirect(route('evaluasiNonfisiks.index'));
        }

        return view('evaluasi_nonfisiks.edit')->with(['evaluasiNonfisik' => $evaluasiNonfisik, 'suratTugas' => $suratTugas, 'step' => $step]);
    }

    /**
     * Update the specified EvaluasiNonfisik in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiNonfisikRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiNonfisikRequest $request)
    {
        $evaluasiNonfisik = $this->evaluasiNonfisikRepository->find($id);

        $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('nama_pemda', $evaluasiNonfisik->nama_pemda)->first();

        if (empty($evaluasiNonfisik)) {
            Flash::error('Evaluasi Non Fisik not found');
            return redirect(route('evaluasiNonfisiks.index'));
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
        $requestData['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $this->evaluasiNonfisikRepository->update($requestData, $id);

        Flash::success('Evaluasi Non Fisik updated successfully.');
        return redirect(url('evaluasiNonfisiks/' . $suratTugas->id . '/' . $evaluasiNonfisik->tahun));
    }

    /**
     * Remove the specified EvaluasiNonfisik from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiNonfisik = $this->evaluasiNonfisikRepository->find($id);

        if (empty($evaluasiNonfisik)) {
            Flash::error('Evaluasi Non Fisik not found');
            return redirect(route('evaluasiNonfisiks.index'));
        }

        $this->evaluasiNonfisikRepository->delete($id);

        Flash::success('Evaluasi Non Fisik deleted successfully.');
        return redirect()->back();
    }
}
