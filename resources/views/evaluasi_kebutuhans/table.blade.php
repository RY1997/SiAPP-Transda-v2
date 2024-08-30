<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiKebutuhans-table">
        <thead class="thead-light">
            <tr>
                <td rowspan="2" width="50">#</td>
                <th rowspan="2" width="200">Nama Pemda</th>
                <th rowspan="2" width="100">Tahun</th>
                <th rowspan="2" width="200">Kegiatan</th>
                <th rowspan="2" width="200">Indikator Kegiatan</th>
                <th rowspan="2" width="100">Unit Target</th>
                <th rowspan="2" width="100">Satuan</th>
                <th rowspan="2" width="150">Nilai Target</th>
                <th colspan="2">PAD</th>
                <th colspan="2">TKD</th>
                <th rowspan="2" colspan="3" width="100">Action</th>
            </tr>
            <tr>
                <th width="50">Unit Pemenuhan</th>
                <th width="100">Nilai Pemenuhan</th>
                <th width="50">Unit Pemenuhan</th>
                <th width="100">Nilai Pemenuhan</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiKebutuhans->count() > 0)
            @foreach($evaluasiKebutuhans as $evaluasiKebutuhan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiKebutuhan->nama_pemda }}</td>
                <td>{{ $evaluasiKebutuhan->tahun }}</td>
                <td>{{ $evaluasiKebutuhan->kegiatan }}</td>
                <td>{{ $evaluasiKebutuhan->indikator_kegiatan }}</td>
                <td>{{ number_format($evaluasiKebutuhan->unit_target,0,',','.') }}</td>
                <td>{{ $evaluasiKebutuhan->satuan }}</td>
                <td class="text-right">{{ number_format($evaluasiKebutuhan->nilai_target,2,',','.') }}</td>
                <td>{{ number_format($evaluasiKebutuhan->unit_pad,0,',','.') }}</td>
                <td class="text-right">{{ number_format($evaluasiKebutuhan->nilai_pad,2,',','.') }}</td>
                <td>{{ number_format($evaluasiKebutuhan->unit_dau + $evaluasiKebutuhan->unit_dbh + $evaluasiKebutuhan->unit_dak + $evaluasiKebutuhan->unit_otsus,0,',','.') }}</td>
                <td class="text-right">{{ number_format($evaluasiKebutuhan->nilai_dau + $evaluasiKebutuhan->nilai_dbh + $evaluasiKebutuhan->nilai_dak + $evaluasiKebutuhan->nilai_otsus,2,',','.') }}</td>
                <td width="120">
                    @if ($evaluasiKebutuhan->bidang != 'Belanja Pegawai')
                    {!! Form::open(['route' => ['evaluasiKebutuhans.destroy', $evaluasiKebutuhan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKebutuhans.edit', [$evaluasiKebutuhan->id]) }}"
                            class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @else
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKebutuhans.edit', [$evaluasiKebutuhan->id]) }}"
                            class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    @endif
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="15">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiKebutuhans])
        </div>
    </div>
</div>