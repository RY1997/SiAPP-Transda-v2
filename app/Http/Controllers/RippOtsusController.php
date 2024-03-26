<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRippOtsusRequest;
use App\Http\Requests\UpdateRippOtsusRequest;
use App\Repositories\RippOtsusRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\RippOtsus;
use Illuminate\Http\Request;
use Flash;
use Response;

class RippOtsusController extends AppBaseController
{
    /** @var RippOtsusRepository $rippOtsusRepository*/
    private $rippOtsusRepository;

    public function __construct(RippOtsusRepository $rippOtsusRepo)
    {
        $this->rippOtsusRepository = $rippOtsusRepo;
    }

    /**
     * Display a listing of the RippOtsus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rippOtsuses = $this->rippOtsusRepository->all();

        return view('ripp_otsuses.index')
            ->with('rippOtsuses', $rippOtsuses);
    }

    /**
     * Show the form for creating a new RippOtsus.
     *
     * @return Response
     */
    public function create()
    {
        return view('ripp_otsuses.create');
    }

    /**
     * Store a newly created RippOtsus in storage.
     *
     * @param CreateRippOtsusRequest $request
     *
     * @return Response
     */
    public function store(CreateRippOtsusRequest $request)
    {
        $input = $request->all();

        $rippOtsus = $this->rippOtsusRepository->create($input);

        Flash::success('Ripp Otsus saved successfully.');

        return redirect(route('rippOtsuses.index'));
    }

    /**
     * Display the specified RippOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rippOtsus = $this->rippOtsusRepository->find($id);

        if (empty($rippOtsus)) {
            Flash::error('Ripp Otsus not found');

            return redirect(route('rippOtsuses.index'));
        }

        return view('ripp_otsuses.show')->with('rippOtsus', $rippOtsus);
    }

    /**
     * Show the form for editing the specified RippOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rippOtsus = $this->rippOtsusRepository->find($id);

        if (empty($rippOtsus)) {
            Flash::error('Ripp Otsus not found');

            return redirect(route('rippOtsuses.index'));
        }

        return view('ripp_otsuses.edit')->with('rippOtsus', $rippOtsus);
    }

    /**
     * Update the specified RippOtsus in storage.
     *
     * @param int $id
     * @param UpdateRippOtsusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRippOtsusRequest $request)
    {
        $rippOtsus = $this->rippOtsusRepository->find($id);

        if (empty($rippOtsus)) {
            Flash::error('Ripp Otsus not found');

            return redirect(route('rippOtsuses.index'));
        }

        $rippOtsus = $this->rippOtsusRepository->update($request->all(), $id);

        Flash::success('Ripp Otsus updated successfully.');

        return redirect(route('rippOtsuses.index'));
    }

    /**
     * Remove the specified RippOtsus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rippOtsus = $this->rippOtsusRepository->find($id);

        if (empty($rippOtsus)) {
            Flash::error('Ripp Otsus not found');

            return redirect(route('rippOtsuses.index'));
        }

        $this->rippOtsusRepository->delete($id);

        Flash::success('Ripp Otsus deleted successfully.');

        return redirect(route('rippOtsuses.index'));
    }
}
