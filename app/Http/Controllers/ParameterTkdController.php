<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParameterTkdRequest;
use App\Http\Requests\UpdateParameterTkdRequest;
use App\Repositories\ParameterTkdRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\ParameterTkd;
use Illuminate\Http\Request;
use Flash;
use Response;

class ParameterTkdController extends AppBaseController
{
    /** @var ParameterTkdRepository $parameterTkdRepository*/
    private $parameterTkdRepository;

    public function __construct(ParameterTkdRepository $parameterTkdRepo)
    {
        $this->middleware('auth');
        $this->parameterTkdRepository = $parameterTkdRepo;
    }

    /**
     * Display a listing of the ParameterTkd.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parameterTkds = ParameterTkd::orderBy('jenis_tkd')->paginate(20);

        return view('parameter_tkds.index')
            ->with('parameterTkds', $parameterTkds);
    }

    /**
     * Show the form for creating a new ParameterTkd.
     *
     * @return Response
     */
    public function create()
    {
        return view('parameter_tkds.create');
    }

    /**
     * Store a newly created ParameterTkd in storage.
     *
     * @param CreateParameterTkdRequest $request
     *
     * @return Response
     */
    public function store(CreateParameterTkdRequest $request)
    {
        $input = $request->all();

        $parameterTkd = $this->parameterTkdRepository->create($input);

        Flash::success('Parameter Tkd saved successfully.');

        return redirect(route('parameterTkds.index'));
    }

    /**
     * Display the specified ParameterTkd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parameterTkd = $this->parameterTkdRepository->find($id);

        if (empty($parameterTkd)) {
            Flash::error('Parameter Tkd not found');

            return redirect(route('parameterTkds.index'));
        }

        return view('parameter_tkds.show')->with('parameterTkd', $parameterTkd);
    }

    /**
     * Show the form for editing the specified ParameterTkd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parameterTkd = $this->parameterTkdRepository->find($id);

        if (empty($parameterTkd)) {
            Flash::error('Parameter Tkd not found');

            return redirect(route('parameterTkds.index'));
        }

        return view('parameter_tkds.edit')->with('parameterTkd', $parameterTkd);
    }

    /**
     * Update the specified ParameterTkd in storage.
     *
     * @param int $id
     * @param UpdateParameterTkdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParameterTkdRequest $request)
    {
        $parameterTkd = $this->parameterTkdRepository->find($id);

        if (empty($parameterTkd)) {
            Flash::error('Parameter Tkd not found');

            return redirect(route('parameterTkds.index'));
        }

        $parameterTkd = $this->parameterTkdRepository->update($request->all(), $id);

        Flash::success('Parameter Tkd updated successfully.');

        return redirect(route('parameterTkds.index'));
    }

    /**
     * Remove the specified ParameterTkd from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parameterTkd = $this->parameterTkdRepository->find($id);

        if (empty($parameterTkd)) {
            Flash::error('Parameter Tkd not found');

            return redirect(route('parameterTkds.index'));
        }

        $this->parameterTkdRepository->delete($id);

        Flash::success('Parameter Tkd deleted successfully.');

        return redirect(route('parameterTkds.index'));
    }
}
