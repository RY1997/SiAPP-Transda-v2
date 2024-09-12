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

<div class="col-sm-12 mb-3">
    <h5>A. Pendapatan APBD</h5>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="200">Jenis Pendapatan</th>
                    <th width="200">Anggaran</th>
                    <th width="200">Realisasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::label('pendapatan_daerah', 'Pendapatan Daerah') !!}</td>
                    <td>{!! Form::number('pendapatan_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpendapatan_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('pendapatan_pad', 'Pendapatan PAD') !!}</td>
                    <td>{!! Form::number('pendapatan_pad', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpendapatan_pad', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('pendapatan_daerah', 'Pendapatan Daerah') !!}</td>
                    <td>{!! Form::number('pendapatan_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpendapatan_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Pendapatan Daerah Field -->
<div class="form-group col-sm-3 mb-3">
    
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('pendapatan_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Pendapatan Pad Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('pendapatan_pad', 'Pendapatan PAD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('pendapatan_pad', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Pendapatan Transfer Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('pendapatan_transfer', 'Pendapatan Transfer') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('pendapatan_transfer', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Pendapatan Lainnya Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('pendapatan_lainnya', 'Pendapatan Lainnya') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('pendapatan_lainnya', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>B. Belanja APBD</h5>
</div>

<!-- Belanja Daerah Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_daerah', 'Belanja Daerah') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Belanja Pegawai Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_pegawai', 'Belanja Pegawai') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_pegawai', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Belanja Barjas Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_barjas', 'Belanja Barang dan Jasa') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_barjas', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Belanja Modal Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_modal', 'Belanja Modal') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_modal', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Belanja Hibah Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_hibah', 'Belanja Hibah') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_hibah', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Belanja Lainnya Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_lainnya', 'Belanja Lainnya') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_lainnya', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>C. Belanja Menurut Urusan APBD</h5>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_modal_jalan', 'Belanja Modal (Bidang Jalan)') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_modal_jalan', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_pendidikan', 'Belanja Urusan Pendidikan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_pendidikan', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('belanja_kesehatan', 'Belanja Urusan Kesehatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('belanja_kesehatan', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>D. Pembiayaan APBD</h5>
</div>

<!-- Penerimaan Pembiayaan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penerimaan_pembiayaan', 'Penerimaan Pembiayaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('penerimaan_pembiayaan', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Pengeluaran Pembiayaan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('pengeluaran_pembiayaan', 'Pengeluaran Pembiayaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('pengeluaran_pembiayaan', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Silpa Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('silpa', 'SiLPA') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('silpa', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>