<div class="table-responsive">
    <table class="table m-0" id="pelaporans-table">
        <thead>
        <tr>
            <th>Kode Pwk</th>
        <th>Id St</th>
        <th>No Laporan</th>
        <th>Tgl Laporan</th>
        <th>Nama Pemda</th>
        <th>Status Laporan</th>
        <th>File Laporan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pelaporans as $pelaporan)
            <tr>
                <td>{{ $pelaporan->kode_pwk }}</td>
            <td>{{ $pelaporan->id_st }}</td>
            <td>{{ $pelaporan->no_laporan }}</td>
            <td>{{ $pelaporan->tgl_laporan }}</td>
            <td>{{ $pelaporan->nama_pemda }}</td>
            <td>{{ $pelaporan->status_laporan }}</td>
            <td>{{ $pelaporan->file_laporan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pelaporans.destroy', $pelaporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pelaporans.show', [$pelaporan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pelaporans.edit', [$pelaporan->id]) }}"
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
