<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringAlokasis-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Sifat</th>
                <th>Bidang</th>
                <th>Subbidang</th>
                @if (session('jenis_tkd') == 'Dana Alokasi Khusus')
                <th>RK Diusulkan</th>
                <th>RK Disetujui</th>
                @endif
                <th>Alokasi TKD</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringAlokasis as $monitoringAlokasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringAlokasi->tipe_tkd }}</td>
                <td>{{ $monitoringAlokasi->bidang_tkd }}</td>
                <td>{{ $monitoringAlokasi->subbidang_tkd }}</td>
                @if (session('jenis_tkd') == 'Dana Alokasi Khusus')
                <td class="text-right">{{ number_format($monitoringAlokasi->total_rk_usulan, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringAlokasi->total_rk_disetujui, 2, ',', '.') }}</td>
                @endif
                <td class="text-right">{{ number_format($monitoringAlokasi->total_alokasi, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiAlokasis.edit', [$monitoringAlokasi->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            <tr class="bg-light">
                <td colspan="4" class="text-center">Total</td>
                @if (session('jenis_tkd') == 'Dana Alokasi Khusus')
                <td class="text-right">{{ number_format($monitoringAlokasis->sum('total_rk_usulan'),2,',','.') }}</td>
                <td class="text-right">{{ number_format($monitoringAlokasis->sum('total_rk_disetujui'),2,',','.') }}</td>
                @endif
                <td class="text-right">{{ number_format($monitoringAlokasis->sum('total_alokasi'),2,',','.') }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>