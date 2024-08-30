@extends('layouts.app')

@push('page_title')
Dashboard
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ session('jenis_tkd') }}</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-6 col-5 text-right">
        <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
        <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Alokasi</h5>
                        <span class="h2 font-weight-bold mb-0">{{ number_format($totalAlokasis->sum('sum_alokasi') / 1000000000000,2,',','.') }} Triliun</span>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Dalam Tahun 2020-2024</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Penyaluran</h5>
                        <span class="h2 font-weight-bold mb-0">{{ number_format($totalPenyalurans->sum('sum_penyaluran') / 1000000000000,2,',','.') }} Triliun</span>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Dalam Tahun 2020-2024</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Penganggaran</h5>
                        <span class="h2 font-weight-bold mb-0">{{ number_format($totalPenggunaans->sum('sum_penganggaran') / 1000000000000,2,',','.') }} Triliun</span>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Dalam Tahun 2020-2024</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Penggunaan</h5>
                        <span class="h2 font-weight-bold mb-0">{{ number_format($totalPenggunaans->sum('sum_penggunaan') / 1000000000000,2,',','.') }} Triliun</span>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Dalam Tahun 2020-2024</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-8">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">Tren Pengelolaan {{ session('jenis_tkd') }}</h6>
                        <h5 class="h3 text-white mb-0">Dalam Milyar Rupiah</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="trenChart" class="chart-canvas"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted ls-1 mb-1">Rasio Ketergantungan (%)</h6>
                        <h5 class="h3 mb-0">TKD vs PAD</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="ketergantunganChart" class="chart-canvas" width="350" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-sm-10">
                        <h3 class="mb-0">Prioritas Penggunaan {{ session('jenis_tkd') }}</h3>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="{{ route('evaluasiRengars.index') }}" class="btn btn-sm btn-primary">Lihat Detil</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center text-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th width="100">Bidang</th>
                            <th width="100">Alokasi</th>
                            <th width="100">Penganggaran</th>
                            <th width="20">Proporsi (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($bidangTkds->count() > 0 )
                        @foreach ($bidangTkds as $bidangTkd)
                        <tr>
                            <th scope="row">
                                {{ $bidangTkd->bidang_tkd }}
                            </th>
                            <td class="text-right">
                                {{ number_format($totalAlokasis->where('bidang_tkd', $bidangTkd->bidang_tkd)->sum('alokasi_tkd'),2,',','.') }}
                            </td>
                            <td class="text-right">
                                {{ number_format($totalPenggunaans->where('bidang_tkd', $bidangTkd->bidang_tkd)->sum('anggaran_tkd'),2,',','.') }}
                            </td>
                            <td>
                                @if ($totalAlokasis->where('bidang_tkd', $bidangTkd->bidang_tkd)->sum('alokasi_tkd') > 0)
                                {{ number_format($totalPenggunaans->where('bidang_tkd', $bidangTkd->bidang_tkd)->sum('anggaran_tkd')/$totalAlokasis->where('bidang_tkd', $bidangTkd->bidang_tkd)->sum('alokasi_tkd')*100,2,',','.') }}
                                @else
                                0,00
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">Belum ada data</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-sm-10">
                        <h3 class="mb-0">Permasalahan Pelaksanaan</h3>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="{{ route('evaluasiKontraks.index') }}" class="btn btn-sm btn-primary">Detil</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center text-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th width="300">Uraian</th>
                            <th width="150">Nilai</th>
                            <th width="50">Jumlah Kejadian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                Kegagalan penyelesaian pekerjaan karena penyedia wanprestasi atau sebab lain
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah1'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah1', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Pembayaran atas pekerjaan yang tidak dilaksanakan
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah2'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah2', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Kekurangan volume pekerjaan
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah3'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah3', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Keterlambatan penyelesaian pekerjaan yang belum dipungut dendanya
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah4'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah4', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Kewajiban pajak/retribusi yang belum dipungut dan/atau disetor ke Kas Daerah/Negara
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah5'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah5', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Pelaksanaan pekerjaan tidak sesuai dengan spesifikasi teknis
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah6'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah6', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Kelebihan perhitungan volume RAB kontrak pada pelaksanaan kegiatan
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah7'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah7', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Permasalahan Lainnya
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('masalah8'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('masalah8', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-sm-10">
                        <h3 class="mb-0">Permasalahan Pemanfaatan</h3>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="{{ route('evaluasiKontraks.index') }}" class="btn btn-sm btn-primary">Detil</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center text-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th width="300">Uraian</th>
                            <th width="150">Nilai</th>
                            <th width="50">Jumlah Kejadian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                Fasilitas atau sarana pendukung belum tersedia
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat1'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat1', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Tidak didukung SDM yang mampu memanfaatkan hasil pekerjaan
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat2'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat2', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Hasil pekerjaan tidak sesuai dengan spesifikasi yang ditetapkan dalam kontrak
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat3'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat3', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Hasil pekerjaan tidak memenuhi kebutuhan yang diminta oleh pengguna
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat4'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat4', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Hasil pekerjaan masih dalam sengketa
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat5'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat5', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Hasil pekerjaan masih dalam masa pemeliharaan dan belum diserahterimakan (Final Hand Over)
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat6'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat6', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Kelalaian atau kesengajaan dari pelaksana pekerjaan/ pihak ketiga
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat7'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat7', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Lainnya
                            </th>
                            <td class="text-right">
                                {{ number_format($evaluasiKontraks->sum('manfaat8'),2,',','.') }}
                            </td>
                            <td>
                                {{ number_format($evaluasiKontraks->where('manfaat8', '>', '0')->count(),0,',','.') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('third_party_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@push('page_scripts')
<script>
    var ctx = document.getElementById('trenChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                    label: 'Alokasi',
                    data: [
                        {{ $totalAlokasis->where('tahun', '2020')->sum('sum_alokasi')/1000000000 }},
                        {{ $totalAlokasis->where('tahun', '2021')->sum('sum_alokasi')/1000000000 }},
                        {{ $totalAlokasis->where('tahun', '2022')->sum('sum_alokasi')/1000000000 }},
                        {{ $totalAlokasis->where('tahun', '2023')->sum('sum_alokasi')/1000000000 }},
                        {{ $totalAlokasis->where('tahun', '2024')->sum('sum_alokasi')/1000000000 }}
                    ],
                    backgroundColor: 'rgba(252, 75, 108, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    borderSkipped: false,
                },
                {
                    label: 'Penyaluran',
                    data: [
                        {{ $totalPenyalurans->where('tahun', '2020')->sum('sum_penyaluran')/1000000000 }},
                        {{ $totalPenyalurans->where('tahun', '2021')->sum('sum_penyaluran')/1000000000 }},
                        {{ $totalPenyalurans->where('tahun', '2022')->sum('sum_penyaluran')/1000000000 }},
                        {{ $totalPenyalurans->where('tahun', '2023')->sum('sum_penyaluran')/1000000000 }},
                        {{ $totalPenyalurans->where('tahun', '2024')->sum('sum_penyaluran')/1000000000 }}
                    ],
                    backgroundColor: 'rgba(30, 77, 183, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    borderSkipped: false,
                },
                {
                    label: 'Penganggaran',
                    data: [
                        {{ $totalPenggunaans->where('tahun', '2020')->sum('sum_penganggaran')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2021')->sum('sum_penganggaran')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2022')->sum('sum_penganggaran')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2023')->sum('sum_penganggaran')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2024')->sum('sum_penganggaran')/1000000000 }}
                    ],
                    backgroundColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    borderSkipped: false,
                },
                {
                    label: 'Penggunaan',
                    data: [
                        {{ $totalPenggunaans->where('tahun', '2020')->sum('sum_penggunaan')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2021')->sum('sum_penggunaan')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2022')->sum('sum_penggunaan')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2023')->sum('sum_penggunaan')/1000000000 }},
                        {{ $totalPenggunaans->where('tahun', '2024')->sum('sum_penggunaan')/1000000000 }}
                    ],
                    backgroundColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    borderSkipped: false,
                }
            ]
        },
        options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: 'white'  // Warna teks pada sumbu y
                        }
                    },
                    x: {
                        ticks: {
                            color: 'white'  // Warna teks pada sumbu x
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: 'white'  // Warna teks pada legenda
                        }
                    }
                }
            }
    });
