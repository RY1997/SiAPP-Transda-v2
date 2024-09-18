<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="nama_pemda" name="nama_pemda">
        <option value="" selected="selected">Pilih</option>
        @foreach($pemdas as $pemda)
        <option value="{{ $pemda->nama_pemda }}" {{ !empty($suratTugas) && $pemda->nama_pemda == $suratTugas->nama_pemda ? 'selected' : '' }}>{{ $pemda->nama_pemda }}</option>
        @endforeach
    </select>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Jenis DBH') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="DBH PPh" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH PPh' ? 'selected' : '' }}>DBH PPh</option>
        <option value="DBH PBB" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH PBB' ? 'selected' : '' }}>DBH PBB</option>
        <option value="DBH CHT" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH CHT' ? 'selected' : '' }}>DBH CHT</option>
        <option value="DBH Kehutanan" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Kehutanan' ? 'selected' : '' }}>DBH Kehutanan</option>
        <option value="DBH Dana Reboisasi" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Dana Reboisasi' ? 'selected' : '' }}>DBH Dana Reboisasi</option>
        <option value="DBH Migas" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Migas' ? 'selected' : '' }}>DBH Migas</option>
        <option value="DBH Minerba" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Minerba' ? 'selected' : '' }}>DBH Minerba</option>
        <option value="DBH Perikanan" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Perikanan' ? 'selected' : '' }}>DBH Perikanan</option>
        <option value="DBH Panas Bumi" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Panas Bumi' ? 'selected' : '' }}>DBH Panas Bumi</option>
        <option value="DBH Sawit" {{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->subbidang_tkd == 'DBH Sawit' ? 'selected' : '' }}>DBH Sawit</option>
    </select>
</div>

<div class="col-sm-12 mb-3">
    <h5>A. Penetapan Alokasi</h5>
</div>

<!-- Dasar Penetapan Alokasi Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('dasar_penetapan', 'Dasar Penetapan Alokasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('dasar_penetapan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Perhitungan Realisasi Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('perhitungan_realisasi', 'Perhitungan Realisasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('perhitungan_realisasi', null, ['class' => 'form-control','step' => '0.01', 'required']) !!}
</div>

<!-- Rekonsiliasi Triwulanan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('rekon_triwulanan', 'Rekonsiliasi Triwulanan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('rekon_triwulanan', ['' => 'Pilih', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Keterlibatan Pemda Penghasil Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('keterlibatan_penghasil', 'Keterlibatan Pemda Penghasil') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('keterlibatan_penghasil', ['' => 'Pilih', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], null, ['class' => 'form-control custom-select']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>B. Kebijakan Pengalokasian</h5>
</div>

<!-- Keberadaan Kebijakan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('keberadaan_kebijakan', 'Keberadaan Kebijakan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('keberadaan_kebijakan', ['' => 'Pilih', 'Ada' => 'Ada', 'Tidak' => 'Tidak'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Nomor Kebijakan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nomor_kebijakan', 'Nomor Kebijakan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nomor_kebijakan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Kebijakan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_kebijakan', 'Tgl Kebijakan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_kebijakan" value="{{ !empty($evaluasiKebijakanAlokasi) && $evaluasiKebijakanAlokasi->tgl_kebijakan != NULL ? date_format($evaluasiKebijakanAlokasi->tgl_kebijakan, 'Y-m-d') : '' }}">
</div>

<!-- Ringkasan Kebijakan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_kebijakan', 'Ringkasan Kebijakan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_kebijakan', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Kesesuaian dengan Kebijakan Pusat Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('kesesuaian_pusat', 'Kesesuaian dengan Kebijakan Pusat') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('kesesuaian_pusat', ['' => 'Pilih', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Memuat Pengalokasian ke Masing-Masing OPD Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('alokasi_opd', 'Memuat Pengalokasian ke Masing-Masing OPD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('alokasi_opd', ['' => 'Pilih', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], null, ['class' => 'form-control custom-select']) !!}
</div>