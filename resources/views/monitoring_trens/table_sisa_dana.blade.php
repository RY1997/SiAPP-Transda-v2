<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringSisaTkds-table">
        <thead class="thead-light">
            <tr>
                <th style="min-width: 50px;">#</th>
                <th style="min-width: 100px;">Uraian</th>
                <th>Sisa Dana</th>
                <th>Dianggarkan Kembali Tahun Berikutnya</th>
                <th>Sisa Belum Dianggarkan Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringSisaTkds->count() > 0)
            @foreach($monitoringSisaTkds as $monitoringSisaTkd)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringSisaTkd->bidang_tkd }}</td>
                <td class="text-right">{{ number_format($monitoringSisaTkd->total_sisa_dana_tkd, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringSisaTkd->total_dianggarkan_kembali, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringSisaTkd->total_tidak_dianggarkan_kembali, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringSisaTkds.edit', [$monitoringSisaTkd->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>