<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="pelaporans-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Nomor ST</th>
                <th>Jenis Penugasan</th>
                <th>Nama Pemda</th>
                <th>No Laporan</th>
                <th>Tgl Laporan</th>
                <th>Status Laporan</th>
                <th>File Laporan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($pelaporans->count() > 0)
            @foreach($pelaporans as $pelaporan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelaporan->st_id }}</td>
                <td>{{ $pelaporan->st_id }}</td>
                <td>{{ $pelaporan->nama_pemda }}</td>
                <td>{{ $pelaporan->no_laporan }}</td>
                <td>{{ $pelaporan->tgl_laporan }}</td>
                <td>{{ $pelaporan->status_laporan }}</td>
                <td>{{ $pelaporan->file_laporan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pelaporans.destroy', $pelaporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pelaporans.show', [$pelaporan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-download"></i>
                        </a>
                        <a href="{{ route('pelaporans.edit', [$pelaporan->id]) }}" class='btn btn-default btn-xs'>
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
</div>