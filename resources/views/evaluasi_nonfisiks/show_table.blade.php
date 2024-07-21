<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiKontrak-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2" width="50">#</th>
                <th colspan="4">Data Kegiatan</th>
                <th colspan="2">Nilai K.KN</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th width="150">Nama OPD</th>
                <th width="200">Nama Program</th>
                <th width="300">Uraian Non Fisik</th>
                <th width="200">Nilai Anggaran</th>
                <th width="200">Ketidaktepatan Pelaksanaan</th>
                <th width="200">Ketidakmanfaatan Output</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiNonfisiks->count() > 0)
            @foreach($evaluasiNonfisiks as $evaluasiNonfisik)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $evaluasiNonfisik->nama_opd }}</td>
                <td>{{ $evaluasiNonfisik->program }}</td>
                <td>{{ $evaluasiNonfisik->uraian_kontrak }}</td>
                <td class="text-right">{{ number_format($evaluasiNonfisik->nilai_kontrak, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($evaluasiNonfisik->nilai_masalah, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($evaluasiNonfisik->nilai_manfaat, 2, ',', '.') }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiNonfisiks.destroy', $evaluasiNonfisik->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiNonfisiks/'. $evaluasiNonfisik->id . '/edit?step=data') }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiNonfisiks])
        </div>
    </div>
</div>