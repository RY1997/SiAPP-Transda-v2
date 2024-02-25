<div class="table-responsive">
    <table class="table" id="parameterTkds-table">
        <thead>
        <tr>
            <th>Jenis Tkd</th>
        <th>Bidang Tkd</th>
        <th>Alokasi Minimal</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($parameterTkds as $parameterTkd)
            <tr>
                <td>{{ $parameterTkd->jenis_tkd }}</td>
            <td>{{ $parameterTkd->bidang_tkd }}</td>
            <td>{{ $parameterTkd->alokasi_minimal }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['parameterTkds.destroy', $parameterTkd->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parameterTkds.show', [$parameterTkd->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('parameterTkds.edit', [$parameterTkd->id]) }}"
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
