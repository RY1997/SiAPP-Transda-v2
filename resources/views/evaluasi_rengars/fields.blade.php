<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Nama SKPD Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_skpd', 'Nama SKPD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_skpd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Kode Program Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_program', 'Program') !!}
</div>
<div class="form-group col-sm-2 mb-3">
    {!! Form::text('kode_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>
<div class="form-group col-sm-7 mb-3">
    {!! Form::textarea('nama_program', null, ['class' => 'form-control', 'rows' => 2, 'readonly']) !!}
</div>

<!-- Kode Kegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_kegiatan', 'Kegiatan') !!}
</div>
<div class="form-group col-sm-2 mb-3">
    {!! Form::text('kode_kegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>
<div class="form-group col-sm-7 mb-3">
    {!! Form::textarea('nama_kegiatan', null, ['class' => 'form-control','rows' => 3, 'readonly']) !!}
</div>

<!-- Sumber Dana Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('sumber_dana', 'Sumber Dana') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('sumber_dana', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Urusan Subkegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('urusan_subkegiatan', 'Dukungan Urusan Bersama/Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('urusan_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>Pengujian Subkegiatan</h5>
</div>

<div class="col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table class="table text-center m-0" id="subkegiatanTable">
            <thead class="thead-light">
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
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-left">{{ $subKegiatan->kode_subkegiatan . ' ' . $subKegiatan->nama_subkegiatan }}</td>
                    <td class="text-right">{{ number_format($subKegiatan->nilai_anggaran, 2, ',', '.') }}</td>
                    <td>
                        <input type="number" name="nilai_realisasi_{{ $subKegiatan->id }}" class="form-control" step="0.01" value="{{ $subKegiatan->nilai_realisasi }}" required>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Relevan" name="relevansi_{{ $subKegiatan->id }}" id="relevansi-{{ $subKegiatan->id }}" {{ $subKegiatan->relevansi_subkegiatan == 'Relevan' ? 'checked' : '' }}>
                            <label class="form-check-label" for="relevansi_{{ $subKegiatan->id }}"> Relevan</label>
                        </div>
                    </td>
                    <td>
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
</div>