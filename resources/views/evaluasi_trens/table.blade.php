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
            @if ($suratTugas->count() > 0)
            @foreach($monitoringTrens as $monitoringTren)
            <tr>
                @if ($monitoringTren->tahun == 2023)
                <td rowspan="2">{{ ceil($loop->iteration / 2 + ($page > 0 ? ($page - 1) : 0) * 2) }}</td>
                <td rowspan="2">{{ $monitoringTren->nama_pemda }}</td>
                @endif
                <td>{{ $monitoringTren->tahun }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_alokasi, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_penyaluran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_anggaran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_realisasi, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiTrens.show', $monitoringTren->id) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="8">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $monitoringTrens])
        </div>
    </div>
</div>