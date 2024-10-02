<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiSisaDaks-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Nama Pemda</th>
                <th rowspan="2">Bidang DAK</th>
                <th colspan="3">Tahun 2023</th>
                <th rowspan="2">Sisa DAK Fisik Tahun Sebelumnya (sebelum tahun 2023) (Rp)</th>
                <th rowspan="2">Total Sisa Dana DAK Fisik sd 2023 (Rp)</th>
                <th colspan="3">Dianggarkan Tahun 2024</th>
                <th rowspan="2">Sisa Dana yang belum digunakan</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th>Penyaluran (Rp)</th>
                <th>Penggunaan (Rp)</th>
                <th>Sisa Dana 2023 (Rp)</th>
                <th>Bidang yang sama (Rp)</th>
                <th>Bidang Lainnya (Rp)</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiSisaDaks->count() > 0)
            @foreach($evaluasiSisaDaks as $evaluasiSisaDak)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiSisaDak->nama_pemda }}</td>
                <td>{{ $evaluasiSisaDak->bidang_tkd }}</td>
                <td>{{ number_format($evaluasiSisaDak->nilai_penyaluran,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->nilai_penggunaan,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->nilai_penyaluran - $evaluasiSisaDak->nilai_penggunaan,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->sisa_dak_sebelumnya,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->nilai_penyaluran - $evaluasiSisaDak->nilai_penggunaan + $evaluasiSisaDak->sisa_dak_sebelumnya,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->penganggaran_bidang_sama,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->penganggaran_bidang_lainnya,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->penganggaran_bidang_sama + $evaluasiSisaDak->penganggaran_bidang_lainnya,2,',','.') }}</td>
                <td>{{ number_format($evaluasiSisaDak->nilai_penyaluran - $evaluasiSisaDak->nilai_penggunaan + $evaluasiSisaDak->sisa_dak_sebelumnya - $evaluasiSisaDak->penganggaran_bidang_sama - $evaluasiSisaDak->penganggaran_bidang_lainnya,2,',','.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiSisaDaks.edit', [$evaluasiSisaDak->id]) }}"
                            class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="13">Surat Tugas Belum Diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiSisaDaks])
        </div>
    </div>
</div>