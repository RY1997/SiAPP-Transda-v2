<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $alokasi_id->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $alokasi_id->nama_pemda }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="jenis_tkd" id="jenis_tkd" class="form-control" value="{{ $alokasi_id->jenis_tkd }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="bidang_tkd" id="bidang_tkd" class="form-control" value="{{ $monitoringPenyalurans->first()->bidang_tkd }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('subbidang_tkd', 'Subbidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="subbidang_tkd" id="subbidang_tkd" class="form-control" value="{{ $monitoringPenyalurans->first()->subbidang_tkd }}" readonly>
</div>

<div class="col-sm-12 mt-2">
    <h5>A. Informasi Penyaluran</h5>
</div>

<!-- Tahap Salur Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahap_salur', 'Tahap Salur') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tahap_salur', null, ['class' => 'form-control','readonly']) !!}
</div> -->

<!-- Tgl Salur Field -->
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Tahap Salur</th>
                    <th width="100">Uraian</th>
                    <th width="200">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringPenyalurans as $monitoringPenyaluran)
                @if ($monitoringPenyaluran->jenis_tkd == 'Dana Bagi Hasil')
                <tr>
                    <td rowspan="7">{{ $monitoringPenyaluran->uraian }}</td>
                    <td>Tanggal Salur</td>
                    <td><input type="date" class="form-control" name="tgl_salur_{{ $monitoringPenyaluran->id }}" value="{{ $monitoringPenyaluran->tgl_salur != NULL ? date_format($monitoringPenyaluran->tgl_salur, 'Y-m-d') : '' }}"></td>
                </tr>
                <tr>
                    <td>Saldo RKUD</td>
                    <td><input class="form-control" step="0.01" name="saldo_rkud_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->saldo_rkud }}"></td>
                </tr>
                <tr>
                    <td>Saldo Pokok TDF</td>
                    <td><input class="form-control" step="0.01" name="saldo_pokok_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->saldo_pokok }}"></td>
                </tr>
                <tr>
                    <td>Nilai Remunerasi</td>
                    <td><input class="form-control" step="0.01" name="remunerasi_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->remunerasi }}"></td>
                </tr>
                <tr>
                    <td>Nilai Penarikan Seluruhnya</td>
                    <td><input class="form-control" step="0.01" name="penarikan_seluruhnya_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penarikan_seluruhnya }}"></td>
                </tr>
                <tr>
                    <td>Pemotongan Penyaluran</td>
                    <td><input class="form-control" step="0.01" name="potong_salur_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->potong_salur }}"></td>
                </tr>
                <tr>
                    <td>Penundaan Penyaluran</td>
                    <td><input class="form-control" step="0.01" name="tunda_salur_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->tunda_salur }}"></td>
                </tr>
                @elseif ($monitoringPenyaluran->jenis_tkd == 'Dana Alokasi Umum')
                <tr>
                    <td rowspan="4">{{ $monitoringPenyaluran->tahap_salur }}</td>
                    <td>Tanggal Salur</td>
                    <td><input type="date" class="form-control" name="tgl_salur_{{ $monitoringPenyaluran->id }}" value="{{ $monitoringPenyaluran->tgl_salur != NULL ? date_format($monitoringPenyaluran->tgl_salur, 'Y-m-d') : '' }}"></td>
                </tr>
                <tr>
                    <td>Pemotongan Penyaluran</td>
                    <td><input class="form-control" step="0.01" name="potong_salur_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->potong_salur }}"></td>
                </tr>
                <tr>
                    <td>Penundaan Penyaluran</td>
                    <td><input class="form-control" step="0.01" name="tunda_salur_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->tunda_salur }}"></td>
                </tr>
                <tr>
                    <td>Nilai Penyaluran (Net)</td>
                    <td><input class="form-control" step="0.01" name="penyaluran_tkd_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyaluran_tkd }}"></td>
                </tr>
                @else
                <tr>
                    <td rowspan="2">{{ $monitoringPenyaluran->tahap_salur }}</td>
                    <td>Tanggal Salur</td>
                    <td><input type="date" class="form-control" name="tgl_salur_{{ $monitoringPenyaluran->id }}" value="{{ $monitoringPenyaluran->tgl_salur != NULL ? date_format($monitoringPenyaluran->tgl_salur, 'Y-m-d') : '' }}"></td>
                </tr>
                <tr>
                    <td>Nilai Penyaluran (Net)</td>
                    <td><input class="form-control" step="0.01" name="penyaluran_tkd_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyaluran_tkd }}"></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- <div class="col-sm-12 mt-2">
    <h5>B. Pengujian Penyaluran</h5>
</div> -->

<!-- Tepat Waktu Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('tepat_waktu', 'Ketepatan Waktu Penyaluran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('tepat_waktu', ['' => 'Pilih', 'Tepat Waktu' => 'Tepat Waktu', 'Tidak Tepat Waktu' => 'Tidak Tepat Waktu'], null, ['class' => 'form-control custom-select']) !!}
</div> -->

<!-- Penyebab Tidak Tepat Waktu Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_tidak_tepat_waktu', 'Penyebab Tidak Tepat Waktu') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_tidak_tepat_waktu', null, ['class' => 'form-control', 'rows' => '2']) !!}
</div> -->

<!-- Tepat Jumlah Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('tepat_jumlah', 'Ketepatan Jumlah Penyaluran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('tepat_jumlah', ['' => 'Pilih', 'Tepat Jumlah' => 'Tepat Jumlah', 'Tidak Tepat Jumlah' => 'Tidak Tepat Jumlah'], null, ['class' => 'form-control custom-select']) !!}
</div> -->

<!-- Penyebab Tidak Tepat Jumlah Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_tidak_tepat_jumlah', 'Penyebab Tidak Tepat Jumlah') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_tidak_tepat_jumlah', null, ['class' => 'form-control', 'rows' => '2']) !!}
</div> -->