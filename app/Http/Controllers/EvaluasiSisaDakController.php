<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiSisaDakRequest;
use App\Http\Requests\UpdateEvaluasiSisaDakRequest;
use App\Repositories\EvaluasiSisaDakRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiSisaDak;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class EvaluasiSisaDakController extends AppBaseController
{
    /** @var EvaluasiSisaDakRepository $evaluasiSisaDakRepository*/
    private $evaluasiSisaDakRepository;

    public function __construct(EvaluasiSisaDakRepository $evaluasiSisaDakRepo)
    {
        $this->middleware('auth');
        $this->evaluasiSisaDakRepository = $evaluasiSisaDakRepo;
    }

    /**
     * Display a listing of the EvaluasiSisaDak.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $evaluasiSisaDaks = EvaluasiSisaDak::orderBy('nama_pemda')->paginate(20);
        } else {
            $evaluasiSisaDaks = EvaluasiSisaDak::where('kode_pwk', Auth::user()->kode_pwk)->orderBy('nama_pemda')->paginate(20);
        }

        return view('evaluasi_sisa_daks.index')
            ->with('evaluasiSisaDaks', $evaluasiSisaDaks);
    }

    /**
     * Show the form for creating a new EvaluasiSisaDak.
     *
     * @return Response
     */
    public function create()
    {
        return view('evaluasi_sisa_daks.create');
    }

    /**
     * Store a newly created EvaluasiSisaDak in storage.
     *
     * @param CreateEvaluasiSisaDakRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiSisaDakRequest $request)
    {
        $input = $request->all();

        $evaluasiSisaDak = $this->evaluasiSisaDakRepository->create($input);

        Flash::success('Evaluasi Sisa Dak saved successfully.');

        return redirect(route('evaluasiSisaDaks.index'));
    }

    /**
     * Display the specified EvaluasiSisaDak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiSisaDak = $this->evaluasiSisaDakRepository->find($id);

        if (empty($evaluasiSisaDak)) {
            Flash::error('Evaluasi Sisa Dak not found');

            return redirect(route('evaluasiSisaDaks.index'));
        }

        return view('evaluasi_sisa_daks.show')->with('evaluasiSisaDak', $evaluasiSisaDak);
    }

    /**
     * Show the form for editing the specified EvaluasiSisaDak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiSisaDak = $this->evaluasiSisaDakRepository->find($id);

        if (empty($evaluasiSisaDak)) {
            Flash::error('Evaluasi Sisa Dak not found');

            return redirect(route('evaluasiSisaDaks.index'));
        }

        return view('evaluasi_sisa_daks.edit')->with('evaluasiSisaDak', $evaluasiSisaDak);
    }

    /**
     * Update the specified EvaluasiSisaDak in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiSisaDakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiSisaDakRequest $request)
    {
        $evaluasiSisaDak = $this->evaluasiSisaDakRepository->find($id);

        if (empty($evaluasiSisaDak)) {
            Flash::error('Evaluasi Sisa Dak not found');

            return redirect(route('evaluasiSisaDaks.index'));
        }

        $evaluasiSisaDak = $this->evaluasiSisaDakRepository->update($request->all(), $id);

        Flash::success('Evaluasi Sisa Dak updated successfully.');

        return redirect(route('evaluasiSisaDaks.index'));
    }

    /**
     * Remove the specified EvaluasiSisaDak from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiSisaDak = $this->evaluasiSisaDakRepository->find($id);

        if (empty($evaluasiSisaDak)) {
            Flash::error('Evaluasi Sisa Dak not found');

            return redirect(route('evaluasiSisaDaks.index'));
        }

        $this->evaluasiSisaDakRepository->delete($id);

        Flash::success('Evaluasi Sisa Dak deleted successfully.');

        return redirect(route('evaluasiSisaDaks.index'));
    }
}
