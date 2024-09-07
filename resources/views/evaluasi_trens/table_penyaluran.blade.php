<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringPenyalurans-table">
        <thead class="thead-light">
            <tr>
                <th style="min-width: 50px;">#</th>
                <th style="min-width: 100px;">Uraian</th>
                <th style="min-width: 200px;">Nilai Penyaluran</th>
                <th style="min-width: 200px;">Nilai Potong/Tunda</th>
                <!-- <th rowspan="2" style="min-width: 100px;">Tanggal Penyaluran</th> -->
                <!-- <th colspan="2">Ketepatan Jumlah</th>
                <th colspan="2">Ketepatan Waktu</th> -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringPenyalurans->count() > 0)
            @foreach($monitoringPenyalurans as $monitoringPenyaluran)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringPenyaluran->subbidang_tkd }}</td>
                <td class="text-right">{{ number_format($monitoringPenyaluran->total_penyaluran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringPenyaluran->total_potong_salur + $monitoringPenyaluran->total_tunda_salur, 2, ',', '.') }}</td>
                <!-- <td>{{ $monitoringPenyaluran->tgl_salur }}</td> -->
                <!-- <td>{{ $monitoringPenyaluran->tepat_jumlah }}</td> -->
                <!-- <td>{{ $monitoringPenyaluran->penyebab_tidak_tepat_jumlah }}</td> -->
                <!-- <td>{{ $monitoringPenyaluran->tepat_waktu }}</td> -->
                <!-- <td>{{ $monitoringPenyaluran->penyebab_tidak_tepat_waktu }}</td> -->
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiPenyalurans.edit', [$monitoringPenyaluran->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>