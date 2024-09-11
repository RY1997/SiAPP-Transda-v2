<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringAlokasis-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 100px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th colspan="4">Pengelolaan TKD</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th style="min-width: 200px;">Alokasi</th>
                <th style="min-width: 200px;">Penyaluran</th>
                <th style="min-width: 200px;">Penganggaran</th>
                <th style="min-width: 200px;">Penggunaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringTrens as $monitoringTren)
            <tr>
                @if ($monitoringTren->tahun == 2020)
                <td rowspan="5">{{ ceil($loop->iteration / 5 + ($page > 0 ? ($page - 1) : 0) * 5) }}</td>
                <td rowspan="5">{{ $monitoringTren->nama_pemda }}</td>
                @endif
                <td>{{ $monitoringTren->tahun }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_alokasi, 2, ',', '.') }}</td>
                @php
                $totalPenyaluranTKD = App\Models\MonitoringPenyaluran::where('jenis_tkd', session('jenis_tkd'))
                ->where('tahun', $monitoringTren->tahun)
                ->sum('penyaluran_tkd');
                @endphp
                <td class="text-right">{{ number_format($totalPenyaluranTKD, 2, ',', '.') }}</td>
                @php
                $totalAnggaranTKD = App\Models\MonitoringPenggunaan::where('jenis_tkd', session('jenis_tkd'))
                ->where('tahun', $monitoringTren->tahun)->selectRaw('SUM(anggaran_barjas + anggaran_pegawai + anggaran_modal + anggaran_hibah + anggaran_lainnya + anggaran_na) as total_anggaran')
                ->groupBy('nama_pemda')->pluck('total_anggaran')->first();
                @endphp
                <td class="text-right">{{ number_format($totalAnggaranTKD, 2, ',', '.') }}</td>
                @php
                $totalRealisasiTKD = App\Models\MonitoringPenggunaan::where('jenis_tkd', session('jenis_tkd'))
                ->where('tahun', $monitoringTren->tahun)->selectRaw('SUM(realisasi_barjas + realisasi_pegawai + realisasi_modal + realisasi_hibah + realisasi_lainnya + realisasi_na) as total_realisasi')
                ->groupBy('nama_pemda')->pluck('total_realisasi')->first();
                @endphp
                <td class="text-right">{{ number_format($totalRealisasiTKD, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringTrens.show', $monitoringTren->id) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $monitoringTrens])
        </div>
    </div>
</div>