<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="monitoringAlokasis-table">
        <thead class="table-info">
            <tr>
                <th>Earmarked/Non Earmarked</th>
                <th>Bidang TKD</th>
                <th>Alokasi TKD</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringAlokasis->count() > 0)
            @foreach($monitoringAlokasis as $monitoringAlokasi)
            <tr>
                <td>{{ $monitoringAlokasi->tipe_tkd }}</td>
                <td>{{ $monitoringAlokasi->bidang_tkd }}</td>
                <td class="text-end">{{ number_format($monitoringAlokasi->alokasi_tkd, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringAlokasis.edit', [$monitoringAlokasi->id]) }}" class='btn btn-warning btn-xs'>
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
        </tbody>
    </table>
</div>