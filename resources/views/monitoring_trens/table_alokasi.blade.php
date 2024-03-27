<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="monitoringAlokasis-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>Earmarked/Non Earmarked</th>
                <th>Bidang TKD</th>
                <th>Alokasi TKD</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringAlokasis->count() > 0)
            @foreach($monitoringAlokasis as $monitoringAlokasi)
            <tr>
                <td>{{ $monitoringAlokasi->tipe_tkd }}</td>
                <td>{{ $monitoringAlokasi->bidang_tkd }}</td>
                <td class="text-right">{{ number_format($monitoringAlokasi->alokasi_tkd, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3" class="text-center">Tidak ada alokasi</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>