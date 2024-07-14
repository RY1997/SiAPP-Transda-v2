<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="parameterIndikators-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Jenis TKD</th>
                <th>Bidang TKD</th>
                <th>Uraian Indikator</th>
                <th>Satuan Indikator</th>
                <th>Aksi</th>
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
                        <a href="{{ route('parameterIndikators.edit', [$parameterIndikator->id]) }}" class='btn btn-sm btn-warning'>
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
            @include('adminlte-templates::common.paginate', ['records' => $parameterIndikators])
        </div>
    </div>
</div>