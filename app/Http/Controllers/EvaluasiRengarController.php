<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiRengarRequest;
use App\Http\Requests\UpdateEvaluasiRengarRequest;
use App\Repositories\EvaluasiRengarRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiRengar;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvaluasiRengarController extends AppBaseController
{
    /** @var EvaluasiRengarRepository $evaluasiRengarRepository*/
    private $evaluasiRengarRepository;

    public function __construct(EvaluasiRengarRepository $evaluasiRengarRepo)
    {
        $this->evaluasiRengarRepository = $evaluasiRengarRepo;
    }

    /**
     * Display a listing of the EvaluasiRengar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi')->paginate(20);
        $evaluasiRengars = EvaluasiRengar::where('sumber_dana', session('jenis_tkd'))->get();

        return view('evaluasi_rengars.index')
            ->with([
                'suratTugas' => $suratTugas,
                'evaluasiRengars' => $evaluasiRengars
            ]);
    }

    /**
     * Show the form for creating a new EvaluasiRengar.
     *
     * @return Response
     */
    public function create()
    {
        return view('evaluasi_rengars.create');
    }

    /**
     * Store a newly created EvaluasiRengar in storage.
     *
     * @param CreateEvaluasiRengarRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiRengarRequest $request)
    {
        $input = $request->all();

        $evaluasiRengar = $this->evaluasiRengarRepository->create($input);

        Flash::success('Evaluasi Rengar saved successfully.');

        return redirect(route('evaluasiRengars.index'));
    }

    /**
     * Display the specified EvaluasiRengar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiRengar = $this->evaluasiRengarRepository->find($id);

        if (empty($evaluasiRengar)) {
            Flash::error('Evaluasi Rengar not found');

            return redirect(route('evaluasiRengars.index'));
        }

        return view('evaluasi_rengars.show')->with('evaluasiRengar', $evaluasiRengar);
    }

    /**
     * Show the form for editing the specified EvaluasiRengar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiRengar = EvaluasiRengar::find($id);
        $st_id = SuratTugas::where('nama_pemda', $evaluasiRengar->nama_pemda)->first()->pluck('id');

        if (empty($evaluasiRengar)) {
            Flash::error('Evaluasi Rengar not found');

            return redirect(route('evaluasiRengars.index'));
        }

        return view('evaluasi_rengars.edit')
            ->with([
                'st_id' => $st_id,
                'evaluasiRengar' => $evaluasiRengar
            ]);
    }

    /**
     * Update the specified EvaluasiRengar in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiRengarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiRengarRequest $request)
    {
        $evaluasiRengar = $this->evaluasiRengarRepository->find($id);

        if (empty($evaluasiRengar)) {
            Flash::error('Evaluasi Rengar not found');

            return redirect(route('evaluasiRengars.index'));
        }

        $evaluasiRengar = $this->evaluasiRengarRepository->update($request->all(), $id);

        Flash::success('Evaluasi Rengar updated successfully.');

        return redirect(route('evaluasiRengars.index'));
    }

    /**
     * Remove the specified EvaluasiRengar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiRengar = $this->evaluasiRengarRepository->find($id);

        if (empty($evaluasiRengar)) {
            Flash::error('Evaluasi Rengar not found');

            return redirect(route('evaluasiRengars.index'));
        }

        $this->evaluasiRengarRepository->delete($id);

        Flash::success('Evaluasi Rengar deleted successfully.');

        return redirect(route('evaluasiRengars.index'));
    }
}
