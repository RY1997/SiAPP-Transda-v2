<!-- Tahun Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('tahun', 'Tahun:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Kode Program Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nama_program', 'Program:') !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::text('kode_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::text('nama_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Kode Kegiatan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nama_kegiatan', 'Kegiatan:') !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::text('kode_kegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::textarea('nama_kegiatan', null, ['class' => 'form-control','rows' => 3, 'readonly disabled']) !!}
</div>

<!-- Sumber Dana Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('sumber_dana', 'Sumber Dana:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('sumber_dana', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Urusan Subkegiatan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('urusan_subkegiatan', 'Dukungan Urusan Bersama:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('urusan_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required']) !!}
</div>

<div class="col-sm-12">
    <h5>Pengujian Subkegiatan</h5>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="subkegiatanTable">
        <thead class="table-info">
            <tr>
                <th width="50">#</th>
                <th width="300">Nama Subkegiatan</th>
                <th width="150">Anggaran</th>
                <th width="150">Realisasi</th>
                <th width="100">Relevansi</th>
                <th width="100">Pelaksanaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subKegiatans as $subKegiatan)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $subKegiatan->kode_subkegiatan . ' ' . $subKegiatan->nama_subkegiatan }}</td>
                <td class="text-right">{{ number_format($subKegiatan->nilai_anggaran, 2, ',', '.') }}</td>
                <td>
                    <input type="number" name="nilai_realisasi_{{ $subKegiatan->id }}" class="form-control" step="0.01" value="{{ $subKegiatan->nilai_realisasi }}" required>
                </td>
                <td class="text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Relevan" name="relevansi_{{ $subKegiatan->id }}" id="relevansi-{{ $subKegiatan->id }}" {{ $subKegiatan->relevansi_subkegiatan == 'Relevan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="relevansi_{{ $subKegiatan->id }}"> Relevan</label>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Dilaksanakan" name="pelaksanaan_{{ $subKegiatan->id }}" id="pelaksanaan-{{ $subKegiatan->id }}" {{ $subKegiatan->pelaksanaan_subkegiatan == 'Dilaksanakan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="pelaksanaan_{{ $subKegiatan->id }}"> Dilaksanakan</label>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>