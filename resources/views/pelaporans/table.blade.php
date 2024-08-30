<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="pelaporans-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nomor ST</th>
                <th>Jenis Penugasan</th>
                <th>Nama Pemda</th>
                <th>No Laporan</th>
                <th>Tgl Laporan</th>
                <th>Status Laporan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($pelaporans->count() > 0)
            @foreach($pelaporans as $pelaporan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelaporan->st->no_st }}</td>
                <td>{{ $pelaporan->st->jenis_penugasan }}</td>
                <td>{{ $pelaporan->nama_pemda }}</td>
                <td>{{ $pelaporan->no_laporan }}</td>
                <td>{{ $pelaporan->tgl_laporan->format('d M Y') }}</td>
                <td>{{ $pelaporan->status_laporan }}</td>
                <td width="120">
                    <div class='btn-group'>
                        @if ($pelaporan->file_laporan != NULL)
                        <a href="{{ $pelaporan->file_laporan }}" class='btn btn-sm btn-success'>
                            <i class="far fa-download"></i>
                        </a>
                        @endif
                        <a href="{{ route('pelaporans.edit', [$pelaporan->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="9" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $pelaporans])
        </div>
    </div>
</div>