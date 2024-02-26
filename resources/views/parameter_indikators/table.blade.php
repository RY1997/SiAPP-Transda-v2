<div class="table-responsive">
    <table class="table" id="parameterIndikators-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Jenis Tkd</th>
                <th>Bidang Tkd</th>
                <th>Uraian Indikator</th>
                <th>Satuan Indikator</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parameterIndikators as $parameterIndikator)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $parameterIndikator->jenis_tkd }}</td>
                <td>{{ $parameterIndikator->bidang_tkd }}</td>
                <td>{{ $parameterIndikator->uraian_indikator }}</td>
                <td>{{ $parameterIndikator->satuan_indikator }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['parameterIndikators.destroy', $parameterIndikator->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parameterIndikators.edit', [$parameterIndikator->id]) }}" class='btn btn-default btn-xs'>
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