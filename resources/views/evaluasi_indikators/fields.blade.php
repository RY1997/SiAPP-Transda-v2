<!-- Nama Pemda Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Uraian Indikator Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('uraian_indikator', 'Uraian Indikator:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::textarea('uraian_indikator', null, ['class' => 'form-control', 'rows' => 3, 'readonly']) !!}
</div>

<h5 class="col-sm-12">Capaian Indikator Makro</h5>

<div class="table-responsive">
    <table class="table table-bordered" id="indikatorTable">
        <thead class="table-info">
            <tr>
                <td width="30">
                    Uraian
                </td>
                <td width="35">
                    2023
                </td>
                <td width="35">
                    2024
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="30">
                    {!! Form::label('target', 'Target:') !!}
                </td>
                <td width="35">
                    <input type="number" class="form-control" name="target_2023" step="0.01" value="{{ $evaluasiIndikator2023->target }}" required>
                </td>
                <td width="35">
                    <input type="number" class="form-control" name="target_2024" step="0.01" value="{{ $evaluasiIndikator2024->target }}" required>
                </td>
            </tr>
            <tr>
                <td width="30">
                    {!! Form::label('realisasi', 'Realisasi:') !!}
                </td>
                <td width="35">
                    <input type="number" class="form-control" name="realisasi_2023" step="0.01" value="{{ $evaluasiIndikator2023->realisasi }}" required>
                </td>
                <td width="35">
                    <input type="number" class="form-control" name="realisasi_2024" step="0.01" value="{{ $evaluasiIndikator2024->realisasi }}" required>
                </td>
            </tr>
            <tr>
                <td width="30">
                    {!! Form::label('capaian', 'Capaian Indikator:') !!}
                </td>
                <td width="35">
                    <input type="number" class="form-control" name="capaian_2023" step="0.01" value="{{ $evaluasiIndikator2023->target > 0 ? ($evaluasiIndikator2023->realisasi / $evaluasiIndikator2023->target * 100) : '0.00' }}" readonly required>
                </td>
                <td width="35">
                    <input type="number" class="form-control" name="capaian_2024" step="0.01" value="{{ $evaluasiIndikator2024->target > 0 ? ($evaluasiIndikator2024->realisasi / $evaluasiIndikator2024->target * 100) : '0.00' }}" readonly required>
                </td>
            </tr>
            <tr>
                <td width="30">
                    {!! Form::label('keterangan', 'Penyebab Capaian Rendah:') !!}
                </td>
                <td width="35">
                    <textarea class="form-control" name="keterangan_2023">{{ $evaluasiIndikator2023->keterangan }}</textarea>
                </td>
                <td width="35">
                    <textarea class="form-control" name="keterangan_2024">{{ $evaluasiIndikator2024->keterangan }}</textarea>
                </td>
            </tr>
        </tbody>
    </table>
</div>