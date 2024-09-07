<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringPenggunaans-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2" style="min-width: 100px;">Uraian</th>
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
                @if (session('jenis_tkd') == 'Dana Bagi Hasil')
                <td>{{ $monitoringPenggunaan->tipe_tkd }}</td>
                <!-- <td>Alokasi</td> -->
                <td class="text-right">{{ number_format($totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('anggaran_barjas') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('anggaran_pegawai') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('anggaran_modal') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('anggaran_hibah') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('anggaran_lainnya') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('anggaran_na'), 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('realisasi_barjas') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('realisasi_pegawai') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('realisasi_modal') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('realisasi_hibah') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('realisasi_lainnya') + $totalPenggunaan->where('tipe_tkd', $monitoringPenggunaan->tipe_tkd)->sum('realisasi_na'), 2, ',', '.') }}</td>
                <!-- <td>{{ $monitoringPenggunaan->penyebab_kurang_guna }}</td> -->
                @else
                <td>{{ $monitoringPenggunaan->bidang_tkd }}</td>
                <!-- <td>Alokasi</td> -->
                <td class="text-right">{{ number_format($totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('anggaran_barjas') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('anggaran_pegawai') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('anggaran_modal') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('anggaran_hibah') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('anggaran_lainnya') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('anggaran_na'), 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('realisasi_barjas') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('realisasi_pegawai') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('realisasi_modal') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('realisasi_hibah') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('realisasi_lainnya') + $totalPenggunaan->where('bidang_tkd', $monitoringPenggunaan->bidang_tkd)->sum('realisasi_na'), 2, ',', '.') }}</td>
                <!-- <td>{{ $monitoringPenggunaan->penyebab_kurang_guna }}</td> -->
                @endif
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiPenggunaans.edit', [$monitoringPenggunaan->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>