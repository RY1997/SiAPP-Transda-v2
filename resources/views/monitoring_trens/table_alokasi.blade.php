<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringAlokasis-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Uraian</th>
                <th>Alokasi TKD</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringAlokasis->count() > 0)
            @foreach($monitoringAlokasis as $monitoringAlokasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringAlokasi->bidang_tkd }}</td>
                <td class="text-right">{{ number_format($monitoringAlokasi->total_alokasi, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringAlokasis.edit', [$monitoringAlokasi->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4" class="text-center">Tidak ada alokasi</td>
            </tr>
            @endif
            <tr class="bg-light">
                <td colspan="2" class="text-center">Total Alokasi</td>
                <td class="text-right">{{ number_format($monitoringAlokasis->total_alokasi,2,',','.') }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>