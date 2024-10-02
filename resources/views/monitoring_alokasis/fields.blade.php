<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="tahun" type="text" id="tahun" value="{{ $monitoringAlokasis->first()->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="nama_pemda" type="text" id="nama_pemda" value="{{ $monitoringAlokasis->first()->nama_pemda }}" readonly>
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="jenis_tkd" type="text" id="jenis_tkd" value="{{ $monitoringAlokasis->first()->jenis_tkd }}" readonly>
</div>

<!-- Tipe Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tipe_tkd', 'Sifat TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="tipe_tkd" type="text" id="tipe_tkd" value="{{ $monitoringAlokasis->first()->tipe_tkd }}" readonly>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="bidang_tkd" type="text" id="bidang_tkd" value="{{ $monitoringAlokasis->first()->bidang_tkd }}" readonly>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            @if ($monitoringAlokasis->first()->jenis_tkd == 'Dana Alokasi Khusus')
            <thead class="thead-light">
                <tr>
                    <th width="100">Subbidang TKD</th>
                    <th width="100">Uraian</th>
                    <th width="200">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringAlokasis as $monitoringAlokasi)
                <tr>
                    <td rowspan="5">{{ $monitoringAlokasi->uraian }}</td>
                    <td>Nilai Usulan Rencana Kegiatan (RK) (Rp)</td>
                    <td><input class="form-control" step="0.01" name="rk_usulan_{{ $monitoringAlokasi->id }}" type="number" value="{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->rk_usulan }}"></td>
                </tr>
                <tr>
                    <td>Rencana Kegiatan (RK) yang disetujui (Rp)</td>
                    <td><input class="form-control" step="0.01" name="rk_disetujui_{{ $monitoringAlokasi->id }}" type="number" value="{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->rk_disetujui }}"></td>
                </tr>
                <tr>
                    <td>Nilai Alokasi</td>
                    <td><input class="form-control" step="0.01" name="alokasi_tkd_{{ $monitoringAlokasi->id }}" type="number" value="{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->alokasi_tkd }}"></td>
                </tr>
                <tr>
                    <td>Nilai Alokasi Periode Sebelumnya yang Disalurkan pada Periode Ini</td>
                    <td><input class="form-control" step="0.01" name="alokasi_tkd_sebelumnya_{{ $monitoringAlokasi->id }}" type="number" value="{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->alokasi_tkd_sebelumnya }}"></td>
                </tr>
                <tr>
                    <td>Keterangan Alokasi</td>
                    <td><textarea class="form-control" rows="3" name="penyebab_tidak_tepat_jumlah_{{ $monitoringAlokasi->id }}">{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->penyebab_tidak_tepat_jumlah }}</textarea></td>
                </tr>
                @endforeach
            </tbody>
            @else
            <thead class="thead-light">
                <tr>
                    <th width="100">Subbidang TKD</th>
                    <th width="100">Uraian</th>
                    <th width="200">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringAlokasis as $monitoringAlokasi)
                <tr>
                    <td colspan="3">{{ $monitoringAlokasi->uraian }}</td>
                    <td>Nilai Alokasi</td>
                    <td><input class="form-control" step="0.01" name="alokasi_tkd_{{ $monitoringAlokasi->id }}" type="number" value="{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->alokasi_tkd }}"></td>
                </tr>
                <tr>
                    <td>Nilai Alokasi Periode Sebelumnya yang Disalurkan pada Periode Ini</td>
                    <td><input class="form-control" step="0.01" name="alokasi_tkd_sebelumnya_{{ $monitoringAlokasi->id }}" type="number" value="{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->alokasi_tkd_sebelumnya }}"></td>
                </tr>
                <tr>
                    <td>Keterangan Alokasi</td>
                    <td><textarea class="form-control" rows="3" name="penyebab_tidak_tepat_jumlah_{{ $monitoringAlokasi->id }}">{{ $monitoringAlokasis->where('id', $monitoringAlokasi->id)->first()->penyebab_tidak_tepat_jumlah }}</textarea></td>
                </tr>
                @endforeach
            </tbody>
            @endif
        </table>
    </div>
</div>