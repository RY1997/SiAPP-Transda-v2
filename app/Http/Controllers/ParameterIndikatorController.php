<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParameterIndikatorRequest;
use App\Http\Requests\UpdateParameterIndikatorRequest;
use App\Repositories\ParameterIndikatorRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\ParameterIndikator;
use Illuminate\Http\Request;
use Flash;
use Response;

class ParameterIndikatorController extends AppBaseController
{
    /** @var ParameterIndikatorRepository $parameterIndikatorRepository*/
    private $parameterIndikatorRepository;

    public function __construct(ParameterIndikatorRepository $parameterIndikatorRepo)
    {
        $this->middleware('auth');
        $this->parameterIndikatorRepository = $parameterIndikatorRepo;
    }

    /**
     * Display a listing of the ParameterIndikator.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parameterIndikators = ParameterIndikator::orderBy('jenis_tkd')->paginate(20);

        return view('parameter_indikators.index')
            ->with('parameterIndikators', $parameterIndikators);
    }

    /**
     * Show the form for creating a new ParameterIndikator.
     *
     * @return Response
     */
    public function create()
    {
        return view('parameter_indikators.create');
    }

    /**
     * Store a newly created ParameterIndikator in storage.
     *
     * @param CreateParameterIndikatorRequest $request
     *
     * @return Response
     */
    public function store(CreateParameterIndikatorRequest $request)
    {
        $input = $request->all();

        $parameterIndikator = $this->parameterIndikatorRepository->create($input);

        Flash::success('Parameter Indikator saved successfully.');

        return redirect(route('parameterIndikators.index'));
    }

    /**
     * Display the specified ParameterIndikator.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parameterIndikator = $this->parameterIndikatorRepository->find($id);

        if (empty($parameterIndikator)) {
            Flash::error('Parameter Indikator not found');

            return redirect(route('parameterIndikators.index'));
        }

        return view('parameter_indikators.show')->with('parameterIndikator', $parameterIndikator);
    }

    /**
     * Show the form for editing the specified ParameterIndikator.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parameterIndikator = $this->parameterIndikatorRepository->find($id);

        if (empty($parameterIndikator)) {
            Flash::error('Parameter Indikator not found');

            return redirect(route('parameterIndikators.index'));
        }

        return view('parameter_indikators.edit')->with('parameterIndikator', $parameterIndikator);
    }

    /**
     * Update the specified ParameterIndikator in storage.
     *
     * @param int $id
     * @param UpdateParameterIndikatorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParameterIndikatorRequest $request)
    {
        $parameterIndikator = $this->parameterIndikatorRepository->find($id);

        if (empty($parameterIndikator)) {
            Flash::error('Parameter Indikator not found');

            return redirect(route('parameterIndikators.index'));
        }

        $parameterIndikator = $this->parameterIndikatorRepository->update($request->all(), $id);

        Flash::success('Parameter Indikator updated successfully.');

        return redirect(route('parameterIndikators.index'));
    }

    /**
     * Remove the specified ParameterIndikator from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parameterIndikator = $this->parameterIndikatorRepository->find($id);

        if (empty($parameterIndikator)) {
            Flash::error('Parameter Indikator not found');

            return redirect(route('parameterIndikators.index'));
        }

        $this->parameterIndikatorRepository->delete($id);

        Flash::success('Parameter Indikator deleted successfully.');

        return redirect(route('parameterIndikators.index'));
    }
}
