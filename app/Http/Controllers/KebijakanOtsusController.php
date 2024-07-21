<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKebijakanOtsusRequest;
use App\Http\Requests\UpdateKebijakanOtsusRequest;
use App\Repositories\KebijakanOtsusRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\KebijakanOtsus;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class KebijakanOtsusController extends AppBaseController
{
    /** @var KebijakanOtsusRepository $kebijakanOtsusRepository*/
    private $kebijakanOtsusRepository;

    public function __construct(KebijakanOtsusRepository $kebijakanOtsusRepo)
    {
        $this->middleware('auth');
        $this->kebijakanOtsusRepository = $kebijakanOtsusRepo;
    }

    /**
     * Display a listing of the KebijakanOtsus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('jenis_tkd', session('jenis_tkd'))->get();

        foreach ($suratTugas as $item) {
            KebijakanOtsus::updateOrCreate([
                'tahun' => '2023',
                'kode_pwk' => $item->kode_pwk,
                'jenis_tkd' => $item->jenis_tkd,
                'nama_pemda' => $item->nama_pemda
            ]);
            KebijakanOtsus::updateOrCreate([
                'tahun' => '2024',
                'kode_pwk' => $item->kode_pwk,
                'jenis_tkd' => $item->jenis_tkd,
                'nama_pemda' => $item->nama_pemda
            ]);
            if ($item->kode_pwk != 'PW01') {
                KebijakanOtsus::updateOrCreate([
                    'tahun' => '2023',
                    'kode_pwk' => $item->kode_pwk,
                    'jenis_tkd' => 'Dana Tambahan Infrastruktur (DTI)',
                    'nama_pemda' => $item->nama_pemda
                ]);
                KebijakanOtsus::updateOrCreate([
                    'tahun' => '2024',
                    'kode_pwk' => $item->kode_pwk,
                    'jenis_tkd' => 'Dana Tambahan Infrastruktur (DTI)',
                    'nama_pemda' => $item->nama_pemda
                ]);
            }
        }

        if (Auth::user()->role == 'Admin') {
            $kebijakanOtsuses = KebijakanOtsus::query();
        } else {
            $kebijakanOtsuses = KebijakanOtsus::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $kebijakanOtsuses = $kebijakanOtsuses->has('st')->orderBy('nama_pemda')->orderBy('tahun')->orderBy('jenis_tkd')->paginate(20);

        return view('kebijakan_otsuses.index')
            ->with('kebijakanOtsuses', $kebijakanOtsuses);
    }

    /**
     * Show the form for creating a new KebijakanOtsus.
     *
     * @return Response
     */
    public function create()
    {
        return view('kebijakan_otsuses.create');
    }

    /**
     * Store a newly created KebijakanOtsus in storage.
     *
     * @param CreateKebijakanOtsusRequest $request
     *
     * @return Response
     */
    public function store(CreateKebijakanOtsusRequest $request)
    {
        $input = $request->all();

        $kebijakanOtsus = $this->kebijakanOtsusRepository->create($input);

        Flash::success('Kebijakan Otsus saved successfully.');

        return redirect(route('kebijakanOtsuses.index'));
    }

    /**
     * Display the specified KebijakanOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kebijakanOtsus = $this->kebijakanOtsusRepository->find($id);

        if (empty($kebijakanOtsus)) {
            Flash::error('Kebijakan Otsus not found');

            return redirect(route('kebijakanOtsuses.index'));
        }

        return view('kebijakan_otsuses.show')->with('kebijakanOtsus', $kebijakanOtsus);
    }

    /**
     * Show the form for editing the specified KebijakanOtsus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kebijakanOtsus = $this->kebijakanOtsusRepository->find($id);

        if (empty($kebijakanOtsus)) {
            Flash::error('Kebijakan Otsus not found');

            return redirect(route('kebijakanOtsuses.index'));
        }

        return view('kebijakan_otsuses.edit')->with('kebijakanOtsus', $kebijakanOtsus);
    }

    /**
     * Update the specified KebijakanOtsus in storage.
     *
     * @param int $id
     * @param UpdateKebijakanOtsusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKebijakanOtsusRequest $request)
    {
        $kebijakanOtsus = $this->kebijakanOtsusRepository->find($id);

        if (empty($kebijakanOtsus)) {
            Flash::error('Kebijakan Otsus not found');

            return redirect(route('kebijakanOtsuses.index'));
        }

        $kebijakanOtsus = $this->kebijakanOtsusRepository->update($request->all(), $id);

        Flash::success('Kebijakan Otsus updated successfully.');

        return redirect(route('kebijakanOtsuses.index'));
    }

    /**
     * Remove the specified KebijakanOtsus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kebijakanOtsus = $this->kebijakanOtsusRepository->find($id);

        if (empty($kebijakanOtsus)) {
            Flash::error('Kebijakan Otsus not found');

            return redirect(route('kebijakanOtsuses.index'));
        }

        $this->kebijakanOtsusRepository->delete($id);

        Flash::success('Kebijakan Otsus deleted successfully.');

        return redirect(route('kebijakanOtsuses.index'));
    }
}
