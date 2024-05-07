<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSuratTugasRequest;
use App\Http\Requests\UpdateSuratTugasRequest;
use App\Repositories\SuratTugasRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class SuratTugasController extends AppBaseController
{
    /** @var SuratTugasRepository $suratTugasRepository*/
    private $suratTugasRepository;

    public function __construct(SuratTugasRepository $suratTugasRepo)
    {
        $this->suratTugasRepository = $suratTugasRepo;
    }

    /**
     * Display a listing of the SuratTugas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->paginate(20);
        } else {
            $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('kode_pwk', Auth::user()->kode_pwk)->paginate(20);
        }

        return view('surat_tugas.index')
            ->with('suratTugas', $suratTugas);
    }

    /**
     * Show the form for creating a new SuratTugas.
     *
     * @return Response
     */
    public function create()
    {
        return view('surat_tugas.create');
    }

    /**
     * Store a newly created SuratTugas in storage.
     *
     * @param CreateSuratTugasRequest $request
     *
     * @return Response
     */
    public function store(CreateSuratTugasRequest $request)
    {
        $input = $request->all();

        $suratTugas = $this->suratTugasRepository->create($input);

        Flash::success('Surat Tugas saved successfully.');

        return redirect(route('suratTugas.index'));
    }

    /**
     * Display the specified SuratTugas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $suratTugas = $this->suratTugasRepository->find($id);

        if (empty($suratTugas)) {
            Flash::error('Surat Tugas not found');

            return redirect(route('suratTugas.index'));
        }

        return view('surat_tugas.show')->with('suratTugas', $suratTugas);
    }

    /**
     * Show the form for editing the specified SuratTugas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $suratTugas = $this->suratTugasRepository->find($id);

        if (empty($suratTugas)) {
            Flash::error('Surat Tugas not found');

            return redirect(route('suratTugas.index'));
        }

        return view('surat_tugas.edit')->with('suratTugas', $suratTugas);
    }

    /**
     * Update the specified SuratTugas in storage.
     *
     * @param int $id
     * @param UpdateSuratTugasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSuratTugasRequest $request)
    {
        $suratTugas = $this->suratTugasRepository->find($id);

        if (empty($suratTugas)) {
            Flash::error('Surat Tugas not found');

            return redirect(route('suratTugas.index'));
        }

        $suratTugas = $this->suratTugasRepository->update($request->all(), $id);

        Flash::success('Surat Tugas updated successfully.');

        return redirect(route('suratTugas.index'));
    }

    /**
     * Remove the specified SuratTugas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $suratTugas = $this->suratTugasRepository->find($id);

        if (empty($suratTugas)) {
            Flash::error('Surat Tugas not found');

            return redirect(route('suratTugas.index'));
        }

        $this->suratTugasRepository->delete($id);

        Flash::success('Surat Tugas deleted successfully.');

        return redirect(route('suratTugas.index'));
    }
}
