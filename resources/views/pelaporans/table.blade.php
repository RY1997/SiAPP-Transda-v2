<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="pelaporans-table">
        <thead class="table-info">
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
                    {!! Form::open(['route' => ['pelaporans.destroy', $pelaporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @if ($pelaporan->file_laporan != NULL)
                        <a href="{{ $pelaporan->file_laporan }}" class='btn btn-success btn-xs'>
                            <i class="far fa-download"></i>
                        </a>
                        @endif
                        <a href="{{ route('pelaporans.edit', [$pelaporan->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
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