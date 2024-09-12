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
                    <td>{!! Form::label('pendapatan_transfer', 'Pendapatan Transfer') !!}</td>
                    <td>{!! Form::number('pendapatan_transfer', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpendapatan_transfer', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('pendapatan_lainnya', 'Pendapatan Transfer') !!}</td>
                    <td>{!! Form::number('pendapatan_lainnya', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpendapatan_lainnya', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-12 mb-3">
    <h5>B. Belanja APBD</h5>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="200">Jenis Belanja</th>
                    <th width="200">Anggaran</th>
                    <th width="200">Realisasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::label('belanja_daerah', 'Belanja Daerah') !!}</td>
                    <td>{!! Form::number('belanja_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_daerah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_pegawai', 'Belanja Pegawai') !!}</td>
                    <td>{!! Form::number('belanja_pegawai', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_pegawai', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_barjas', 'Belanja Barang dan Jasa') !!}</td>
                    <td>{!! Form::number('belanja_barjas', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_barjas', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_modal', 'Belanja Modal') !!}</td>
                    <td>{!! Form::number('belanja_modal', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_modal', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_hibah', 'Belanja Hibah') !!}</td>
                    <td>{!! Form::number('belanja_hibah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_hibah', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_lainnya', 'Belanja Lainnya') !!}</td>
                    <td>{!! Form::number('belanja_lainnya', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_lainnya', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-12 mb-3">
    <h5>C. Belanja Menurut Urusan APBD</h5>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="200">Jenis Belanja</th>
                    <th width="200">Anggaran</th>
                    <th width="200">Realisasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::label('belanja_modal_jalan', 'Belanja Modal (Bidang Jalan)') !!}</td>
                    <td>{!! Form::number('belanja_modal_jalan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_modal_jalan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_pendidikan', 'Belanja Urusan Pendidikan') !!}</td>
                    <td>{!! Form::number('belanja_pendidikan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_pendidikan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('belanja_kesehatan', 'Belanja Urusan Kesehatan') !!}</td>
                    <td>{!! Form::number('belanja_kesehatan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rbelanja_kesehatan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-12 mb-3">
    <h5>D. Pembiayaan APBD</h5>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="200">Jenis Pembiayaan</th>
                    <th width="200">Anggaran</th>
                    <th width="200">Realisasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::label('penerimaan_pembiayaan', 'Penerimaan Pembiayaan') !!}</td>
                    <td>{!! Form::number('penerimaan_pembiayaan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpenerimaan_pembiayaan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('pengeluaran_pembiayaan', 'Belanja Urusan Pendidikan') !!}</td>
                    <td>{!! Form::number('pengeluaran_pembiayaan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rpengeluaran_pembiayaan', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('silpa', 'SiLPA') !!}</td>
                    <td>{!! Form::number('silpa', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('rsilpa', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>