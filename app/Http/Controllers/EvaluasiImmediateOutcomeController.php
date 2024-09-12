<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiImmediateOutcomeRequest;
use App\Http\Requests\UpdateEvaluasiImmediateOutcomeRequest;
use App\Repositories\EvaluasiImmediateOutcomeRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class EvaluasiImmediateOutcomeController extends AppBaseController
{
    /** @var EvaluasiImmediateOutcomeRepository $evaluasiImmediateOutcomeRepository*/
    private $evaluasiImmediateOutcomeRepository;

    public function __construct(EvaluasiImmediateOutcomeRepository $evaluasiImmediateOutcomeRepo)
    {
        $this->middleware('auth');
        $this->evaluasiImmediateOutcomeRepository = $evaluasiImmediateOutcomeRepo;
    }

    /**
     * Display a listing of the EvaluasiImmediateOutcome.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $evaluasiImmediateOutcomes = $this->evaluasiImmediateOutcomeRepository->paginate(20);

        return view('evaluasi_immediate_outcomes.index')
            ->with('evaluasiImmediateOutcomes', $evaluasiImmediateOutcomes);
    }

    /**
     * Show the form for creating a new EvaluasiImmediateOutcome.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::user()->role == 'Admin') {
            $pemdas = DaftarPemda::where('uji_petik', 'Ya')->get();
        } else {
            $pemdas = DaftarPemda::where('uji_petik', 'Ya')->where('kode_pwk', Auth::user()->kode_pwk)->get();
        }
        
        return view('evaluasi_immediate_outcomes.create')->with([
            'pemdas' => $pemdas
        ]);
    }

    /**
     * Store a newly created EvaluasiImmediateOutcome in storage.
     *
     * @param CreateEvaluasiImmediateOutcomeRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiImmediateOutcomeRequest $request)
    {
        $input = $request->all();
        $input['tahun'] = 2023;
        $input['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $evaluasiImmediateOutcome = $this->evaluasiImmediateOutcomeRepository->create($input);

        Flash::success('Evaluasi Immediate Outcome saved successfully.');

        return redirect(route('evaluasiImmediateOutcomes.index'));
    }

    /**
     * Display the specified EvaluasiImmediateOutcome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiImmediateOutcome = $this->evaluasiImmediateOutcomeRepository->find($id);

        if (empty($evaluasiImmediateOutcome)) {
            Flash::error('Evaluasi Immediate Outcome not found');

            return redirect(route('evaluasiImmediateOutcomes.index'));
        }

        return view('evaluasi_immediate_outcomes.show')->with('evaluasiImmediateOutcome', $evaluasiImmediateOutcome);
    }

    /**
     * Show the form for editing the specified EvaluasiImmediateOutcome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiImmediateOutcome = $this->evaluasiImmediateOutcomeRepository->find($id);

        if (empty($evaluasiImmediateOutcome)) {
            Flash::error('Evaluasi Immediate Outcome not found');

            return redirect(route('evaluasiImmediateOutcomes.index'));
        }

        if (Auth::user()->role == 'Admin') {
            $pemdas = DaftarPemda::where('uji_petik', 'Ya')->get();
        } else {
            $pemdas = DaftarPemda::where('uji_petik', 'Ya')->where('kode_pwk', Auth::user()->kode_pwk)->get();
        }

        return view('evaluasi_immediate_outcomes.edit')->with([
            'evaluasiImmediateOutcome' => $evaluasiImmediateOutcome,
            'pemdas' => $pemdas
        ]);
    }

    /**
     * Update the specified EvaluasiImmediateOutcome in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiImmediateOutcomeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiImmediateOutcomeRequest $request)
    {
        $evaluasiImmediateOutcome = $this->evaluasiImmediateOutcomeRepository->find($id);

        if (empty($evaluasiImmediateOutcome)) {
            Flash::error('Evaluasi Immediate Outcome not found');

            return redirect(route('evaluasiImmediateOutcomes.index'));
        }

        $input['tahun'] = 2023;
        $input['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $evaluasiImmediateOutcome = $this->evaluasiImmediateOutcomeRepository->update($request->all(), $id);

        Flash::success('Evaluasi Immediate Outcome updated successfully.');

        return redirect(route('evaluasiImmediateOutcomes.index'));
    }

    /**
     * Remove the specified EvaluasiImmediateOutcome from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiImmediateOutcome = $this->evaluasiImmediateOutcomeRepository->find($id);

        if (empty($evaluasiImmediateOutcome)) {
            Flash::error('Evaluasi Immediate Outcome not found');

            return redirect(route('evaluasiImmediateOutcomes.index'));
        }

        $this->evaluasiImmediateOutcomeRepository->delete($id);

        Flash::success('Evaluasi Immediate Outcome deleted successfully.');

        return redirect(route('evaluasiImmediateOutcomes.index'));
    }
}
