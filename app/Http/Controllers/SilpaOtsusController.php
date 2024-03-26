<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSilpaOtsusRequest;
use App\Http\Requests\UpdateSilpaOtsusRequest;
use App\Repositories\SilpaOtsusRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\SilpaOtsus;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Response;

class SilpaOtsusController extends AppBaseController
{
    /** @var SilpaOtsusRepository $silpaOtsusRepository*/
    private $silpaOtsusRepository;

    public function __construct(SilpaOtsusRepository $silpaOtsusRepo)
    {
        $this->silpaOtsusRepository = $silpaOtsusRepo;
    }

    /**
     * Display a listing of the SilpaOtsus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suratTugas = SuratTugas::where('jenis_penugasan', 'Audit')->where('jenis_tkd', session('jenis_tkd'))->get();

        foreach ($suratTugas as $item) {
            SilpaOtsus::updateOrCreate([
                'tahun' => '2023',
                'kode_pwk' => $item->kode_pwk,
                'jenis_tkd' => $item->jenis_tkd,
                'nama_pemda' => $item->nama_pemda
            ]);
            SilpaOtsus::updateOrCreate([
                'tahun' => '2024',
                'kode_pwk' => $item->kode_pwk,
                'jenis_tkd' => $item->jenis_tkd,
                'nama_pemda' => $item->nama_pemda
            ]);
            if ($item->kode_pwk == 'PW26' || $item->kode_pwk == 'PW27') {
                SilpaOtsus::updateOrCreate([
                    'tahun' => '2023',
                    'kode_pwk' => $item->kode_pwk,
                    'jenis_tkd' => 'Dana Tambahan Infrastruktur (DTI)',
                    'nama_pemda' => $item->nama_pemda
                ]);
                SilpaOtsus::updateOrCreate([
                    'tahun' => '2024',
                    'kode_pwk' => $item->kode_pwk,
                    'jenis_tkd' => 'Dana Tambahan Infrastruktur (DTI)',
                    'nama_pemda' => $item->nama_pemda
                ]);
            }
        }

        $silpaOtsuses = SilpaOtsus::orderBy('nama_pemda')->orderBy('tahun')->orderBy('jenis_tkd')->paginate(20);

        return view('silpa_otsuses.index')
            ->with('silpaOtsuses', $silpaOtsuses);
    }

    /**
     * Show the form for creating a new SilpaOtsus.
     *
     * @return Response
     */
    public function create()
    {
        return view('silpa_otsuses.create');
    }

    /**
     * Store a newly created SilpaOtsus in storage.
     *
     * @param CreateSilpaOtsusRequest $request
     *
     * @return Response
     */
    public function store(CreateSilpaOtsusRequest $request)
    {
        $input = $request->all();

        $silpaOtsus = $this->silpaOtsusRepository->create($input);

        Flash::success('Silpa Otsus saved successfully.');

        return redirect(route('silpaOtsuses.index'));
    }

    /**
     * Display the specified SilpaOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $silpaOtsus = $this->silpaOtsusRepository->find($id);

        if (empty($silpaOtsus)) {
            Flash::error('Silpa Otsus not found');

            return redirect(route('silpaOtsuses.index'));
        }

        return view('silpa_otsuses.show')->with('silpaOtsus', $silpaOtsus);
    }

    /**
     * Show the form for editing the specified SilpaOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $silpaOtsus = $this->silpaOtsusRepository->find($id);

        if (empty($silpaOtsus)) {
            Flash::error('Silpa Otsus not found');

            return redirect(route('silpaOtsuses.index'));
        }

        return view('silpa_otsuses.edit')->with('silpaOtsus', $silpaOtsus);
    }

    /**
     * Update the specified SilpaOtsus in storage.
     *
     * @param int $id
     * @param UpdateSilpaOtsusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSilpaOtsusRequest $request)
    {
        $silpaOtsus = $this->silpaOtsusRepository->find($id);

        if (empty($silpaOtsus)) {
            Flash::error('Silpa Otsus not found');

            return redirect(route('silpaOtsuses.index'));
        }

        $silpaOtsus = $this->silpaOtsusRepository->update($request->all(), $id);

        Flash::success('Silpa Otsus updated successfully.');

        return redirect(route('silpaOtsuses.index'));
    }

    /**
     * Remove the specified SilpaOtsus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $silpaOtsus = $this->silpaOtsusRepository->find($id);

        if (empty($silpaOtsus)) {
            Flash::error('Silpa Otsus not found');

            return redirect(route('silpaOtsuses.index'));
        }

        $this->silpaOtsusRepository->delete($id);

        Flash::success('Silpa Otsus deleted successfully.');

        return redirect(route('silpaOtsuses.index'));
    }
}
