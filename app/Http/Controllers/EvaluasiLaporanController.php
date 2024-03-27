<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiLaporanRequest;
use App\Http\Requests\UpdateEvaluasiLaporanRequest;
use App\Repositories\EvaluasiLaporanRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiLaporan;
use App\Models\ParameterLaporan;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvaluasiLaporanController extends AppBaseController
{
    /** @var EvaluasiLaporanRepository $evaluasiLaporanRepository*/
    private $evaluasiLaporanRepository;

    public function __construct(EvaluasiLaporanRepository $evaluasiLaporanRepo)
    {
        $this->evaluasiLaporanRepository = $evaluasiLaporanRepo;
    }

    /**
     * Display a listing of the EvaluasiLaporan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {        
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi')->first();
        $parameterLaporan = ParameterLaporan::where('jenis_tkd', session('jenis_tkd'))->get();

        foreach ($parameterLaporan as $item) {
            $evaluasiLaporan = EvaluasiLaporan::updateOrCreate([
                'tahun' => $item->tahun_laporan,
                'kode_pwk' => $suratTugas->kode_pwk,
                'nama_pemda' => $suratTugas->nama_pemda,
                'jenis_tkd' => $item->jenis_tkd,
                'bidang_tkd' => $item->bidang_tkd,
                'nama_laporan' => $item->nama_laporan,
                'batas_penyampaian' => $item->batas_penyampaian
            ]);
        }

        $evaluasiLaporans = EvaluasiLaporan::orderBy('nama_pemda')->orderBy('bidang_tkd')->orderBy('tahun')->paginate(20);

        return view('evaluasi_laporans.index')
            ->with('evaluasiLaporans', $evaluasiLaporans);
    }


    /**
     * Show the form for creating a new EvaluasiLaporan.
     *
     * @return Response
     */
    public function create()
    {
        return view('evaluasi_laporans.create');
    }

    /**
     * Store a newly created EvaluasiLaporan in storage.
     *
     * @param CreateEvaluasiLaporanRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiLaporanRequest $request)
    {
        $input = $request->all();

        $evaluasiLaporan = $this->evaluasiLaporanRepository->create($input);

        Flash::success('Evaluasi Laporan saved successfully.');

        return redirect(route('evaluasiLaporans.index'));
    }

    /**
     * Display the specified EvaluasiLaporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiLaporan = $this->evaluasiLaporanRepository->find($id);

        if (empty($evaluasiLaporan)) {
            Flash::error('Evaluasi Laporan not found');

            return redirect(route('evaluasiLaporans.index'));
        }

        return view('evaluasi_laporans.show')->with('evaluasiLaporan', $evaluasiLaporan);
    }

    /**
     * Show the form for editing the specified EvaluasiLaporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiLaporan = $this->evaluasiLaporanRepository->find($id);

        if (empty($evaluasiLaporan)) {
            Flash::error('Evaluasi Laporan not found');

            return redirect(route('evaluasiLaporans.index'));
        }

        return view('evaluasi_laporans.edit')->with('evaluasiLaporan', $evaluasiLaporan);
    }

    /**
     * Update the specified EvaluasiLaporan in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiLaporanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiLaporanRequest $request)
    {
        $evaluasiLaporan = $this->evaluasiLaporanRepository->find($id);

        if (empty($evaluasiLaporan)) {
            Flash::error('Evaluasi Laporan not found');

            return redirect(route('evaluasiLaporans.index'));
        }

        $evaluasiLaporan = $this->evaluasiLaporanRepository->update($request->all(), $id);

        Flash::success('Evaluasi Laporan updated successfully.');

        return redirect(route('evaluasiLaporans.index'));
    }

    /**
     * Remove the specified EvaluasiLaporan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiLaporan = $this->evaluasiLaporanRepository->find($id);

        if (empty($evaluasiLaporan)) {
            Flash::error('Evaluasi Laporan not found');

            return redirect(route('evaluasiLaporans.index'));
        }

        $this->evaluasiLaporanRepository->delete($id);

        Flash::success('Evaluasi Laporan deleted successfully.');

        return redirect(route('evaluasiLaporans.index'));
    }
}
