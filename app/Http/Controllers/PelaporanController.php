<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePelaporanRequest;
use App\Http\Requests\UpdatePelaporanRequest;
use App\Repositories\PelaporanRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Pelaporan;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class PelaporanController extends AppBaseController
{
    /** @var PelaporanRepository $pelaporanRepository*/
    private $pelaporanRepository;

    public function __construct(PelaporanRepository $pelaporanRepo)
    {
        $this->middleware('auth');
        $this->pelaporanRepository = $pelaporanRepo;
    }

    /**
     * Display a listing of the Pelaporan.
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

        foreach ($suratTugas as $item) {
            Pelaporan::updateOrCreate([
                'kode_pwk' => $item->kode_pwk,
                'id_st' => $item->id,
                'nama_pemda' => $item->nama_pemda,
                'tgl_laporan' => $item->tgl_akhir
            ]);
        }

        if (Auth::user()->role == 'Admin') {
            $pelaporans = Pelaporan::with('st')->whereHas('st')->paginate(20);
        } else {
            $pelaporans = Pelaporan::with('st')->whereHas('st')->where('kode_pwk', Auth::user()->kode_pwk)->paginate(20);
        }

        return view('pelaporans.index')
            ->with('pelaporans', $pelaporans);
    }

    /**
     * Show the form for creating a new Pelaporan.
     *
     * @return Response
     */
    public function create()
    {
        return view('pelaporans.create');
    }

    /**
     * Store a newly created Pelaporan in storage.
     *
     * @param CreatePelaporanRequest $request
     *
     * @return Response
     */
    public function store(CreatePelaporanRequest $request)
    {
        $input = $request->all();

        $pelaporan = $this->pelaporanRepository->create($input);

        Flash::success('Pelaporan saved successfully.');

        return redirect(route('pelaporans.index'));
    }

    /**
     * Display the specified Pelaporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pelaporan = $this->pelaporanRepository->find($id);

        if (empty($pelaporan)) {
            Flash::error('Pelaporan not found');

            return redirect(route('pelaporans.index'));
        }

        return view('pelaporans.show')->with('pelaporan', $pelaporan);
    }

    /**
     * Show the form for editing the specified Pelaporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pelaporan = $this->pelaporanRepository->find($id);

        if (empty($pelaporan)) {
            Flash::error('Pelaporan not found');

            return redirect(route('pelaporans.index'));
        }

        return view('pelaporans.edit')->with('pelaporan', $pelaporan);
    }

    /**
     * Update the specified Pelaporan in storage.
     *
     * @param int $id
     * @param UpdatePelaporanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePelaporanRequest $request)
    {
        $pelaporan = $this->pelaporanRepository->find($id);

        if (empty($pelaporan)) {
            Flash::error('Pelaporan not found');

            return redirect(route('pelaporans.index'));
        }

        $pelaporan = $this->pelaporanRepository->update($request->all(), $id);

        Flash::success('Pelaporan updated successfully.');

        return redirect(route('pelaporans.index'));
    }

    /**
     * Remove the specified Pelaporan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pelaporan = $this->pelaporanRepository->find($id);

        if (empty($pelaporan)) {
            Flash::error('Pelaporan not found');

            return redirect(route('pelaporans.index'));
        }

        $this->pelaporanRepository->delete($id);

        Flash::success('Pelaporan deleted successfully.');

        return redirect(route('pelaporans.index'));
    }
}
