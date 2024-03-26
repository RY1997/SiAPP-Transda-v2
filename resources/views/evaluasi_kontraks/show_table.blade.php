<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="evaluasiKontrak-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th rowspan="2" width="50">#</th>
                <th colspan="4">Data Kontrak</th>
                <th colspan="2">Nilai K.KN</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th width="150">Nomor Kontrak</th>
                <th width="100">Tanggal Kontrak</th>
                <th width="300">Uraian Kontrak</th>
                <th width="200">Nilai Kontrak</th>
                <th width="200">Ketidaktepatan Pelaksanaan</th>
                <th width="200">Ketidakmanfaatan Output</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiKontraks->count() > 0)
            @foreach($evaluasiKontraks as $evaluasiKontrak)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiKontrak->nomor_kontrak }}</td>
                <td>{{ $evaluasiKontrak->tanggal_kontrak }}</td>
                <td>{{ $evaluasiKontrak->uraian_kontrak }}</td>
                <td>{{ $evaluasiKontrak->nilai_kontrak }}</td>
                <td>{{ $evaluasiKontrak->masalah1 + $evaluasiKontrak->masalah2 + $evaluasiKontrak->masalah3 + $evaluasiKontrak->masalah4 + $evaluasiKontrak->masalah5 + $evaluasiKontrak->masalah6 + $evaluasiKontrak->masalah7 + $evaluasiKontrak->masalah8 }}</td>
                <td>{{ $evaluasiKontrak->manfaat1 + $evaluasiKontrak->manfaat2 + $evaluasiKontrak->manfaat3 + $evaluasiKontrak->manfaat4 + $evaluasiKontrak->manfaat5 + $evaluasiKontrak->manfaat6 + $evaluasiKontrak->manfaat7 + $evaluasiKontrak->manfaat8 }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiKontraks.destroy', $evaluasiKontrak->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKontraks.edit', $evaluasiKontrak->id) }}" class='btn btn-default btn-xs'>
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
                <td colspan="8" class="text-center">Tidak ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>