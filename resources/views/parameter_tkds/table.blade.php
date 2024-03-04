<div class="table-responsive table-bordered">
    <table class="table m-0" id="parameterTkds-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Jenis TKD</th>
                <th>Bidang TKD</th>
                <th>Alokasi Minimal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parameterTkds as $parameterTkd)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $parameterTkd->jenis_tkd }}</td>
                <td>{{ $parameterTkd->bidang_tkd }}</td>
                <td>{{ $parameterTkd->alokasi_minimal }}%</td>
                <td width="120">
                    {!! Form::open(['route' => ['parameterTkds.destroy', $parameterTkd->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parameterTkds.edit', [$parameterTkd->id]) }}" class='btn btn-default btn-xs'>
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