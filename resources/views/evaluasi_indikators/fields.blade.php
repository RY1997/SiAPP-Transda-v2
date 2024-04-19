<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Uraian Indikator Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_indikator', 'Uraian Indikator') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_indikator', null, ['class' => 'form-control', 'rows' => 3, 'readonly disabled']) !!}
</div>

<h5 class="col-sm-12 mb-3">Capaian Indikator Makro</h5>

<div class="col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table class="table small text-center align-middle m-0" id="indikatorTable">
            <thead class="table-info">
                <tr>
                    <td width="20">Uraian</td>
                    <td width="40">2023</td>
                    <td width="40">2024</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {!! Form::label('target', 'Target') !!}
                    </td>
                    <td>
                        <input type="number" class="form-control" name="target_2023" step="0.01" value="{{ $evaluasiIndikator2023->target }}" required>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="target_2024" step="0.01" value="{{ $evaluasiIndikator2024->target }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('realisasi', 'Realisasi') !!}
                    </td>
                    <td>
                        <input type="number" class="form-control" name="realisasi_2023" step="0.01" value="{{ $evaluasiIndikator2023->realisasi }}" required>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="realisasi_2024" step="0.01" value="{{ $evaluasiIndikator2024->realisasi }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('capaian', 'Capaian Indikator') !!}
                    </td>
                    <td>
                        <input type="number" class="form-control" name="capaian_2023" step="0.01" value="{{ $evaluasiIndikator2023->target > 0 ? ($evaluasiIndikator2023->realisasi / $evaluasiIndikator2023->target * 100) : '0.00' }}" readonly required>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="capaian_2024" step="0.01" value="{{ $evaluasiIndikator2024->target > 0 ? ($evaluasiIndikator2024->realisasi / $evaluasiIndikator2024->target * 100) : '0.00' }}" readonly required>
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('keterangan', 'Penyebab Capaian Rendah') !!}
                    </td>
                    <td>
                        <textarea class="form-control" name="keterangan_2023">{{ $evaluasiIndikator2023->keterangan }}</textarea>
                    </td>
                    <td>
                        <textarea class="form-control" name="keterangan_2024">{{ $evaluasiIndikator2024->keterangan }}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>