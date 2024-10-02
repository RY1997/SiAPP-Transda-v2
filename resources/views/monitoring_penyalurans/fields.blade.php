<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $monitoringPenyalurans->first()->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $monitoringPenyalurans->first()->nama_pemda }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="jenis_tkd" id="jenis_tkd" class="form-control" value="{{ $monitoringPenyalurans->first()->jenis_tkd }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tipe_tkd', 'Sifat TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tipe_tkd" id="tipe_tkd" class="form-control" value="{{ $monitoringPenyalurans->first()->tipe_tkd }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="bidang_tkd" id="bidang_tkd" class="form-control" value="{{ $monitoringPenyalurans->first()->bidang_tkd }}" readonly>
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
                    <th width="100">Subbidang TKD</th>
                    <th width="100">Uraian</th>
                    <th width="200">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringPenyalurans as $monitoringPenyaluran)
                @if ($monitoringPenyaluran->jenis_tkd == 'Dana Bagi Hasil')
                <tr>
                    <td rowspan="7">{{ $monitoringPenyaluran->uraian }}</td>
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
                <tr>
                    <td>Keterangan Penyaluran</td>
                    <td><textarea class="form-control" rows="3" name="penyebab_tidak_tepat_jumlah_{{ $monitoringPenyaluran->id }}">{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyebab_tidak_tepat_jumlah }}</textarea></td>
                </tr>
                @elseif ($monitoringPenyaluran->jenis_tkd == 'Dana Alokasi Umum')
                <tr>
                    <td rowspan="5">{{ $monitoringPenyaluran->uraian }}</td>
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
                <tr>
                    <td>Nilai Penyaluran Periode Sebelumnya</td>
                    <td><input class="form-control" step="0.01" name="penyaluran_tkd_sebelumnya_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyaluran_tkd_sebelumnya }}"></td>
                </tr>
                <tr>
                    <td>Keterangan Penyaluran</td>
                    <td><textarea class="form-control" rows="3" name="penyebab_tidak_tepat_jumlah_{{ $monitoringPenyaluran->id }}">{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyebab_tidak_tepat_jumlah }}</textarea></td>
                </tr>
                @else
                <tr>
                    <td rowspan="3">{{ $monitoringPenyaluran->uraian }}</td>
                    <td>Nilai Penyaluran (Net)</td>
                    <td><input class="form-control" step="0.01" name="penyaluran_tkd_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyaluran_tkd }}"></td>
                </tr>
                <tr>
                    <td>Nilai Penyaluran Periode Sebelumnya</td>
                    <td><input class="form-control" step="0.01" name="penyaluran_tkd_sebelumnya_{{ $monitoringPenyaluran->id }}" type="number" value="{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyaluran_tkd_sebelumnya }}"></td>
                </tr>
                <tr>
                    <td>Keterangan Penyaluran</td>
                    <td><textarea class="form-control" rows="3" name="penyebab_tidak_tepat_jumlah_{{ $monitoringPenyaluran->id }}">{{ $monitoringPenyalurans->where('id', $monitoringPenyaluran->id)->first()->penyebab_tidak_tepat_jumlah }}</textarea></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>