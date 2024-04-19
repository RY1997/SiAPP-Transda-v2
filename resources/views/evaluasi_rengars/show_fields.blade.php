<!-- Tahun Field -->
<div class="col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" value="{{ $tahun }}" class="form-control" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $nama_pemda }}" class="form-control" readonly>
</div>

<!-- Sumber Dana Field -->
<div class="col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="col-sm-9 mb-3">
    <input type="text" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" class="form-control" readonly>
</div>