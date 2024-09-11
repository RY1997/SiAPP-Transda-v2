<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiKebijakanAlokasiRequest;
use App\Http\Requests\UpdateEvaluasiKebijakanAlokasiRequest;
use App\Repositories\EvaluasiKebijakanAlokasiRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class EvaluasiKebijakanAlokasiController extends AppBaseController
{
    /** @var EvaluasiKebijakanAlokasiRepository $evaluasiKebijakanAlokasiRepository*/
    private $evaluasiKebijakanAlokasiRepository;

    public function __construct(EvaluasiKebijakanAlokasiRepository $evaluasiKebijakanAlokasiRepo)
    {
        $this->middleware('auth');
        $this->evaluasiKebijakanAlokasiRepository = $evaluasiKebijakanAlokasiRepo;
    }

    /**
     * Display a listing of the EvaluasiKebijakanAlokasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $evaluasiKebijakanAlokasis = $this->evaluasiKebijakanAlokasiRepository->all();

        return view('evaluasi_kebijakan_alokasis.index')
            ->with('evaluasiKebijakanAlokasis', $evaluasiKebijakanAlokasis);
    }

    /**
     * Show the form for creating a new EvaluasiKebijakanAlokasi.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::user()->role == 'Admin') {
            $pemdas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->get();
        } else {
            $pemdas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk)->where('jenis_penugasan', 'Evaluasi')->get();
        }
        return view('evaluasi_kebijakan_alokasis.create')->with([
            'pemdas' => $pemdas,
        ]);
    }

    /**
     * Store a newly created EvaluasiKebijakanAlokasi in storage.
     *
     * @param CreateEvaluasiKebijakanAlokasiRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiKebijakanAlokasiRequest $request)
    {
        $input = $request->all();
        $input['tahun'] = 2024;
        $input['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $evaluasiKebijakanAlokasi = $this->evaluasiKebijakanAlokasiRepository->create($input);

        Flash::success('Evaluasi Kebijakan Alokasi saved successfully.');

        return redirect(route('evaluasiKebijakanAlokasis.index'));
    }

    /**
     * Display the specified EvaluasiKebijakanAlokasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiKebijakanAlokasi = $this->evaluasiKebijakanAlokasiRepository->find($id);

        if (empty($evaluasiKebijakanAlokasi)) {
            Flash::error('Evaluasi Kebijakan Alokasi not found');

            return redirect(route('evaluasiKebijakanAlokasis.index'));
        }

        return view('evaluasi_kebijakan_alokasis.show')->with('evaluasiKebijakanAlokasi', $evaluasiKebijakanAlokasi);
    }

    /**
     * Show the form for editing the specified EvaluasiKebijakanAlokasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiKebijakanAlokasi = $this->evaluasiKebijakanAlokasiRepository->find($id);

        if (empty($evaluasiKebijakanAlokasi)) {
            Flash::error('Evaluasi Kebijakan Alokasi not found');
            return redirect(route('evaluasiKebijakanAlokasis.index'));
        }

        if (Auth::user()->role == 'Admin') {
            $pemdas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->get();
        } else {
            $pemdas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk)->where('jenis_penugasan', 'Evaluasi')->get();
        }

        return view('evaluasi_kebijakan_alokasis.edit')->with([
            'evaluasiKebijakanAlokasi' => $evaluasiKebijakanAlokasi,
            'pemdas' => $pemdas,
        ]);
    }

    /**
     * Update the specified EvaluasiKebijakanAlokasi in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiKebijakanAlokasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiKebijakanAlokasiRequest $request)
    {
        $evaluasiKebijakanAlokasi = $this->evaluasiKebijakanAlokasiRepository->find($id);

        if (empty($evaluasiKebijakanAlokasi)) {
            Flash::error('Evaluasi Kebijakan Alokasi not found');

            return redirect(route('evaluasiKebijakanAlokasis.index'));
        }

        $evaluasiKebijakanAlokasi = $this->evaluasiKebijakanAlokasiRepository->update($request->all(), $id);

        Flash::success('Evaluasi Kebijakan Alokasi updated successfully.');

        return redirect(route('evaluasiKebijakanAlokasis.index'));
    }

    /**
     * Remove the specified EvaluasiKebijakanAlokasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiKebijakanAlokasi = $this->evaluasiKebijakanAlokasiRepository->find($id);

        if (empty($evaluasiKebijakanAlokasi)) {
            Flash::error('Evaluasi Kebijakan Alokasi not found');

            return redirect(route('evaluasiKebijakanAlokasis.index'));
        }

        $this->evaluasiKebijakanAlokasiRepository->delete($id);

        Flash::success('Evaluasi Kebijakan Alokasi deleted successfully.');

        return redirect(route('evaluasiKebijakanAlokasis.index'));
    }
}
