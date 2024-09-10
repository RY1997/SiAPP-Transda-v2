<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly']) !!}
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly']) !!}
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly']) !!}
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Bidang DAK</th>
                    <th width="100">Uraian</th>
                    <th width="200">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringSisaTkds as $monitoringSisaTkd)
                <tr>
                    <td rowspan="4">{{ $monitoringSisaTkd->uraian }}</td>
                    <td>Sisa DAK Fisik</td>
                    <td><input class="form-control" step="0.01" name="sisa_dana_tkd_{{ $monitoringSisaTkd->id }}" type="number" value="{{ $monitoringSisaTkds->where('id', $monitoringSisaTkd->id)->first()->sisa_dana_tkd }}"></td>
                </tr>
                <tr>
                    <td>Dianggarkan Kembali pada Tahun Berikutnya</td>
                    <td><input class="form-control" step="0.01" name="dianggarkan_kembali_{{ $monitoringSisaTkd->id }}" type="number" value="{{ $monitoringSisaTkds->where('id', $monitoringSisaTkd->id)->first()->dianggarkan_kembali }}"></td>
                </tr>
                <tr>
                    <td>Sisa yang Belum Dianggarkan Kembali</td>
                    <td><input class="form-control" step="0.01" name="tidak_dianggarkan_kembali_{{ $monitoringSisaTkd->id }}" type="number" value="{{ $monitoringSisaTkds->where('id', $monitoringSisaTkd->id)->first()->tidak_dianggarkan_kembali }}"></td>
                </tr>
                <tr>
                    <td>Penyebab Belum Dianggarkan</td>
                    <td><textarea class="form-control" rows="3" name="penyebab_{{ $monitoringSisaTkd->id }}">{{ $monitoringSisaTkds->where('id', $monitoringSisaTkd->id)->first()->penyebab }}"</textarea></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>