<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiImmediateOutcomes-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Bidang DAK</th>
                <th>Subbidang DAK</th>
                <th>Uraian Indikator</th>
                <th>Target</th>
                <th>Capaian</th>
                <th>Satuan</th>
                <th>Keterangan</th>
                <th>Kendala</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiImmediateOutcomes->count() > 0)
            @foreach($evaluasiImmediateOutcomes as $evaluasiImmediateOutcome)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiImmediateOutcome->nama_pemda }}</td>
                <td>{{ $evaluasiImmediateOutcome->bidang_tkd }}</td>
                <td>{{ $evaluasiImmediateOutcome->subbidang_tkd }}</td>
                <td>{{ $evaluasiImmediateOutcome->uraian_indikator }}</td>
                <td>{{ number_format($evaluasiImmediateOutcome->target,2,',','.') }}</td>
                <td>{{ number_format($evaluasiImmediateOutcome->capaian,2,',','.') }}</td>
                <td>{{ $evaluasiImmediateOutcome->satuan }}</td>
                <td>{{ $evaluasiImmediateOutcome->keterangan }}</td>
                <td>{{ $evaluasiImmediateOutcome->kendala }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiImmediateOutcomes.destroy', $evaluasiImmediateOutcome->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiImmediateOutcomes.edit', [$evaluasiImmediateOutcome->id]) }}"
                            class='btn btn-warning btn-xs'>
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
                <td colspan="11" class="text-center">Belum Ada Data</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiImmediateOutcomes])
        </div>
    </div>
</div>