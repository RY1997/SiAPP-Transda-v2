<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="parameterTkds-table">
        <thead class="table-info">
            <tr>
                <th>#</th>
                <th>Jenis TKD</th>
                <th>Bidang TKD</th>
                <th>Alokasi Minimal</th>
                <th>Aksi</th>
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
                        <a href="{{ route('parameterTkds.edit', [$parameterTkd->id]) }}" class='btn btn-warning btn-xs'>
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
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $parameterTkds])
        </div>
    </div>
</div>