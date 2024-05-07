<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitoringTlRequest;
use App\Http\Requests\UpdateMonitoringTlRequest;
use App\Repositories\MonitoringTlRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\MonitoringTl;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class MonitoringTlController extends AppBaseController
{
    /** @var MonitoringTlRepository $monitoringTlRepository*/
    private $monitoringTlRepository;

    public function __construct(MonitoringTlRepository $monitoringTlRepo)
    {
        $this->monitoringTlRepository = $monitoringTlRepo;
    }

    /**
     * Display a listing of the MonitoringTl.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('jenis_tkd', session('jenis_tkd'))->get();
        } else {
            $suratTugas = SuratTugas::where('jenis_penugasan', 'Evaluasi')->where('jenis_tkd', session('jenis_tkd'))->where('kode_pwk', Auth::user()->kode_pwk)->get();
        }

        if (session('jenis_tkd') == 'Dana Otonomi Khusus') {
            $permasalahan = [
                ['permasalahan' => 'Realisasi Penyaluran Tidak 100%'],
                ['permasalahan' => 'Realisasi Penggunaan Tidak 100%'],
                ['permasalahan' => 'Kegiatan yang tidak dilaksanakan/tidak selesai/terlambat'],
                ['permasalahan' => 'Kegiatan yang tidak relevan'],
                ['permasalahan' => 'Keterlambatan Penetapan Alokasi Dana Otsus'],
                ['permasalahan' => 'Alokasi Dana Otsus tidak sesuai dengan perhitungan parameter yang tepat dan data dasar yang up to date'],
            ];
        }

        foreach ($permasalahan as $item) {
            foreach ($suratTugas as $st) {
                MonitoringTl::updateOrCreate([
                    'kode_pwk' => $st->kode_pwk,
                    'tahun' => $st->tahun_penugasan,
                    'nama_pemda' => $st->nama_pemda,
                    'jenis_tkd' => session('jenis_tkd'),
                    'kelompok_permasalahan' => $item['permasalahan']
                ]);
            }
        }

        if (Auth::user()->role == 'Admin') {
            $monitoringTls = MonitoringTl::query();
        } else {
            $monitoringTls = MonitoringTl::where('kode_pwk', Auth::user()->kode_pwk);
        }

        $monitoringTls = $monitoringTls->has('st')->where('jenis_tkd', session('jenis_tkd'))->orderBy('nama_pemda')->orderBy('tahun')->paginate(20);

        return view('monitoring_tls.index')
            ->with('monitoringTls', $monitoringTls);
    }

    /**
     * Show the form for creating a new MonitoringTl.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_tls.create');
    }

    /**
     * Store a newly created MonitoringTl in storage.
     *
     * @param CreateMonitoringTlRequest $request
     *
     * @return Response
     */
    public function store(CreateMonitoringTlRequest $request)
    {
        $input = $request->all();

        $monitoringTl = $this->monitoringTlRepository->create($input);

        Flash::success('Monitoring Tl saved successfully.');

        return redirect(route('monitoringTls.index'));
    }

    /**
     * Display the specified MonitoringTl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        return view('monitoring_tls.show')->with('monitoringTl', $monitoringTl);
    }

    /**
     * Show the form for editing the specified MonitoringTl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        return view('monitoring_tls.edit')->with('monitoringTl', $monitoringTl);
    }

    /**
     * Update the specified MonitoringTl in storage.
     *
     * @param int $id
     * @param UpdateMonitoringTlRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonitoringTlRequest $request)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        $monitoringTl = $this->monitoringTlRepository->update($request->all(), $id);

        Flash::success('Monitoring Tl updated successfully.');

        return redirect(route('monitoringTls.index'));
    }

    /**
     * Remove the specified MonitoringTl from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoringTl = $this->monitoringTlRepository->find($id);

        if (empty($monitoringTl)) {
            Flash::error('Monitoring Tl not found');

            return redirect(route('monitoringTls.index'));
        }

        $this->monitoringTlRepository->delete($id);

        Flash::success('Monitoring Tl deleted successfully.');

        return redirect(route('monitoringTls.index'));
    }
}
