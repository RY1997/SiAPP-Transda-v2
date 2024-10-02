<?php

namespace App\Http\Controllers;

use App\Repositories\EvaluasiIndikatorRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DaftarPemda;
use App\Models\DataUmumTkd;
use App\Models\MonitoringAlokasi;
use App\Models\MonitoringApbd;
use App\Models\MonitoringHibah;
use App\Models\MonitoringImmediateOutcome;
use App\Models\MonitoringPenggunaan;
use App\Models\MonitoringPenyaluran;
use App\Models\MonitoringSisaTkd;
use App\Models\SuratTugas;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Response;

class ExportController extends AppBaseController
{
    /** @var EvaluasiIndikatorRepository $evaluasiIndikatorRepository*/
    private $evaluasiIndikatorRepository;

    public function __construct(EvaluasiIndikatorRepository $evaluasiIndikatorRepo)
    {
        $this->middleware('auth');
        $this->evaluasiIndikatorRepository = $evaluasiIndikatorRepo;
    }

    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $suratTugas = SuratTugas::where('nama_pemda', 'like', '%' . $request->nama_pemda . '%')->orderBy('kode_pwk')->orderBy('nama_pemda')->paginate(20);
        } else {
            $suratTugas = SuratTugas::where('kode_pwk', Auth::user()->kode_pwk)->where('nama_pemda', 'like', '%' . $request->nama_pemda . '%')->orderBy('kode_pwk')->orderBy('nama_pemda')->paginate(20);
        }

        return view('exports.index')
            ->with([
                'suratTugas' => $suratTugas,
                'nama_pemda' => $request->nama_pemda,
            ]);
    }

    public function progres()
    {
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->orderBy('kode_pwk')->orderBy('nama_pemda', 'DESC')->orderBy('jenis_penugasan', 'DESC')
            ->withCount(['apbd as belum_apbd' => function ($query) {
                $query->where('belanja_pegawai', '=', 0);
            }])
            ->withCount(['alokasi as belum_alokasi' => function ($query) {
                $query->where('alokasi_tkd', '=', 0)->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['penyaluran as belum_penyaluran' => function ($query) {
                $query->where('penyaluran_tkd', '=', 0)->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['penggunaan as belum_penggunaan' => function ($query) {
                $query->whereNull('realisasi_tkd')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['penetapan as belum_penetapan' => function ($query) {
                $query->whereNull('simpulan_penetapan')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['penetapan as jml_penetapan' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['jakda as belum_jakda' => function ($query) {
                $query->whereNull('simpulan_tl')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['jakda as jml_jakda' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['rengar as belum_relevan' => function ($query) {
                $query->whereNull('relevansi_subkegiatan')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['rengar as jml_relevan' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['ripp as belum_ripp' => function ($query) {
                $query->whereNull('uraian_ripp')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['ripp as jml_ripp' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['rengar as belum_urusan' => function ($query) {
                $query->whereNull('urusan_subkegiatan')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['rengar as jml_urusan' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['kontrak as jml_kontrak' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['silpa as belum_silpa' => function ($query) {
                $query->whereNull('dianggarkan_relevan')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['silpa as jml_silpa' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['efektivitas as belum_efektivitas' => function ($query) {
                $query->whereNull('realisasi')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['efektivitas as jml_efektivitas' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['pelaporan as belum_pelaporan' => function ($query) {
                $query->whereNull('keberadaan_laporan')->where('jenis_tkd', session('jenis_tkd'));
            }])
            ->withCount(['pelaporan as jml_pelaporan' => function ($query) {
                $query->where('jenis_tkd', session('jenis_tkd'));
            }])->get();

        if (session('jenis_tkd') == 'Dana Otonomi Khusus') {
            $templatePath = 'Template Otsus/Template Progres Isian.xlsx';

            // Baca template
            $spreadsheet = IOFactory::load($templatePath);

            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A2', 'Per ' . now()->format('d M Y H:i'));
            $sheet->setCellValue('C4', ': Dana Otonomi Khusus');

            $rowIndex = 8;

            foreach ($suratTugas as $st) {
                $sheet->setCellValue('A' . $rowIndex, $rowIndex - 7);
                $sheet->setCellValue('B' . $rowIndex, $st->kode_pwk);
                $sheet->setCellValue('C' . $rowIndex, $st->pwk->name);
                $sheet->setCellValue('D' . $rowIndex, $st->nama_pemda);
                $sheet->setCellValue('E' . $rowIndex, $st->no_st);
                $sheet->setCellValue('F' . $rowIndex, $st->laporan->file_laporan != NULL ? 'SUDAH' : 'BELUM');
                if ($st->jenis_penugasan == 'Monitoring') {
                    $sheet->setCellValue('G' . $rowIndex, $st->belum_apbd > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('H' . $rowIndex, $st->belum_alokasi > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('I' . $rowIndex, $st->belum_penyaluran > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('J' . $rowIndex, $st->belum_penggunaan > 0 ? 'BELUM' : 'SUDAH');
                } elseif ($st->jenis_penugasan == 'Evaluasi') {
                    $sheet->setCellValue('K' . $rowIndex, $st->jml_penetapan = 0 || $st->belum_penetapan > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('L' . $rowIndex, $st->jml_jakda = 0 || $st->belum_jakda > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('M' . $rowIndex, $st->jml_relevan = 0 || $st->belum_relevan > 0 ? 'BELUM' : 'SUDAH');
                    if ($st->kode_pwk == 'PW26' || $st->kode_pwk == 'PW27') {
                        $sheet->setCellValue('N' . $rowIndex, $st->jml_ripp = 0 || $st->belum_ripp > 0 ? 'BELUM' : 'SUDAH');
                    }
                    $sheet->setCellValue('O' . $rowIndex, $st->jml_urusan = 0 || $st->belum_urusan > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('P' . $rowIndex, $st->jml_kontrak > 0 ? 'SUDAH' : 'BELUM');
                    $sheet->setCellValue('Q' . $rowIndex, $st->jml_silpa = 0 || $st->belum_silpa > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('R' . $rowIndex, $st->jml_efektivitas = 0 || $st->belum_efektivitas > 0 ? 'BELUM' : 'SUDAH');
                    $sheet->setCellValue('S' . $rowIndex, $st->jml_pelaporan = 0 || $st->belum_pelaporan > 0 ? 'BELUM' : 'SUDAH');
                }
                $rowIndex++;
            }

            $excelFilePath = 'exports/Progres Pengisian per ' . now()->format('d M Y H:i') . '.xlsx';

            // Save as Excel file
            $excelWriter = new Xlsx($spreadsheet);
            $excelWriter->save($excelFilePath);

            return response()->download($excelFilePath)->deleteFileAfterSend(true);
        }
    }

    public function progresST()
    {
        $users = User::where('kode_pwk', 'like', '%PW%')->orderBy('kode_pwk')->get();

        $templatePath = 'templates/Monitoring ST.xlsx';

        // Baca template
        $spreadsheet = IOFactory::load($templatePath);

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A4', 'Per ' . now()->format('d M Y H:i'));

        $rowIndex = 7;

        foreach ($users as $pwk) {
            $sheet->setCellValue('B' . $rowIndex, $pwk->kode_pwk);
            $sheet->setCellValue('C' . $rowIndex, $pwk->name);
            $sheet->setCellValue('D' . $rowIndex, SuratTugas::where('kode_pwk', $pwk->kode_pwk)->where('jenis_penugasan', 'Monitoring')->count());
            $sheet->setCellValue('E' . $rowIndex, SuratTugas::where('kode_pwk', $pwk->kode_pwk)->where('jenis_penugasan', 'Evaluasi')->where('jenis_tkd', 'Dana Alokasi Umum')->count());
            $sheet->setCellValue('F' . $rowIndex, SuratTugas::where('kode_pwk', $pwk->kode_pwk)->where('jenis_penugasan', 'Evaluasi')->where('jenis_tkd', 'Dana Bagi Hasil')->count());
            $sheet->setCellValue('G' . $rowIndex, SuratTugas::where('kode_pwk', $pwk->kode_pwk)->where('jenis_penugasan', 'Evaluasi')->where('jenis_tkd', 'Dana Alokasi Khusus')->count());
            $rowIndex++;
        }

        $excelFilePath = 'exports/Progres ST per ' . now()->format('d M Y H:i') . '.xlsx';

        // Save as Excel file
        $excelWriter = new Xlsx($spreadsheet);
        $excelWriter->save($excelFilePath);

        return response()->download($excelFilePath)->deleteFileAfterSend(true);
    }

    public function progresMonitoring()
    {
        $templatePath = 'templates/Progres Monitoring.xlsx';

        // Baca template
        $spreadsheet = IOFactory::load($templatePath);

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('C3', 'Per ' . now()->format('d M Y H:i'));

        $rowIndex = 9;

        $users = User::where('kode_pwk', 'like', '%PW%')->orderBy('kode_pwk')->get();

        foreach ($users as $pwk) {
            $sheet->setCellValue('B' . $rowIndex, $pwk->kode_pwk);
            $sheet->setCellValue('C' . $rowIndex, $pwk->name);
            $sheet->setCellValue('D' . $rowIndex, DaftarPemda::where('kode_pwk', $pwk->kode_pwk)->count());
            $sheet->setCellValue('F' . $rowIndex, MonitoringApbd::where('kode_pwk', $pwk->kode_pwk)
                ->where(function ($q) {
                    $q->where('belanja_barjas', '>', 0)
                        ->where('belanja_pegawai', '>', 0)
                        ->where('belanja_modal', '>', 0)
                        ->where('belanja_hibah', '>', 0)
                        ->where('belanja_lainnya', '>', 0)
                        ->where('belanja_modal_jalan', '>', 0)
                        ->where('belanja_pendidikan', '>', 0)
                        ->where('belanja_kesehatan', '>', 0)
                        ->where('pendapatan_pad', '>', 0)
                        ->where('pendapatan_transfer', '>', 0)
                        ->where('pendapatan_lainnya', '>', 0)
                        ->where('rbelanja_barjas', '>', 0)
                        ->where('rbelanja_pegawai', '>', 0)
                        ->where('rbelanja_modal', '>', 0)
                        ->where('rbelanja_hibah', '>', 0)
                        ->where('rbelanja_lainnya', '>', 0)
                        ->where('rbelanja_modal_jalan', '>', 0)
                        ->where('rbelanja_pendidikan', '>', 0)
                        ->where('rbelanja_kesehatan', '>', 0)
                        ->where('rpendapatan_pad', '>', 0)
                        ->where('rpendapatan_transfer', '>', 0)
                        ->where('rpendapatan_lainnya', '>', 0);
                })->count() / 5);
            $sheet->setCellValue('H' . $rowIndex, DataUmumTkd::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Umum')->where(function ($q) {
                $q->where('alokasi_tkd', '>', 0)
                    ->where('penyaluran_tkd', '>', 0)
                    ->where('penganggaran_tkd', '>', 0)
                    ->where('penggunaan_tkd', '>', 0);
            })->groupBy(['tahun', 'nama_pemda'])->count() / 5);
            $sheet->setCellValue('J' . $rowIndex, (MonitoringAlokasi::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Umum')
                ->where('alokasi_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenyaluran::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Umum')
                ->where('penyaluran_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenggunaan::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Umum')
                ->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
                ->groupBy(['tahun', 'nama_pemda'])
                ->havingRaw('total_anggaran != 0 AND total_realisasi != 0')->count()) / 15);
            $sheet->setCellValue('L' . $rowIndex, DataUmumTkd::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Bagi Hasil')->where(function ($q) {
                $q->where('alokasi_tkd', '>', 0)
                    ->where('penyaluran_tkd', '>', 0)
                    ->where('penganggaran_tkd', '>', 0)
                    ->where('penggunaan_tkd', '>', 0);
            })->groupBy(['tahun', 'nama_pemda'])->count() / 5);
            $sheet->setCellValue('N' . $rowIndex, (MonitoringAlokasi::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Bagi Hasil')
                ->where('alokasi_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenyaluran::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Bagi Hasil')
                ->where('penyaluran_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenggunaan::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Bagi Hasil')
                ->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
                ->groupBy(['tahun', 'nama_pemda'])
                ->havingRaw('total_anggaran != 0 AND total_realisasi != 0')->count()) / 15);
            $sheet->setCellValue('P' . $rowIndex, DataUmumTkd::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Khusus')->where(function ($q) {
                $q->where('alokasi_tkd', '>', 0)
                    ->where('penyaluran_tkd', '>', 0)
                    ->where('penganggaran_tkd', '>', 0)
                    ->where('penggunaan_tkd', '>', 0);
            })->groupBy(['tahun', 'nama_pemda'])->count() / 5);
            $sheet->setCellValue('R' . $rowIndex, (MonitoringAlokasi::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Khusus')
                ->where('alokasi_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenyaluran::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Khusus')
                ->where('penyaluran_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenggunaan::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Alokasi Khusus')
                ->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
                ->groupBy(['tahun', 'nama_pemda'])
                ->havingRaw('total_anggaran != 0 AND total_realisasi != 0')->count()) / 15);
            $sheet->setCellValue('T' . $rowIndex, MonitoringSisaTkd::where('kode_pwk', $pwk->kode_pwk)
                ->selectRaw('*, SUM(sisa_dana_tkd - dianggarkan_kembali) as total_sisa_dana')->groupBy(['tahun', 'nama_pemda'])->havingRaw('total_sisa_dana != 0')->count() / 15);
            $sheet->setCellValue('V' . $rowIndex, MonitoringImmediateOutcome::where('kode_pwk', $pwk->kode_pwk)
                ->whereNotNull('keberadaan_io')->groupBy(['tahun', 'nama_pemda'])->count() / 5);
            $sheet->setCellValue('X' . $rowIndex, DaftarPemda::where('kode_pwk', $pwk->kode_pwk)->count());
            $sheet->setCellValue('Z' . $rowIndex, DataUmumTkd::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Otonomi Khusus')->where(function ($q) {
                $q->where('alokasi_tkd', '>', 0)
                    ->where('penyaluran_tkd', '>', 0)
                    ->where('penganggaran_tkd', '>', 0)
                    ->where('penggunaan_tkd', '>', 0);
            })->groupBy(['tahun', 'nama_pemda'])->count() / 5);
            $sheet->setCellValue('AB' . $rowIndex, (MonitoringAlokasi::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Otonomi Khusus')
                ->where('alokasi_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenyaluran::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Otonomi Khusus')
                ->where('penyaluran_tkd', '>', 0)->groupBy(['tahun', 'nama_pemda'])->count() + MonitoringPenggunaan::where('kode_pwk', $pwk->kode_pwk)->where('jenis_tkd', 'Dana Otonomi Khusus')
                ->selectRaw('*, SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran, SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
                ->groupBy(['tahun', 'nama_pemda'])
                ->havingRaw('total_anggaran != 0 AND total_realisasi != 0')->count()) / 15);
            $sheet->setCellValue('AD' . $rowIndex, DaftarPemda::where('kode_pwk', $pwk->kode_pwk)->count());
            $rowIndex++;
        }

        // Gunakan StreamedResponse untuk streaming Excel ke browser
        return response()->streamDownload(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');  // Menulis langsung ke output
        }, 'Progres Monitoring per ' . now()->format('d M Y H:i') . '.xlsx');
    }

    public function evaDataUmum(Request $request)
    {
        $templatePath = 'templates/Evaluasi Data Umum.xlsx';

        // Baca template
        $spreadsheet = IOFactory::load($templatePath);

        $sheet = $spreadsheet->getActiveSheet();

        $st = SuratTugas::find($request->id_st);
        $pemda = DaftarPemda::where('nama_pemda', $st->nama_pemda)->first();

        $sheet->setCellValue('C2', 'Perwakilan BPKP Provinsi ' . $pemda->nama_provinsi);

        $rowIndex = 10;

        // Streaming data dari DB dengan chunking
        $dataUmumTkds = DataUmumTkd::select('kode_pwk', 'nama_pemda', 'jenis_tkd', 'bidang_tkd', 'subbidang_tkd', 'tahun', 'alokasi_tkd', 'penyaluran_tkd', 'penganggaran_tkd', 'penggunaan_tkd')
            ->where('kode_pwk', $st->kode_pwk)
            ->where('nama_pemda', $st->nama_pemda)
            ->where('jenis_tkd', $st->jenis_tkd)
            ->cursor();

        foreach ($dataUmumTkds as $dataUmumTkd) {
            $sheet->setCellValue('A' . $rowIndex, $rowIndex - 9);
            $sheet->setCellValue('B' . $rowIndex, $dataUmumTkd->kode_pwk);
            $sheet->setCellValue('C' . $rowIndex, $dataUmumTkd->nama_pemda);
            $sheet->setCellValue('D' . $rowIndex, $dataUmumTkd->jenis_tkd);
            $sheet->setCellValue('E' . $rowIndex, $dataUmumTkd->bidang_tkd);
            $sheet->setCellValue('F' . $rowIndex, $dataUmumTkd->subbidang_tkd);
            $sheet->setCellValue('G' . $rowIndex, $dataUmumTkd->tahun);
            $sheet->setCellValue('H' . $rowIndex, $dataUmumTkd->alokasi_tkd);
            $sheet->setCellValue('I' . $rowIndex, $dataUmumTkd->penyaluran_tkd);
            $sheet->setCellValue('J' . $rowIndex, $dataUmumTkd->alokasi_tkd > 0 ? ($dataUmumTkd->penyaluran_tkd / $dataUmumTkd->alokasi_tkd) : '0');
            $sheet->setCellValue('K' . $rowIndex, $dataUmumTkd->penganggaran_tkd);
            $sheet->setCellValue('L' . $rowIndex, $dataUmumTkd->penggunaan_tkd);
            $sheet->setCellValue('M' . $rowIndex, $dataUmumTkd->penganggaran_tkd > 0 ? ($dataUmumTkd->penggunaan_tkd / $dataUmumTkd->penganggaran_tkd) : '0');
            $rowIndex++;
        }

        // Streaming Excel output agar tidak menumpuk semua data di memori
        return response()->streamDownload(function () use ($spreadsheet) {
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save('php://output');  // Streaming langsung ke output, tidak disimpan di memori
        }, 'Evaluasi Data Umum ' . (!empty($st) ? $st->jenis_tkd . ' - ' . $st->nama_pemda : 'Data Nasional') . '.xlsx');
    }

    public function evaAlokasi(Request $request)
    {
        $templatePath = 'templates/Evaluasi Alokasi.xlsx';

        // Baca template
        $spreadsheet = IOFactory::load($templatePath);

        $sheet = $spreadsheet->getActiveSheet();

        $st = SuratTugas::find($request->id_st);
        $pemda = DaftarPemda::where('nama_pemda', $st->nama_pemda)->first();

        $sheet->setCellValue('C2', 'Perwakilan BPKP Provinsi ' . $pemda->nama_provinsi);

        $rowIndex = 10;

        // Streaming data dari DB dengan chunking
        MonitoringAlokasi::where('kode_pwk', $st->kode_pwk)
            ->where('nama_pemda', $st->nama_pemda)
            ->where('jenis_tkd', $st->jenis_tkd)
            ->chunk(100, function ($monitoringAlokasis) use ($sheet, &$rowIndex) {
                foreach ($monitoringAlokasis as $monitoringAlokasi) {
                    $sheet->setCellValue('A' . $rowIndex, $rowIndex - 8);
                    $sheet->setCellValue('B' . $rowIndex, $monitoringAlokasi->kode_pwk);
                    $sheet->setCellValue('C' . $rowIndex, $monitoringAlokasi->nama_pemda);
                    $sheet->setCellValue('D' . $rowIndex, $monitoringAlokasi->jenis_tkd);
                    $sheet->setCellValue('E' . $rowIndex, $monitoringAlokasi->bidang_tkd);
                    $sheet->setCellValue('F' . $rowIndex, $monitoringAlokasi->subbidang_tkd);
                    $sheet->setCellValue('G' . $rowIndex, $monitoringAlokasi->tahun);
                    $sheet->setCellValue('H' . $rowIndex, $monitoringAlokasi->rk_usulan);
                    $sheet->setCellValue('I' . $rowIndex, $monitoringAlokasi->rk_disetujui);
                    $sheet->setCellValue('J' . $rowIndex, $monitoringAlokasi->tgl_juknis);
                    $sheet->setCellValue('K' . $rowIndex, $monitoringAlokasi->alokasi_tkd);
                    $rowIndex++;
                }
            });

        // Streaming Excel output agar tidak menumpuk semua data di memori
        return response()->streamDownload(function () use ($spreadsheet) {
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save('php://output');  // Streaming langsung ke output, tidak disimpan di memori
        }, 'exports/Evaluasi Alokasi ' . (!empty($st) ? $st->jenis_tkd . ' - ' . $st->nama_pemda : session('jenis_tkd') . ' - Data Nasional') . '.xlsx');
    }
}
