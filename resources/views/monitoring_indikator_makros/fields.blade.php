<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $indikator->nama_pemda }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_indikator', 'Nama Indikator Makro') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="uraian_indikator" id="uraian_indikator" class="form-control" value="{{ $indikator->uraian_indikator }}" readonly>
</div>

<!-- Tgl Salur Field -->
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th rowspan="2" width="300">Indikator Makro</th>
                    <th rowspan="2" width="100">Tahun</th>
                    <th colspan="4">Capaian Indikator Makro</th>
                </tr>
                <tr>
                    <th width="150">Triwulan I</th>
                    <th width="150">Triwulan II</th>
                    <th width="150">Triwulan III</th>
                    <th width="150">Triwulan IV</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringIndikatorMakros as $monitoringIndikatorMakro)
                @if ($monitoringIndikatorMakro->batas_indikator == 'Triwulanan')
                <tr>
                    @if ($monitoringIndikatorMakro->tahun == '2020')
                    <td rowspan="5">{{ $monitoringIndikatorMakro->uraian_indikator }}</td>
                    @endif
                    <td>{{ $monitoringIndikatorMakro->tahun }}</td>
                    <td><input class="form-control" step="0.001" name="capaian_1_{{ $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun }}" type="number" value="{{ $monitoringIndikatorMakros->where('id', $monitoringIndikatorMakro->id)->where('tahun', $monitoringIndikatorMakro->tahun)->first()->capaian_1 }}"></td>
                    <td><input class="form-control" step="0.001" name="capaian_2_{{ $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun }}" type="number" value="{{ $monitoringIndikatorMakros->where('id', $monitoringIndikatorMakro->id)->where('tahun', $monitoringIndikatorMakro->tahun)->first()->capaian_2 }}"></td>
                    <td><input class="form-control" step="0.001" name="capaian_3_{{ $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun }}" type="number" value="{{ $monitoringIndikatorMakros->where('id', $monitoringIndikatorMakro->id)->where('tahun', $monitoringIndikatorMakro->tahun)->first()->capaian_3 }}"></td>
                    <td><input class="form-control" step="0.001" name="capaian_4_{{ $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun }}" type="number" value="{{ $monitoringIndikatorMakros->where('id', $monitoringIndikatorMakro->id)->where('tahun', $monitoringIndikatorMakro->tahun)->first()->capaian_4 }}"></td>
                </tr>
                @else
                <tr>
                    @if ($monitoringIndikatorMakro->tahun == '2020')
                    <td rowspan="5">{{ $monitoringIndikatorMakro->uraian_indikator }}</td>
                    @endif
                    <td>{{ $monitoringIndikatorMakro->tahun }}</td>
                    <td colspan="4"><input class="form-control" step="0.001" name="capaian_4_{{ $monitoringIndikatorMakro->id . '_' . $monitoringIndikatorMakro->tahun }}" type="number" value="{{ $monitoringIndikatorMakros->where('id', $monitoringIndikatorMakro->id)->where('tahun', $monitoringIndikatorMakro->tahun)->first()->capaian_4 }}"></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>