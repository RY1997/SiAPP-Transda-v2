<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiKontrakRequest;
use App\Http\Requests\UpdateEvaluasiKontrakRequest;
use App\Repositories\EvaluasiKontrakRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiKontrak;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvaluasiKontrakController extends AppBaseController
{
    /** @var EvaluasiKontrakRepository $evaluasiKontrakRepository*/
    private $evaluasiKontrakRepository;

    public function __construct(EvaluasiKontrakRepository $evaluasiKontrakRepo)
    {
        $this->evaluasiKontrakRepository = $evaluasiKontrakRepo;
    }

    /**
     * Display a listing of the EvaluasiKontrak.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $evaluasiKontraks = $this->evaluasiKontrakRepository->all();

        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Audit')->paginate(20);
        $evaluasiKontraks = EvaluasiKontrak::where('jenis_tkd', session('jenis_tkd'))->get();

        return view('evaluasi_kontraks.index')
            ->with([
                'suratTugas' => $suratTugas,
                'evaluasiKontraks' => $evaluasiKontraks
            ]);
    }

    /**
     * Show the form for creating a new EvaluasiKontrak.
     *
     * @return Response
     */
    public function create($st_id, $tahun)
    {
        
        return view('evaluasi_kontraks.create');
    }

    /**
     * Store a newly created EvaluasiKontrak in storage.
     *
     * @param CreateEvaluasiKontrakRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiKontrakRequest $request)
    {
        $input = $request->all();

        $evaluasiKontrak = $this->evaluasiKontrakRepository->create($input);

        Flash::success('Evaluasi Kontrak saved successfully.');

        return redirect(route('evaluasiKontraks.index'));
    }

    /**
     * Display the specified EvaluasiKontrak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($st_id, $tahun)
    {
        $suratTugas = SuratTugas::find($st_id);
        $evaluasiKontraks = EvaluasiKontrak::where('nama_pemda', $suratTugas->nama_pemda)->where('tahun', $tahun)->paginate(20);

        return view('evaluasi_kontraks.show')->with(['suratTugas' => $suratTugas, 'tahun' => $tahun, 'evaluasiKontraks' => $evaluasiKontraks]);
    }

    /**
     * Show the form for editing the specified EvaluasiKontrak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiKontrak = $this->evaluasiKontrakRepository->find($id);

        if (empty($evaluasiKontrak)) {
            Flash::error('Evaluasi Kontrak not found');

            return redirect(route('evaluasiKontraks.index'));
        }

        return view('evaluasi_kontraks.edit')->with('evaluasiKontrak', $evaluasiKontrak);
    }

    /**
     * Update the specified EvaluasiKontrak in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiKontrakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiKontrakRequest $request)
    {
        $evaluasiKontrak = $this->evaluasiKontrakRepository->find($id);

        if (empty($evaluasiKontrak)) {
            Flash::error('Evaluasi Kontrak not found');

            return redirect(route('evaluasiKontraks.index'));
        }

        $evaluasiKontrak = $this->evaluasiKontrakRepository->update($request->all(), $id);

        Flash::success('Evaluasi Kontrak updated successfully.');

        return redirect(route('evaluasiKontraks.index'));
    }

    /**
     * Remove the specified EvaluasiKontrak from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiKontrak = $this->evaluasiKontrakRepository->find($id);

        if (empty($evaluasiKontrak)) {
            Flash::error('Evaluasi Kontrak not found');

            return redirect(route('evaluasiKontraks.index'));
        }

        $this->evaluasiKontrakRepository->delete($id);

        Flash::success('Evaluasi Kontrak deleted successfully.');

        return redirect(route('evaluasiKontraks.index'));
    }
}
