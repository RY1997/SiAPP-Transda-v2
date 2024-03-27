<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiIndikatorRequest;
use App\Http\Requests\UpdateEvaluasiIndikatorRequest;
use App\Repositories\EvaluasiIndikatorRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiIndikator;
use App\Models\ParameterIndikator;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
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
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi')->get();
        $parameterIndikator = ParameterIndikator::where('jenis_tkd', session('jenis_tkd'))->get();

        foreach ($suratTugas as $st) {
            foreach ($parameterIndikator as $indikator) {
                EvaluasiIndikator::updateOrCreate([
                    'nama_pemda' => $st->nama_pemda,
                    'tahun' => '2023',
                    'kode_pwk' => $st->kode_pwk,
                    'jenis_tkd' => $st->jenis_tkd,
                    'uraian_indikator' => $indikator->uraian_indikator
                ], [
                    'sumber_data' => NULL
                ]);

                EvaluasiIndikator::updateOrCreate([
                    'nama_pemda' => $st->nama_pemda,
                    'tahun' => '2024',
                    'kode_pwk' => $st->kode_pwk,
                    'jenis_tkd' => $st->jenis_tkd,
                    'uraian_indikator' => $indikator->uraian_indikator
                ], [
                    'sumber_data' => NULL
                ]);
            }
        }

        $evaluasiIndikators = EvaluasiIndikator::where('jenis_tkd', session('jenis_tkd'))->orderBy('nama_pemda')->orderBy('tahun')->paginate(20);

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
        $evaluasiIndikator2023 = EvaluasiIndikator::where('id', $id)->first();
        $evaluasiIndikator2024 = EvaluasiIndikator::where('tahun', '2024')->where('jenis_tkd', session('jenis_tkd'))
            ->where('nama_pemda', $evaluasiIndikator2023->nama_pemda)->where('uraian_indikator', $evaluasiIndikator2023->uraian_indikator)->first();

        return view('evaluasi_indikators.edit')->with(['evaluasiIndikator2023' => $evaluasiIndikator2023, 'evaluasiIndikator2024' => $evaluasiIndikator2024]);
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
        $evaluasiIndikator2023 = EvaluasiIndikator::find($id);

        if (!$evaluasiIndikator2023) {
            Flash::error('Evaluasi Indikator not found');
            return redirect(route('evaluasiIndikators.index'));
        }

        $evaluasiIndikator2024 = EvaluasiIndikator::where('tahun', '2024')
            ->where('jenis_tkd', session('jenis_tkd'))
            ->where('nama_pemda', $evaluasiIndikator2023->nama_pemda)
            ->where('uraian_indikator', $evaluasiIndikator2023->uraian_indikator)
            ->first();

        if (!$evaluasiIndikator2024) {
            Flash::error('Evaluasi Indikator not found');
            return redirect(route('evaluasiIndikators.index'));
        }

        // Update for 2023
        $data2023 = [
            'target' => $request->target_2023 ?: null,
            'realisasi' => $request->realisasi_2023 ?: null,
            'keterangan' => $request->keterangan_2023 ?: null
        ];
        $evaluasiIndikator2023->update($data2023);

        // Update for 2024
        $data2024 = [
            'target' => $request->target_2024 ?: null,
            'realisasi' => $request->realisasi_2024 ?: null,
            'keterangan' => $request->keterangan_2024 ?: null
        ];
        $evaluasiIndikator2024->update($data2024);

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
