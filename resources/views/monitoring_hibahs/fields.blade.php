<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $hibah_id->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $hibah_id->nama_pemda }}" readonly>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Uraian Hibah Daerah</th>
                    <th width="100">Alokasi</th>
                    <th width="100">Penyaluran</th>
                    <th width="200">Penggunaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringHibahs as $monitoringHibah)
                <tr>
                    <td>{{ $monitoringHibah->uraian_hibah }}</td>
                    <td><input class="form-control" step="0.01" name="alokasi_hibah_{{ $monitoringHibah->id }}" type="number" value="{{ $monitoringHibahs->where('id', $monitoringHibah->id)->first()->alokasi_hibah }}"></td>
                    <td><input class="form-control" step="0.01" name="penyaluran_hibah_{{ $monitoringHibah->id }}" type="number" value="{{ $monitoringHibahs->where('id', $monitoringHibah->id)->first()->penyaluran_hibah }}"></td>
                    <td><input class="form-control" step="0.01" name="penggunaan_hibah_{{ $monitoringHibah->id }}" type="number" value="{{ $monitoringHibahs->where('id', $monitoringHibah->id)->first()->penggunaan_hibah }}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>