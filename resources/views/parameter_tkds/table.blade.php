<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="parameterTkds-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Jenis TKD</th>
                <th>Bidang TKD</th>
                <th>Subbidang TKD</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parameterTkds as $parameterTkd)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $parameterTkd->jenis_tkd }}</td>
                <td>{{ $parameterTkd->bidang_tkd }}</td>
                <td>{{ $parameterTkd->subbidang_tkd }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['parameterTkds.destroy', $parameterTkd->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parameterTkds.edit', [$parameterTkd->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $parameterTkds])
        </div>
    </div>
</div>