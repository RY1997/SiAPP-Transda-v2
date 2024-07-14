<input type="hidden" class="form-control" id="kode_pwk" name="kode_pwk" value="{{ Auth::user()->kode_pwk }}">
<!-- No St Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('no_st', 'No ST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('no_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl St Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_st', 'Tgl ST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_st" value="{{ !empty($suratTugas) && $suratTugas->tgl_st != NULL ? date_format($suratTugas->tgl_st, 'Y-m-d') : '' }}">
</div>

<!-- Nama Penugasan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_penugasan', 'Nama Penugasan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Jenis Penugasan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_penugasan', 'Jenis Penugasan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('jenis_penugasan', ['' => 'Pilih', 'Monitoring' => 'Monitoring', 'Evaluasi' => 'Evaluasi'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Tahun Penugasan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun_penugasan', 'Tahun Penugasan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" class="form-control" id="tahun_penugasan" name="tahun_penugasan" value="2024" readonly disabled>
</div>

<!-- Tahun Penugasan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Lingkup Penugasan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" class="form-control" id="jenis_tkd" name="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="nama_pemda" name="nama_pemda">
        <option value="" selected="selected">Pilih</option>
        @foreach($pemdas as $pemda)
        <option value="{{ $pemda->nama_pemda }}" {{ !empty($suratTugas) && $pemda->nama_pemda == $suratTugas->name_pemda ? 'selected' : '' }}>{{ $pemda->nama_pemda }}</option>        
        @endforeach
    </select>    
</div>

<!-- Tgl Mulai Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_mulai', 'Tgl Mulai') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_mulai" value="{{ !empty($suratTugas) && $suratTugas->tgl_mulai != NULL ? date_format($suratTugas->tgl_mulai, 'Y-m-d') : '' }}">
</div>

<!-- Tgl Akhir Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_akhir', 'Tgl Akhir') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_akhir" value="{{ !empty($suratTugas) && $suratTugas->tgl_akhir != NULL ? date_format($suratTugas->tgl_akhir, 'Y-m-d') : '' }}">
</div>

<!-- Status St Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('status_st', 'Status ST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('status_st', ['' => 'Pilih', 'DL3' => 'DL3', 'Final' => 'Final'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- File St Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('file_st', 'Link ST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('file_st', null, ['class' => 'form-control']) !!}
</div>