<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataUmumTkdRequest;
use App\Http\Requests\UpdateDataUmumTkdRequest;
use App\Repositories\DataUmumTkdRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DataUmumTkd;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class DataUmumEvaluasiController extends AppBaseController
{
    /** @var DataUmumTkdRepository $dataUmumTkdRepository*/
    private $dataUmumTkdRepository;

    public function __construct(DataUmumTkdRepository $dataUmumTkdRepo)
    {
        $this->dataUmumTkdRepository = $dataUmumTkdRepo;
    }

    /**
     * Display a listing of the DataUmumTkd.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dataUmumTkds = DataUmumTkd::whereIn('tahun', [2023, 2024])->where('jenis_tkd', session('jenis_tkd'))->whereHas('st', function ($query) {
            $query->where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi');
        })->where('nama_pemda', 'like', '%' . $request->nama_pemda . '%');

        if (Auth::user()->role != 'Admin') {
            $dataUmumTkds = $dataUmumTkds->where('kode_pwk', Auth::user()->kode_pwk);            
        }

        $dataUmumTkds = $dataUmumTkds
        ->selectRaw('*, SUM(alokasi_tkd) as total_alokasi, SUM(penyaluran_tkd) as total_penyaluran, SUM(penganggaran_tkd) as total_penganggaran, SUM(penggunaan_tkd) as total_penggunaan')
        ->groupBy('nama_pemda')->groupBy('tahun')->orderBy('nama_pemda')->orderBy('tahun')->paginate(40);

        return view('data_umum_evaluasis.index')
            ->with([
                'dataUmumTkds' => $dataUmumTkds,
                'nama_pemda' => $request->nama_pemda,
                'page' => $request->page
            ]);
    }

    /**
     * Show the form for creating a new DataUmumTkd.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created DataUmumTkd in storage.
     *
     * @param CreateDataUmumTkdRequest $request
     *
     * @return Response
     */
    public function store(CreateDataUmumTkdRequest $request)
    {
        $dataUmumTkds = DataUmumTkd::where('tahun', $request->tahun)->where('nama_pemda', $request->nama_pemda)->where('jenis_tkd', $request->jenis_tkd)->get();

        if (empty($dataUmumTkds)) {
            Flash::error('Data not found');
            return redirect()->back();
        }

        foreach ($dataUmumTkds as $dataUmumTkd) {
            DataUmumTkd::where('id', $dataUmumTkd->id)->update([
                'alokasi_tkd' => $request->{'alokasi_tkd_' . $dataUmumTkd->id},
                'penyaluran_tkd' => $request->{'penyaluran_tkd_' . $dataUmumTkd->id},
                'penganggaran_tkd' => $request->{'penganggaran_tkd_' . $dataUmumTkd->id},
                'penggunaan_tkd' => $request->{'penggunaan_tkd_' . $dataUmumTkd->id}
            ]);
        }

        Flash::success('Data Umum updated successfully.');

        return redirect(route('evaluasiDataUmumTkds.index'));
    }

    /**
     * Display the specified DataUmumTkd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified DataUmumTkd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataUmumTkd = $this->dataUmumTkdRepository->find($id);

        if (empty($dataUmumTkd)) {
            Flash::error('Data not found');
            return redirect()->back();
        }

        $dataUmumTkds = DataUmumTkd::where('tahun', $dataUmumTkd->tahun)->where('nama_pemda', $dataUmumTkd->nama_pemda)->where('jenis_tkd', session('jenis_tkd'))->get();

        return view('data_umum_evaluasis.edit')->with([
            'dataUmumTkds' => $dataUmumTkds,
        ]);
    }

    /**
     * Update the specified DataUmumTkd in storage.
     *
     * @param int $id
     * @param UpdateDataUmumTkdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataUmumTkdRequest $request)
    {
        //
    }

    /**
     * Remove the specified DataUmumTkd from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
