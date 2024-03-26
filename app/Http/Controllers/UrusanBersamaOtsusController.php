<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUrusanBersamaOtsusRequest;
use App\Http\Requests\UpdateUrusanBersamaOtsusRequest;
use App\Repositories\UrusanBersamaOtsusRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiRengar;
use App\Models\UrusanBersamaOtsus;
use Illuminate\Http\Request;
use Flash;
use Response;

class UrusanBersamaOtsusController extends AppBaseController
{
    /** @var UrusanBersamaOtsusRepository $urusanBersamaOtsusRepository*/
    private $urusanBersamaOtsusRepository;

    public function __construct(UrusanBersamaOtsusRepository $urusanBersamaOtsusRepo)
    {
        $this->urusanBersamaOtsusRepository = $urusanBersamaOtsusRepo;
    }

    /**
     * Display a listing of the UrusanBersamaOtsus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $urusanBersamaOtsuses2023 = EvaluasiRengar::where('tahun', '2023')
            ->groupBy('urusan_subkegiatan')
            ->selectRaw('urusan_subkegiatan, sum(nilai_anggaran) as total_nilai_anggaran')
            ->get();

        $urusanBersamaOtsuses2024 = EvaluasiRengar::where('tahun', '2024')
            ->groupBy('urusan_subkegiatan')
            ->selectRaw('urusan_subkegiatan, sum(nilai_anggaran) as total_nilai_anggaran')
            ->get();

        return view('urusan_bersama_otsuses.index')
            ->with([
                'urusanBersamaOtsuses2023' => $urusanBersamaOtsuses2023,
                'urusanBersamaOtsuses2024' => $urusanBersamaOtsuses2024
            ]);
    }

    /**
     * Show the form for creating a new UrusanBersamaOtsus.
     *
     * @return Response
     */
    public function create()
    {
        return view('urusan_bersama_otsuses.create');
    }

    /**
     * Store a newly created UrusanBersamaOtsus in storage.
     *
     * @param CreateUrusanBersamaOtsusRequest $request
     *
     * @return Response
     */
    public function store(CreateUrusanBersamaOtsusRequest $request)
    {
        $input = $request->all();

        $urusanBersamaOtsus = $this->urusanBersamaOtsusRepository->create($input);

        Flash::success('Urusan Bersama Otsus saved successfully.');

        return redirect(route('urusanBersamaOtsuses.index'));
    }

    /**
     * Display the specified UrusanBersamaOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $urusanBersamaOtsus = $this->urusanBersamaOtsusRepository->find($id);

        if (empty($urusanBersamaOtsus)) {
            Flash::error('Urusan Bersama Otsus not found');

            return redirect(route('urusanBersamaOtsuses.index'));
        }

        return view('urusan_bersama_otsuses.show')->with('urusanBersamaOtsus', $urusanBersamaOtsus);
    }

    /**
     * Show the form for editing the specified UrusanBersamaOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $urusanBersamaOtsus = $this->urusanBersamaOtsusRepository->find($id);

        if (empty($urusanBersamaOtsus)) {
            Flash::error('Urusan Bersama Otsus not found');

            return redirect(route('urusanBersamaOtsuses.index'));
        }

        return view('urusan_bersama_otsuses.edit')->with('urusanBersamaOtsus', $urusanBersamaOtsus);
    }

    /**
     * Update the specified UrusanBersamaOtsus in storage.
     *
     * @param int $id
     * @param UpdateUrusanBersamaOtsusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUrusanBersamaOtsusRequest $request)
    {
        $urusanBersamaOtsus = $this->urusanBersamaOtsusRepository->find($id);

        if (empty($urusanBersamaOtsus)) {
            Flash::error('Urusan Bersama Otsus not found');

            return redirect(route('urusanBersamaOtsuses.index'));
        }

        $urusanBersamaOtsus = $this->urusanBersamaOtsusRepository->update($request->all(), $id);

        Flash::success('Urusan Bersama Otsus updated successfully.');

        return redirect(route('urusanBersamaOtsuses.index'));
    }

    /**
     * Remove the specified UrusanBersamaOtsus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $urusanBersamaOtsus = $this->urusanBersamaOtsusRepository->find($id);

        if (empty($urusanBersamaOtsus)) {
            Flash::error('Urusan Bersama Otsus not found');

            return redirect(route('urusanBersamaOtsuses.index'));
        }

        $this->urusanBersamaOtsusRepository->delete($id);

        Flash::success('Urusan Bersama Otsus deleted successfully.');

        return redirect(route('urusanBersamaOtsuses.index'));
    }
}
