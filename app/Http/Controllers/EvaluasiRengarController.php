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
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Audit')->paginate(20);
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
    public function show($id, $tahun)
    {
        $suratTugas = SuratTugas::where('id', $id)->first();
        $evaluasiRengars = EvaluasiRengar::where('nama_pemda', $suratTugas->nama_pemda)
            ->where('tahun', $tahun)
            ->where('sumber_dana', session('jenis_tkd'))
            ->groupBy('kode_kegiatan')
            ->selectRaw('*, 
                SUM(nilai_anggaran) as total_anggaran, 
                SUM(nilai_realisasi) as total_realisasi, 
                COUNT(CASE WHEN relevansi_subkegiatan = "Relevan" THEN 1 END) AS total_relevan, 
                COUNT(CASE WHEN relevansi_subkegiatan = "Tidak Relevan" THEN 1 END) AS total_tdk_relevan,
                COUNT(CASE WHEN relevansi_subkegiatan IS NULL THEN 1 END) AS total_blm_relevan, 
                COUNT(CASE WHEN pelaksanaan_subkegiatan = "Dilaksanakan" THEN 1 END) AS total_pelaksanaan, 
                COUNT(CASE WHEN pelaksanaan_subkegiatan = "Tidak Dilaksanakan" THEN 1 END) AS total_tdk_pelaksanaan,
                COUNT(CASE WHEN pelaksanaan_subkegiatan IS NULL THEN 1 END) AS total_blm_pelaksanaan')
            ->paginate(20);


        return view('evaluasi_rengars.show')->with(['suratTugas' => $suratTugas, 'evaluasiRengars' => $evaluasiRengars, 'tahun' => $tahun]);
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
        $st_id = SuratTugas::where('nama_pemda', $evaluasiRengar->nama_pemda)->first();
        $subKegiatans = EvaluasiRengar::where('nama_pemda', $evaluasiRengar->nama_pemda)->where('tahun', $evaluasiRengar->tahun)->where('kode_kegiatan', $evaluasiRengar->kode_kegiatan)->where('sumber_dana', session('jenis_tkd'))->get();

        if (empty($evaluasiRengar)) {
            Flash::error('Evaluasi Rengar not found');
            return redirect(route('evaluasiRengars.index'));
        }

        return view('evaluasi_rengars.edit')
            ->with([
                'st_id' => $st_id,
                'evaluasiRengar' => $evaluasiRengar,
                'subKegiatans' => $subKegiatans
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

        $evaluasiRengar = EvaluasiRengar::find($id);

        if (empty($evaluasiRengar)) {
            Flash::error('Evaluasi Rengar not found');
            return redirect(route('evaluasiRengars.index'));
        }

        $subKegiatans = EvaluasiRengar::where('nama_pemda', $evaluasiRengar->nama_pemda)->where('tahun', $evaluasiRengar->tahun)->where('kode_kegiatan', $evaluasiRengar->kode_kegiatan)->where('sumber_dana', session('jenis_tkd'))->get();

        foreach ($subKegiatans as $subKegiatan) {
            $evaluasiRengar = EvaluasiRengar::find($subKegiatan->id);
            $evaluasiRengar->update([
                'urusan_subkegiatan' => $request->urusan_subkegiatan,
                'nilai_realisasi' => $request->{"nilai_realisasi_$subKegiatan->id"},
                'relevansi_subkegiatan' => $request->{"relevansi_$subKegiatan->id"} ?? 'Tidak Relevan',
                'pelaksanaan_subkegiatan' => $request->{"pelaksanaan_$subKegiatan->id"} ?? 'Tidak Dilaksanakan'
            ]);
        }

        Flash::success('Evaluasi Rengar updated successfully.');
        return redirect()->back();
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
