<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="silpaOtsuses-table">
        <thead class="table-info">
            <tr>
                <th rowspan="2" width="50">Nama Pemda</th>
                <th rowspan="2" width="150">Nama Pemda</th>
                <th rowspan="2" width="100">Tahun</th>
                <th rowspan="2" width="150">Jenis Tkd</th>
                <th rowspan="2" width="200">Nilai Silpa</th>
                <th colspan="3">Dianggarkan kembali TA Berikutnya</th>
                <th rowspan="2" width="200">Tidak Dianggarkan</th>
                <th rowspan="2" width="50">Aksi</th>
            </tr>
            <tr>
                <th width="200">Dianggarkan Relevan</th>
                <th width="200">Dianggarkan Tidak Relevan</th>
                <th width="200">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @if ($silpaOtsuses->count() > 0)
            @foreach($silpaOtsuses as $silpaOtsus)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $silpaOtsus->nama_pemda }}</td>
                <td>{{ $silpaOtsus->tahun }}</td>
                <td>{{ $silpaOtsus->jenis_tkd }}</td>
                <td class="text-end">{{ number_format($silpaOtsus->nilai_silpa, 2, ',', '.') }}</td>
                <td class="text-end">{{ number_format($silpaOtsus->dianggarkan_relevan, 2, ',', '.') }}</td>
                <td class="text-end">{{ number_format($silpaOtsus->dianggarkan_tidak_relevan, 2, ',', '.') }}</td>
                <td class="text-end">{{ number_format($silpaOtsus->dianggarkan_relevan + $silpaOtsus->dianggarkan_tidak_relevan, 2, ',', '.') }}</td>
                <td class="text-end">{{ number_format($silpaOtsus->tidak_dianggarkan, 2, ',', '.') }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('silpaOtsuses.edit', [$silpaOtsus->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $silpaOtsuses])
        </div>
    </div>
</div>