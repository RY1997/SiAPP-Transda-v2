<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $monitoringPenggunaans->first()->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $monitoringPenggunaans->first()->nama_pemda }}" readonly>
</div>

<div class="col-sm-12 mt-2">
    <h5>A. Informasi Penggunaan</h5>
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="jenis_tkd" id="jenis_tkd" class="form-control" value="{{ $monitoringPenggunaans->first()->jenis_tkd }}" readonly>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tipe_tkd', 'Sifat TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tipe_tkd" id="tipe_tkd" class="form-control" value="{{ $monitoringPenggunaans->first()->tipe_tkd }}" readonly>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" name="bidang_tkd" type="text" id="bidang_tkd" value="{{ $monitoringPenggunaans->first()->bidang_tkd }}" readonly>
</div>

<!-- Penggunaan Tkd Field -->
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Uraian</th>
                    <th width="200">Jenis Belanja</th>
                    <th width="200">Anggaran</th>
                    <th width="200">Realisasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringPenggunaans as $monitoringPenggunaan)
                @if ($monitoringPenggunaan->jenis_tkd == 'Dana Alokasi Khusus')
                <tr>
                    <td rowspan="2">{{ $monitoringPenggunaan->uraian }}</td>
                    <td>Jumlah Kontrak</td>
                    <td><input class="form-control" step="1" name="jml_kontrak_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->jml_kontrak }}" placeholder="Jumlah Kontrak"></td>
                    <td><input class="form-control" step="0.01" name="nilai_kontrak_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->nilai_kontrak }}" placeholder="Nilai Kontrak"></td>
                </tr>
                <tr>
                    <td>Nilai Penggunaan</td>
                    <td><input class="form-control" step="0.01" name="anggaran_na_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->anggaran_na }}"></td>
                    <td><input class="form-control" step="0.01" name="realisasi_na_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->realisasi_na }}"></td>
                </tr>
                @else
                <tr>
                    <td rowspan="5">{{ $monitoringPenggunaan->uraian }}</td>
                    <td>Belanja Barang dan Jasa</td>
                    <td><input class="form-control" step="0.01" name="anggaran_barjas_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->anggaran_barjas }}"></td>
                    <td><input class="form-control" step="0.01" name="realisasi_barjas_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->realisasi_barjas }}"></td>
                </tr>
                <tr>
                    <td>Belanja Pegawai</td>
                    <td><input class="form-control" step="0.01" name="anggaran_pegawai_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->anggaran_pegawai }}"></td>
                    <td><input class="form-control" step="0.01" name="realisasi_pegawai_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->realisasi_pegawai }}"></td>
                </tr>
                <tr>
                    <td>Belanja Modal</td>
                    <td><input class="form-control" step="0.01" name="anggaran_modal_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->anggaran_modal }}"></td>
                    <td><input class="form-control" step="0.01" name="realisasi_modal_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->realisasi_modal }}"></td>
                </tr>
                <tr>
                    <td>Belanja Hibah</td>
                    <td><input class="form-control" step="0.01" name="anggaran_hibah_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->anggaran_hibah }}"></td>
                    <td><input class="form-control" step="0.01" name="realisasi_hibah_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->realisasi_hibah }}"></td>
                </tr>
                <tr>
                    <td>Belanja Lainnya</td>
                    <td><input class="form-control" step="0.01" name="anggaran_lainnya_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->anggaran_lainnya }}"></td>
                    <td><input class="form-control" step="0.01" name="realisasi_lainnya_{{ $monitoringPenggunaan->id }}" type="number" value="{{ $monitoringPenggunaans->where('id', $monitoringPenggunaan->id)->first()->realisasi_lainnya }}"></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>