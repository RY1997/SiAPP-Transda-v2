<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiLaporans-table">
        <thead class="thead-light">
            <tr>
                <th width="50">#</th>
                <th width="150">Nama Pemda</th>
                <th width="150">Bidang TKD</th>
                <th width="100">Tahun</th>
                <th width="200">Nama Laporan</th>
                <th width="100">Keberadaan Laporan</th>
                <th width="200">Nomor Laporan</th>
                <th width="150">Tgl Laporan</th>
                <th>Penyebab Tidak Tepat Waktu</th>
                <th width="50">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiLaporans->count() > 0)
            @foreach($evaluasiLaporans as $evaluasiLaporan)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $evaluasiLaporan->nama_pemda }}</td>
                <td>{{ $evaluasiLaporan->bidang_tkd }}</td>
                <td class="text-center">{{ $evaluasiLaporan->tahun }}</td>
                <td>{{ $evaluasiLaporan->nama_laporan }}</td>
                <td>{{ $evaluasiLaporan->keberadaan_laporan }}</td>
                <td>{{ $evaluasiLaporan->nomor_laporan }}</td>
                <td>{{ $evaluasiLaporan->tgl_laporan != NULL ? ($evaluasiLaporan->tgl_laporan->format('d M Y')) : '' }}</td>
                <td>{{ $evaluasiLaporan->penyebab_tidak_tepat_waktu }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiLaporans.edit', [$evaluasiLaporan->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiLaporans])
        </div>
    </div>
</div>