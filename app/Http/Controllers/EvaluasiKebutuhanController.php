<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiKebutuhanRequest;
use App\Http\Requests\UpdateEvaluasiKebutuhanRequest;
use App\Repositories\EvaluasiKebutuhanRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\EvaluasiKebutuhan;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class EvaluasiKebutuhanController extends AppBaseController
{
    /** @var EvaluasiKebutuhanRepository $evaluasiKebutuhanRepository*/
    private $evaluasiKebutuhanRepository;

    public function __construct(EvaluasiKebutuhanRepository $evaluasiKebutuhanRepo)
    {
        $this->evaluasiKebutuhanRepository = $evaluasiKebutuhanRepo;
    }

    /**
     * Display a listing of the EvaluasiKebutuhan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('jenis_penugasan', 'Evaluasi')->get();
        $tahun = [
            ['tahun' => '2023'],
            ['tahun' => '2024'],
        ];

        foreach ($suratTugas as $st) {
            foreach ($tahun as $item) {
                EvaluasiKebutuhan::updateOrCreate([
                    'nama_pemda' => $st->nama_pemda,
                    'tahun' => $item['tahun'],
                    'kode_pwk' => $st->kode_pwk,
                    'jenis_tkd' => 'Dana Alokasi Umum',
                    'bidang' => 'Belanja Pegawai',
                    'program' => 'Program Penunjang Urusan Pemerintah Daerah',
                    'kegiatan' => 'Penyediaan Gaji dan Tunjangan ASN',
                    'indikator_kegiatan' => 'Pembayaran gaji, tunjangan dan tambahan penghasilan ASN',
                    'satuan' => 'ASN'
                ]);

                EvaluasiKebutuhan::updateOrCreate([
                    'nama_pemda' => $st->nama_pemda,
                    'tahun' => $item['tahun'],
                    'kode_pwk' => $st->kode_pwk,
                    'jenis_tkd' => 'Dana Alokasi Umum',
                    'bidang' => 'Belanja Pegawai',
                    'program' => 'Program Penunjang Urusan Pemerintah Daerah',
                    'kegiatan' => 'Penyediaan Gaji dan Tunjangan PPPK',
                    'indikator_kegiatan' => 'Pembayaran gaji, tunjangan dan tambahan penghasilan PPPK',
                    'satuan' => 'PPPK'
                ]);
            }
        }

        if (Auth::user()->role == 'Admin') {
            $evaluasiKebutuhans = EvaluasiKebutuhan::query();
        } else {
            $evaluasiKebutuhans = EvaluasiKebutuhan::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $evaluasiKebutuhans = $evaluasiKebutuhans->where('jenis_tkd', session('jenis_tkd'))->has('st')->orderBy('nama_pemda')->orderBy('tahun')->paginate(20);

        return view('evaluasi_kebutuhans.index')
            ->with('evaluasiKebutuhans', $evaluasiKebutuhans);
    }

    /**
     * Show the form for creating a new EvaluasiKebutuhan.
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
        return view('evaluasi_kebutuhans.create')->with([
            'pemdas' => $pemdas,
        ]);
    }

    /**
     * Store a newly created EvaluasiKebutuhan in storage.
     *
     * @param CreateEvaluasiKebutuhanRequest $request
     *
     * @return Response
     */
    public function store(CreateEvaluasiKebutuhanRequest $request)
    {
        $input = $request->all();
        $input['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $evaluasiKebutuhan = $this->evaluasiKebutuhanRepository->create($input);

        Flash::success('Evaluasi Kebutuhan saved successfully.');

        return redirect(route('evaluasiKebutuhans.index'));
    }

    /**
     * Display the specified EvaluasiKebutuhan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evaluasiKebutuhan = $this->evaluasiKebutuhanRepository->find($id);

        if (empty($evaluasiKebutuhan)) {
            Flash::error('Evaluasi Kebutuhan not found');

            return redirect(route('evaluasiKebutuhans.index'));
        }

        return view('evaluasi_kebutuhans.show')->with('evaluasiKebutuhan', $evaluasiKebutuhan);
    }

    /**
     * Show the form for editing the specified EvaluasiKebutuhan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evaluasiKebutuhan = $this->evaluasiKebutuhanRepository->find($id);

        if (empty($evaluasiKebutuhan)) {
            Flash::error('Evaluasi Kebutuhan not found');

            return redirect(route('evaluasiKebutuhans.index'));
        }

        if (Auth::user()->role == 'Admin') {
            $pemdas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->get();
        } else {
            $pemdas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk)->where('jenis_penugasan', 'Evaluasi')->get();
        }

        return view('evaluasi_kebutuhans.edit')->with([
            'evaluasiKebutuhan' => $evaluasiKebutuhan,
            'pemdas' => $pemdas,
        ]);
    }

    /**
     * Update the specified EvaluasiKebutuhan in storage.
     *
     * @param int $id
     * @param UpdateEvaluasiKebutuhanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvaluasiKebutuhanRequest $request)
    {
        $evaluasiKebutuhan = $this->evaluasiKebutuhanRepository->find($id);

        if (empty($evaluasiKebutuhan)) {
            Flash::error('Evaluasi Kebutuhan not found');

            return redirect(route('evaluasiKebutuhans.index'));
        }

        $requestData = $request->all();
        $requestData['kode_pwk'] = DaftarPemda::where('nama_pemda', $request->nama_pemda)->first()->kode_pwk;

        $evaluasiKebutuhan = $this->evaluasiKebutuhanRepository->update($requestData, $id);

        Flash::success('Evaluasi Kebutuhan updated successfully.');

        return redirect(route('evaluasiKebutuhans.index'));
    }

    /**
     * Remove the specified EvaluasiKebutuhan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evaluasiKebutuhan = $this->evaluasiKebutuhanRepository->find($id);

        if (empty($evaluasiKebutuhan)) {
            Flash::error('Evaluasi Kebutuhan not found');

            return redirect(route('evaluasiKebutuhans.index'));
        }

        $this->evaluasiKebutuhanRepository->delete($id);

        Flash::success('Evaluasi Kebutuhan deleted successfully.');

        return redirect(route('evaluasiKebutuhans.index'));
    }
}
