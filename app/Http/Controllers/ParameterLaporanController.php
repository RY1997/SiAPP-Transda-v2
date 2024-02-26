<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParameterLaporanRequest;
use App\Http\Requests\UpdateParameterLaporanRequest;
use App\Repositories\ParameterLaporanRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\ParameterLaporan;
use Illuminate\Http\Request;
use Flash;
use Response;

class ParameterLaporanController extends AppBaseController
{
    /** @var ParameterLaporanRepository $parameterLaporanRepository*/
    private $parameterLaporanRepository;

    public function __construct(ParameterLaporanRepository $parameterLaporanRepo)
    {
        $this->parameterLaporanRepository = $parameterLaporanRepo;
    }

    /**
     * Display a listing of the ParameterLaporan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parameterLaporans = ParameterLaporan::orderBy('jenis_tkd')->paginate(20);

        return view('parameter_laporans.index')
            ->with('parameterLaporans', $parameterLaporans);
    }

    /**
     * Show the form for creating a new ParameterLaporan.
     *
     * @return Response
     */
    public function create()
    {
        return view('parameter_laporans.create');
    }

    /**
     * Store a newly created ParameterLaporan in storage.
     *
     * @param CreateParameterLaporanRequest $request
     *
     * @return Response
     */
    public function store(CreateParameterLaporanRequest $request)
    {
        $input = $request->all();

        $parameterLaporan = $this->parameterLaporanRepository->create($input);

        Flash::success('Parameter Laporan saved successfully.');

        return redirect(route('parameterLaporans.index'));
    }

    /**
     * Display the specified ParameterLaporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parameterLaporan = $this->parameterLaporanRepository->find($id);

        if (empty($parameterLaporan)) {
            Flash::error('Parameter Laporan not found');

            return redirect(route('parameterLaporans.index'));
        }

        return view('parameter_laporans.show')->with('parameterLaporan', $parameterLaporan);
    }

    /**
     * Show the form for editing the specified ParameterLaporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parameterLaporan = $this->parameterLaporanRepository->find($id);

        if (empty($parameterLaporan)) {
            Flash::error('Parameter Laporan not found');

            return redirect(route('parameterLaporans.index'));
        }

        return view('parameter_laporans.edit')->with('parameterLaporan', $parameterLaporan);
    }

    /**
     * Update the specified ParameterLaporan in storage.
     *
     * @param int $id
     * @param UpdateParameterLaporanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParameterLaporanRequest $request)
    {
        $parameterLaporan = $this->parameterLaporanRepository->find($id);

        if (empty($parameterLaporan)) {
            Flash::error('Parameter Laporan not found');

            return redirect(route('parameterLaporans.index'));
        }

        $parameterLaporan = $this->parameterLaporanRepository->update($request->all(), $id);

        Flash::success('Parameter Laporan updated successfully.');

        return redirect(route('parameterLaporans.index'));
    }

    /**
     * Remove the specified ParameterLaporan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parameterLaporan = $this->parameterLaporanRepository->find($id);

        if (empty($parameterLaporan)) {
            Flash::error('Parameter Laporan not found');

            return redirect(route('parameterLaporans.index'));
        }

        $this->parameterLaporanRepository->delete($id);

        Flash::success('Parameter Laporan deleted successfully.');

        return redirect(route('parameterLaporans.index'));
    }
}
