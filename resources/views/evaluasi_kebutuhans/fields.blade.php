<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <select class="form-control custom-select" id="nama_pemda" name="nama_pemda">
        <option value="" selected="selected">Pilih</option>
        @foreach($pemdas as $pemda)
        <option value="{{ $pemda->nama_pemda }}" {{ !empty($evaluasiKebutuhan) && $pemda->nama_pemda == $evaluasiKebutuhan->nama_pemda ? 'selected' : '' }}>{{ $pemda->nama_pemda }}</option>
        @endforeach
    </select>
    @endif
</div>

<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <select class="form-control custom-select" id="tahun" name="tahun">
        <option value="" selected="selected">Pilih</option>
        <option value="2023" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->tahun == '2023' ? 'selected' : '' }}>2023</option>
        <option value="2024" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->tahun == '2024' ? 'selected' : '' }}>2024</option>
    </select>
    @endif
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang', 'Bidang') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::text('bidang', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <select class="form-control custom-select" id="bidang" name="bidang">
        <option value="" selected="selected">Pilih</option>
        <option value="Bidang Pendidikan" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Bidang Pendidikan' ? 'selected' : '' }}>Bidang Pendidikan</option>
        <option value="Bidang Kesehatan" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Bidang Kesehatan' ? 'selected' : '' }}>Bidang Kesehatan</option>
        <option value="Bidang Infrastruktur" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Bidang Infrastruktur' ? 'selected' : '' }}>Bidang Infrastruktur</option>
    </select>
    @endif
</div>

<!-- Program Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('program', 'Nama Program') !!}
</div>
<div class="form-group col-sm-2 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::text('kode_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    {!! Form::text('kode_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'placeholder'=>'Kode']) !!}
    @endif
</div>
<div class="form-group col-sm-7 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::textarea('program', null, ['class' => 'form-control', 'rows' => '3', 'readonly']) !!}
    @else
    {!! Form::textarea('program', null, ['class' => 'form-control', 'rows' => '3']) !!}
    @endif
</div>

<!-- Kegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('kegiatan', 'Nama Kegiatan') !!}
</div>
<div class="form-group col-sm-2 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::text('kode_kegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    {!! Form::text('kode_kegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'placeholder'=>'Kode']) !!}
    @endif
</div>
<div class="form-group col-sm-7 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::textarea('kegiatan', null, ['class' => 'form-control', 'rows' => '3', 'readonly']) !!}
    @else
    {!! Form::textarea('kegiatan', null, ['class' => 'form-control', 'rows' => '3']) !!}
    @endif
</div>

<!-- Indikator Kegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('indikator_kegiatan', 'Indikator Kinerja Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::textarea('indikator_kegiatan', null, ['class' => 'form-control', 'rows' => '3', 'readonly']) !!}
    @else
    {!! Form::textarea('indikator_kegiatan', null, ['class' => 'form-control', 'rows' => '3']) !!}
    @endif
</div>

<!-- Satuan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('satuan', 'Satuan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKebutuhan) && $evaluasiKebutuhan->bidang == 'Belanja Pegawai')
    {!! Form::text('satuan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    {!! Form::text('satuan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    @endif
</div>

<!-- Target Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('target', 'Target') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_target', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Unit', 'required']) !!}
</div>
<div class="form-group col-sm-6 mb-3">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nilai_target">Rp</span>
        </div>
        <input class="form-control" name="nilai_target" type="number" id="nilai_target" placeholder="Nilai Kebutuhan" aria-describedby="nilai_target" required>
    </div>
</div>

<div class="col-sm-12 mb-3">
    <h5>Pendanaan Kebutuhan</h5>
</div>

<!-- Target Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('pad', 'Pendapatan Asli Daerah') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_pad', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Unit', 'required']) !!}
</div>
<div class="form-group col-sm-6 mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nilai_pad">Rp</span>
        </div>
        <input class="form-control" name="nilai_pad" type="number" id="nilai_pad" placeholder="Nilai Kebutuhan" aria-describedby="nilai_pad" value="{{ $evaluasiKebutuhan->nilai_pad ?? NULL }}" required>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('dau', 'TKD - DAU') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_dau', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Unit', 'required']) !!}
</div>
<div class="form-group col-sm-6 mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nilai_dau">Rp</span>
        </div>
        <input class="form-control" name="nilai_dau" type="number" id="nilai_dau" placeholder="Nilai Kebutuhan" aria-describedby="nilai_dau" value="{{ $evaluasiKebutuhan->nilai_dau ?? NULL }}" required>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('dbh', 'TKD - DBH') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_dbh', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Unit', 'required']) !!}
</div>
<div class="form-group col-sm-6 mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nilai_dbh">Rp</span>
        </div>
        <input class="form-control" name="nilai_dbh" type="number" id="nilai_dbh" placeholder="Nilai Kebutuhan" aria-describedby="nilai_dbh" value="{{ $evaluasiKebutuhan->nilai_dbh ?? NULL }}" required>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('dak', 'TKD - DAK') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_dak', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Unit', 'required']) !!}
</div>
<div class="form-group col-sm-6 mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nilai_dak">Rp</span>
        </div>
        <input class="form-control" name="nilai_dak" type="number" id="nilai_dak" placeholder="Nilai Kebutuhan" aria-describedby="nilai_dak" value="{{ $evaluasiKebutuhan->nilai_dak ?? NULL }}" required>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('otsus', 'TKD - Otsus') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_otsus', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Unit', 'required']) !!}
</div>
<div class="form-group col-sm-6 mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nilai_otsus">Rp</span>
        </div>
        <input class="form-control" name="nilai_otsus" type="number" id="nilai_otsus" placeholder="Nilai Kebutuhan" aria-describedby="nilai_otsus" value="{{ $evaluasiKebutuhan->nilai_otsus ?? NULL }}" required>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('unit_selesai', 'Jumlah Unit Selesai') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_selesai', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>Penyelesaian Unit</h5>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('unit_tidak_selesai', 'Jumlah Unit Tidak Selesai') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_tidak_selesai', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('unit_tidak_dilaksanakan', 'Jumlah Unit Tidak Dilaksanakan') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_tidak_dilaksanakan', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('unit_tahun_selanjutnya', 'Jumlah Unit Dilaksanakan pada Tahun Berikutnya') !!}
</div>
<div class="form-group col-sm-3 mb-3">
    {!! Form::number('unit_tahun_selanjutnya', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>Simpulan Ketuntasan</h5>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('simpulan_ketuntasan', 'Simpulan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="simpulan_ketuntasan" name="simpulan_ketuntasan" required>
        <option value="" selected="selected">Pilih</option>
        <option value="Tuntas" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->simpulan_ketuntasan == 'Tuntas' ? 'selected' : '' }}>Tuntas</option>
        <option value="Tidak Tuntas" {{ !empty($evaluasiKebutuhan) && $evaluasiKebutuhan->simpulan_ketuntasan == 'Tidak Tuntas' ? 'selected' : '' }}>Tidak Tuntas</option>
    </select>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_tidak_tuntas', 'Penyebab Tidak Tuntas') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_tidak_tuntas', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>