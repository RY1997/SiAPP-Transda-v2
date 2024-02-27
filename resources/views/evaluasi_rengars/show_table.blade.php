<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="evaluasiRengars-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Kode Program</th>
                <th>Nama Program</th>
                <th>Kode Kegiatan</th>
                <th>Nama Kegiatan</th>
                <th>Kode Subkegiatan</th>
                <th>Nama Subkegiatan</th>
                <th>Nilai Anggaran</th>
                <th>Urusan Subkegiatan</th>
                <th>Nilai Realisasi</th>
                <th>Relevansi Subkegiatan</th>
                <th>Pelaksanaan Subkegiatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiRengars->count() > 0)
            @foreach($evaluasiRengars as $evaluasiRengar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiRengar->kode_program }}</td>
                <td>{{ $evaluasiRengar->nama_program }}</td>
                <td>{{ $evaluasiRengar->kode_kegiatan }}</td>
                <td>{{ $evaluasiRengar->nama_kegiatan }}</td>
                <td>{{ $evaluasiRengar->kode_subkegiatan }}</td>
                <td>{{ $evaluasiRengar->nama_subkegiatan }}</td>
                <td>{{ $evaluasiRengar->nilai_anggaran }}</td>
                <td>{{ $evaluasiRengar->urusan_subkegiatan }}</td>
                <td>{{ $evaluasiRengar->nilai_realisasi }}</td>
                <td>{{ $evaluasiRengar->relevansi_subkegiatan }}</td>
                <td>{{ $evaluasiRengar->pelaksanaan_subkegiatan }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiRengars.edit', [$evaluasiRengar->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="13">Tidak ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>