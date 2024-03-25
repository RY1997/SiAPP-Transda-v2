<div class="table-responsive text-sm table-bordered">
    <table class="table m-0" id="suratTugas-table">
        <thead class="text-center bg-secondary">
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
            @foreach($suratTugas as $suratTugas)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $suratTugas->no_st }}</td>
                <td>{{ $suratTugas->tgl_st->format('d-m-Y') }}</td>
                <td>{{ $suratTugas->nama_penugasan }}</td>
                <td>{{ $suratTugas->jenis_penugasan }}</td>
                <td>{{ $suratTugas->nama_pemda }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['suratTugas.destroy', $suratTugas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('suratTugas.edit', [$suratTugas->id]) }}" class='btn btn-default btn-xs'>
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
</div>