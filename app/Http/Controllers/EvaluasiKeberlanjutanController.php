<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiPrioritasRequest;
use App\Http\Requests\UpdateEvaluasiPrioritasRequest;
use App\Repositories\EvaluasiPrioritasRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\EvaluasiPrioritas;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class EvaluasiKeberlanjutanController extends AppBaseController
{
    /** @var EvaluasiPrioritasRepository $evaluasiPrioritasRepository*/
    private $evaluasiPrioritasRepository;

    public function __construct(EvaluasiPrioritasRepository $evaluasiPrioritasRepo)
    {
        $this->middleware('auth');
        $this->evaluasiPrioritasRepository = $evaluasiPrioritasRepo;
    }

    /**
     * Display a listing of the EvaluasiPrioritas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $evaluasiPrioritas = SuratTugas::query();
        } else {
            $evaluasiPrioritas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $evaluasiPrioritas = $evaluasiPrioritas->where('jenis_tkd', session('jenis_tkd'))
            ->where('jenis_penugasan', 'Evaluasi')
            ->withSum([
                'prioritas as nilai_anggaran2020' => function ($query) {
                    $query->where('tahun', '2020')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_anggaran')
            ->withSum([
                'prioritas as nilai_anggaran2021' => function ($query) {
                    $query->where('tahun', '2021')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_anggaran')
            ->withSum([
                'prioritas as nilai_anggaran2022' => function ($query) {
                    $query->where('tahun', '2022')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_anggaran')
            ->withSum([
                'prioritas as nilai_anggaran2023' => function ($query) {
                    $query->where('tahun', '2023')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_anggaran')
            ->withSum([
                'rengar as nilai_realisasi2020' => function ($query) {
                    $query->where('tahun', '2020')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_realisasi')
            ->withSum([
                'rengar as nilai_realisasi2021' => function ($query) {
                    $query->where('tahun', '2021')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_realisasi')
            ->withSum([
                'rengar as nilai_realisasi2022' => function ($query) {
                    $query->where('tahun', '2022')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_realisasi')
            ->withSum([
                'prioritas as nilai_realisasi2023' => function ($query) {
                    $query->where('tahun', '2023')->where('jenis_tkd', session('jenis_tkd'));
                }
            ], 'nilai_realisasi')
            ->withCount(['prioritas as jumlah_permasalahan2020' => function ($query) {
                $query->where('tahun', '2020')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as jumlah_permasalahan2021' => function ($query) {
                $query->where('tahun', '2021')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as jumlah_permasalahan2022' => function ($query) {
                $query->where('tahun', '2022')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as jumlah_permasalahan2023' => function ($query) {
                $query->where('tahun', '2023')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as nilai_permasalahan2020' => function ($query) {
                $query->where('tahun', '2020')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as nilai_permasalahan2021' => function ($query) {
                $query->where('tahun', '2021')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as nilai_permasalahan2022' => function ($query) {
                $query->where('tahun', '2022')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->withCount(['prioritas as nilai_permasalahan2023' => function ($query) {
                $query->where('tahun', '2023')->where('jenis_tkd', session('jenis_tkd'))->whereNotNull('pemanfaatan_kegiatan');
            }])
            ->paginate(20);

        return view('evaluasi_keberlanjutans.index')
            ->with('evaluasiPrioritas', $evaluasiPrioritas);
    }

    /**
     * Show the form for creating a new EvaluasiPrioritas.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $suratTugas = SuratTugas::where('id', $request->st)->first();

        if (empty($suratTugas)) {
            Flash::error('Pemda not found');
            return redirect()->back();
        }
        
        return view('evaluasi_keberlanjutans.create')->with([
            'suratTugas' => $suratTugas,
            'tahun' => $request->tahun
        ]);
    }

    /**
     * Store a newly created EvaluasiPrioritas in storage.
     *
     * @param CreateEvaluasiPrioritasRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiPrioritasRequest $request)
    {
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi')->where('nama_pemda', $request->nama_pemda)->first();

        $input = $request->all();
        $input['kode_pwk'] = $suratTugas->kode_pwk;

        $evaluasiPrioritas = $this->evaluasiPrioritasRepository->create($input);

        Flash::success('Evaluasi Keberlanjutan saved successfully.');

        return redirect(route('evaluasiKeberlanjutans.index'));
    }

    /**
     * Display the specified EvaluasiPrioritas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id, Request $request)
    {
        $suratTugas = SuratTugas::where('id', $id)->first();

        if (empty($suratTugas)) {
            Flash::error('Evaluasi Keberlanjutan not found');
            return redirect()->back();
        }

        $evaluasiPrioritas = EvaluasiPrioritas::where('nama_pemda', $suratTugas->nama_pemda)
            ->where('tahun', $request->tahun)
            ->where('jenis_tkd', session('jenis_tkd'))
            ->paginate(20);

        return view('evaluasi_keberlanjutans.show')->with([
            'evaluasiPrioritas' => $evaluasiPrioritas,
            'suratTugas' => $suratTugas,
            'tahun' => $request->tahun
        ]);
    }

    /**
     * Show the form for editing the specified EvaluasiPrioritas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiPrioritas = $this->evaluasiPrioritasRepository->find($id);

        if (empty($evaluasiPrioritas)) {
            Flash::error('Evaluasi Keberlanjutan not found');
            return redirect(route('evaluasiKeberlanjutans.index'));
        }

        return view('evaluasi_keberlanjutans.edit')->with('evaluasiPrioritas', $evaluasiPrioritas);
    }

    /**
     * Update the specified EvaluasiPrioritas in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiPrioritasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiPrioritasRequest $request)
    {
        $evaluasiPrioritas = $this->evaluasiPrioritasRepository->find($id);

        if (empty($evaluasiPrioritas)) {
            Flash::error('Evaluasi Keberlanjutan not found');
            return redirect(route('evaluasiKeberlanjutans.index'));
        }

        $evaluasiPrioritas = $this->evaluasiPrioritasRepository->update($request->all(), $id);

        Flash::success('Evaluasi Keberlanjutan updated successfully.');

        return redirect(route('evaluasiKeberlanjutans.index'));
    }

    /**
     * Remove the specified EvaluasiPrioritas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiPrioritas = $this->evaluasiPrioritasRepository->find($id);

        if (empty($evaluasiPrioritas)) {
            Flash::error('Evaluasi Keberlanjutan not found');
            return redirect(route('evaluasiKeberlanjutans.index'));
        }

        $this->evaluasiPrioritasRepository->delete($id);

        Flash::success('Evaluasi Keberlanjutan deleted successfully.');

        return redirect()->back();
    }
}
