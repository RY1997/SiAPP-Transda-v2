<div class="table-responsive">
    <table class="table table-bordered text-sm" id="silpaOtsuses-table">
        <thead class="table-info">
            <tr>
                <th rowspan="2" width="50">Nama Pemda</th>
                <th rowspan="2" width="150">Nama Pemda</th>
                <th rowspan="2" width="100">Tahun</th>
                <th rowspan="2" width="150">Jenis Tkd</th>
                <th rowspan="2" width="200">Nilai Silpa</th>
                <th colspan="3">Dianggarkan kembali TA Berikutnya</th>
                <th rowspan="2" width="200">Tidak Dianggarkan</th>
                <th rowspan="2" width="50">Action</th>
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
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $silpaOtsus->nama_pemda }}</td>
                <td class="text-center">{{ $silpaOtsus->tahun }}</td>
                <td>{{ $silpaOtsus->jenis_tkd }}</td>
                <td class="text-right">{{ number_format($silpaOtsus->nilai_silpa, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($silpaOtsus->dianggarkan_relevan, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($silpaOtsus->dianggarkan_tidak_relevan, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($silpaOtsus->dianggarkan_relevan + $silpaOtsus->dianggarkan_tidak_relevan, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($silpaOtsus->tidak_dianggarkan, 2, ',', '.') }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('silpaOtsuses.edit', [$silpaOtsus->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>