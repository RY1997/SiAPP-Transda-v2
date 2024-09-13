<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="tahun" type="text" id="tahun" value="{{ $dataUmumTkds->first()->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="nama_pemda" type="text" id="nama_pemda" value="{{ $dataUmumTkds->first()->nama_pemda }}" readonly>
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input class="form-control" maxlength="255" name="jenis_tkd" type="text" id="jenis_tkd" value="{{ $dataUmumTkds->first()->jenis_tkd }}" readonly>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="50">Sifat</th>
                    <th width="50">Bidang</th>
                    <th width="100">Uraian</th>
                    <th width="400">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataUmumTkds as $dataUmumTkd)
                <tr>
                    <td rowspan="4">{{ $dataUmumTkd->tipe_tkd }}</td>
                    <td rowspan="4">{{ $dataUmumTkd->bidang_tkd }}</td>
                    <td>Alokasi</td>
                    <td><input class="form-control" step="0.01" name="alokasi_tkd_{{ $dataUmumTkd->id }}" type="number" value="{{ $dataUmumTkds->where('id', $dataUmumTkd->id)->first()->alokasi_tkd }}"></td>
                </tr>
                <tr>
                    <td>Penyaluran (Net)</td>
                    <td><input class="form-control" step="0.01" name="penyaluran_tkd_{{ $dataUmumTkd->id }}" type="number" value="{{ $dataUmumTkds->where('id', $dataUmumTkd->id)->first()->penyaluran_tkd }}"></td>
                </tr>
                <tr>
                    <td>Penganggaran</td>
                    <td><input class="form-control" step="0.01" name="penganggaran_tkd_{{ $dataUmumTkd->id }}" type="number" value="{{ $dataUmumTkds->where('id', $dataUmumTkd->id)->first()->penganggaran_tkd }}"></td>
                </tr>
                <tr>
                    <td>Penggunaan</td>
                    <td><input class="form-control" step="0.01" name="penggunaan_tkd_{{ $dataUmumTkd->id }}" type="number" value="{{ $dataUmumTkds->where('id', $dataUmumTkd->id)->first()->penggunaan_tkd }}"></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>