<?php

namespace App\Http\Controllers;

use App\Repositories\EvaluasiIndikatorRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\SuratTugas;
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
        $this->evaluasiIndikatorRepository = $evaluasiIndikatorRepo;
    }

    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->orderBy('kode_pwk')->orderBy('nama_pemda')->get();
        } else {
            $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->where('kode_pwk', Auth::user()->kode_pwk)->orderBy('nama_pemda')->get();
        }

        return view('exports.index')
            ->with('suratTugas', $suratTugas);
    }

    public function progres()
    {
        $suratTugas = SuratTugas::where('jenis_tkd', session('jenis_tkd'))->orderBy('nama_pemda')->orderBy('kode_pwk')
        ->withCount(['apbd as belum_apbd' => function ($query) {
            $query->where('belanja_pegawai', '=', 0);
        }])
        ->withCount(['alokasi as belum_alokasi' => function ($query) {
            $query->whereNull('alokasi_tkd')->where('jenis_tkd', session('jenis_tkd'));
        }])
        ->withCount(['penyaluran as belum_penyaluran' => function ($query) {
            $query->whereNull('penyaluran_tkd')->where('jenis_tkd', session('jenis_tkd'));
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
}
