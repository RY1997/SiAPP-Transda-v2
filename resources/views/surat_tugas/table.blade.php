<div class="table-responsive card mb-0">
    <table class="table small text-center m-0" id="suratTugas-table">
        <thead class="text-center table-info">
            <tr>
                <th>#</th>
                <th>No ST</th>
                <th>Tgl ST</th>
                <th>Nama Penugasan</th>
                <th>Jenis Penugasan</th>
                <th>Nama Pemda</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($suratTugas->count() > 0)
            @foreach($suratTugas as $st)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $st->no_st }}</td>
                <td>{{ $st->tgl_st->format('d M Y') }}</td>
                <td>{{ $st->nama_penugasan }}</td>
                <td>{{ $st->jenis_penugasan }}</td>
                <td>{{ $st->nama_pemda }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['suratTugas.destroy', $st->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @if ($st->file_st != NULL)
                        <a href="{{ $st->file_st }}" class='btn btn-success btn-xs'>
                            <i class="far fa-download"></i>
                        </a>
                        @endif
                        <a href="{{ route('suratTugas.edit', [$st->id]) }}" class='btn btn-warning btn-xs'>
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
                <td colspan="13" class="text-center">Surat Tugas belum ada</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $suratTugas])
        </div>
    </div>
</div>