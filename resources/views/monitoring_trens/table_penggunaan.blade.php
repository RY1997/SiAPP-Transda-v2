<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringPenggunaans-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2" style="min-width: 50px;">#</th>
                <th rowspan="2" style="min-width: 100px;">Sifat</th>
                <th rowspan="2" style="min-width: 100px;">Bidang</th>
                <!-- <th rowspan="2" style="min-width: 100px;">Alokasi</th> -->
                <th colspan="2">Penggunaan TKD</th>
                <!-- <th rowspan="2" style="min-width: 250px;">Penyebab Realisasi Rendah</th> -->
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th style="min-width: 200px;">Anggaran</th>
                <th style="min-width: 200px;">Realisasi</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringPenggunaans->count() > 0)
            @foreach($monitoringPenggunaans as $monitoringPenggunaan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringPenggunaan->tipe_tkd }}</td>
                <td>{{ $monitoringPenggunaan->bidang_tkd }}</td>
                <!-- <td>Alokasi</td> -->
                <td class="text-right">{{ number_format($monitoringPenggunaan->total_anggaran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringPenggunaan->total_realisasi, 2, ',', '.') }}</td>
                <!-- <td>{{ $monitoringPenggunaan->penyebab_kurang_guna }}</td> -->
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringPenggunaans.edit', [$monitoringPenggunaan->id]) }}" class='btn btn-sm btn-warning'>
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