</script>
<script>
    var ctx = document.getElementById('ketergantunganChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                    label: 'Rata-Rata Rasio Ketergantungan',
                    data: [
                        {{ $apbds->where('tahun', '2020')->sum('sum_pad') > 0 ? $totalAlokasis->where('tahun', '2020')->sum('sum_alokasi')/$apbds->where('tahun', '2020')->sum('sum_pad')*100 : '0' }},
                        {{ $apbds->where('tahun', '2021')->sum('sum_pad') > 0 ? $totalAlokasis->where('tahun', '2021')->sum('sum_alokasi')/$apbds->where('tahun', '2021')->sum('sum_pad')*100 : '0' }},
                        {{ $apbds->where('tahun', '2022')->sum('sum_pad') > 0 ? $totalAlokasis->where('tahun', '2022')->sum('sum_alokasi')/$apbds->where('tahun', '2022')->sum('sum_pad')*100 : '0' }},
                        {{ $apbds->where('tahun', '2023')->sum('sum_pad') > 0 ? $totalAlokasis->where('tahun', '2023')->sum('sum_alokasi')/$apbds->where('tahun', '2023')->sum('sum_pad')*100 : '0' }},
                        {{ $apbds->where('tahun', '2024')->sum('sum_pad') > 0 ? $totalAlokasis->where('tahun', '2024')->sum('sum_alokasi')/$apbds->where('tahun', '2024')->sum('sum_pad')*100 : '0' }}
                    ],
                    backgroundColor: 'rgba(252, 75, 108, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    borderSkipped: false,
                }
            ]
        },
        options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
    });
</script>
@endpush