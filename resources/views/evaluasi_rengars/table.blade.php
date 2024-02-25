<div class="table-responsive">
    <table class="table" id="evaluasiRengars-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Kode Program</th>
        <th>Nama Program</th>
        <th>Kode Kegiatan</th>
        <th>Nama Kegiatan</th>
        <th>Kode Subkegiatan</th>
        <th>Nama Subkegiatan</th>
        <th>Sumber Dana</th>
        <th>Kode Akun Utama</th>
        <th>Nama Akun Utama</th>
        <th>Kode Akun Kelompok</th>
        <th>Nama Akun Kelompok</th>
        <th>Kode Akun Jenis</th>
        <th>Nama Akun Jenis</th>
        <th>Kode Akun Objek</th>
        <th>Nama Akun Objek</th>
        <th>Kode Akun Subrinci</th>
        <th>Nama Akun Subrinci</th>
        <th>Nilai Anggaran</th>
        <th>Urusan Subkegiatan</th>
        <th>Nilai Realisasi</th>
        <th>Relevansi Subkegiatan</th>
        <th>Pelaksanaan Subkegiatan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($evaluasiRengars as $evaluasiRengar)
            <tr>
                <td>{{ $evaluasiRengar->tahun }}</td>
            <td>{{ $evaluasiRengar->kode_pwk }}</td>
            <td>{{ $evaluasiRengar->nama_pemda }}</td>
            <td>{{ $evaluasiRengar->kode_program }}</td>
            <td>{{ $evaluasiRengar->nama_program }}</td>
            <td>{{ $evaluasiRengar->kode_kegiatan }}</td>
            <td>{{ $evaluasiRengar->nama_kegiatan }}</td>
            <td>{{ $evaluasiRengar->kode_subkegiatan }}</td>
            <td>{{ $evaluasiRengar->nama_subkegiatan }}</td>
            <td>{{ $evaluasiRengar->sumber_dana }}</td>
            <td>{{ $evaluasiRengar->kode_akun_utama }}</td>
            <td>{{ $evaluasiRengar->nama_akun_utama }}</td>
            <td>{{ $evaluasiRengar->kode_akun_kelompok }}</td>
            <td>{{ $evaluasiRengar->nama_akun_kelompok }}</td>
            <td>{{ $evaluasiRengar->kode_akun_jenis }}</td>
            <td>{{ $evaluasiRengar->nama_akun_jenis }}</td>
            <td>{{ $evaluasiRengar->kode_akun_objek }}</td>
            <td>{{ $evaluasiRengar->nama_akun_objek }}</td>
            <td>{{ $evaluasiRengar->kode_akun_subrinci }}</td>
            <td>{{ $evaluasiRengar->nama_akun_subrinci }}</td>
            <td>{{ $evaluasiRengar->nilai_anggaran }}</td>
            <td>{{ $evaluasiRengar->urusan_subkegiatan }}</td>
            <td>{{ $evaluasiRengar->nilai_realisasi }}</td>
            <td>{{ $evaluasiRengar->relevansi_subkegiatan }}</td>
            <td>{{ $evaluasiRengar->pelaksanaan_subkegiatan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiRengars.destroy', $evaluasiRengar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiRengars.show', [$evaluasiRengar->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('evaluasiRengars.edit', [$evaluasiRengar->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
