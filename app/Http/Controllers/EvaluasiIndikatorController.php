<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiIndikatorRequest;
use App\Http\Requests\UpdateEvaluasiIndikatorRequest;
use App\Repositories\EvaluasiIndikatorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvaluasiIndikatorController extends AppBaseController
{
    /** @var EvaluasiIndikatorRepository $evaluasiIndikatorRepository*/
    private $evaluasiIndikatorRepository;

    public function __construct(EvaluasiIndikatorRepository $evaluasiIndikatorRepo)
    {
        $this->evaluasiIndikatorRepository = $evaluasiIndikatorRepo;
    }

    /**
     * Display a listing of the EvaluasiIndikator.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $evaluasiIndikators = $this->evaluasiIndikatorRepository->all();

        return view('evaluasi_indikators.index')
            ->with('evaluasiIndikators', $evaluasiIndikators);
    }

    /**
     * Show the form for creating a new EvaluasiIndikator.
     *
     * @return Response
     */
    public function create()
    {
        return view('evaluasi_indikators.create');
    }

    /**
     * Store a newly created EvaluasiIndikator in storage.
     *
     * @param CreateEvaluasiIndikatorRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiIndikatorRequest $request)
    {
        $input = $request->all();

        $evaluasiIndikator = $this->evaluasiIndikatorRepository->create($input);

        Flash::success('Evaluasi Indikator saved successfully.');

        return redirect(route('evaluasiIndikators.index'));
    }

    /**
     * Display the specified EvaluasiIndikator.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiIndikator = $this->evaluasiIndikatorRepository->find($id);

        if (empty($evaluasiIndikator)) {
            Flash::error('Evaluasi Indikator not found');

            return redirect(route('evaluasiIndikators.index'));
        }

        return view('evaluasi_indikators.show')->with('evaluasiIndikator', $evaluasiIndikator);
    }

    /**
     * Show the form for editing the specified EvaluasiIndikator.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiIndikator = $this->evaluasiIndikatorRepository->find($id);

        if (empty($evaluasiIndikator)) {
            Flash::error('Evaluasi Indikator not found');

            return redirect(route('evaluasiIndikators.index'));
        }

        return view('evaluasi_indikators.edit')->with('evaluasiIndikator', $evaluasiIndikator);
    }

    /**
     * Update the specified EvaluasiIndikator in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiIndikatorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiIndikatorRequest $request)
    {
        $evaluasiIndikator = $this->evaluasiIndikatorRepository->find($id);

        if (empty($evaluasiIndikator)) {
            Flash::error('Evaluasi Indikator not found');

            return redirect(route('evaluasiIndikators.index'));
        }

        $evaluasiIndikator = $this->evaluasiIndikatorRepository->update($request->all(), $id);

        Flash::success('Evaluasi Indikator updated successfully.');

        return redirect(route('evaluasiIndikators.index'));
    }

    /**
     * Remove the specified EvaluasiIndikator from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiIndikator = $this->evaluasiIndikatorRepository->find($id);

        if (empty($evaluasiIndikator)) {
            Flash::error('Evaluasi Indikator not found');

            return redirect(route('evaluasiIndikators.index'));
        }

        $this->evaluasiIndikatorRepository->delete($id);

        Flash::success('Evaluasi Indikator deleted successfully.');

        return redirect(route('evaluasiIndikators.index'));
    }
}
