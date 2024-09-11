<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $io_id->nama_pemda }}" readonly>
</div>

<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="200">Uraian Bidang</th>
                    <th width="100">Keberadaan IO</th>
                    <th width="100">Target</th>
                    <th width="100">Capaian</th>
                    <th width="200">Penyebab/Kendala</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monitoringImmediateOutcomes as $monitoringImmediateOutcome)
                <tr>
                    <td>{{ $monitoringImmediateOutcome->bidang_tkd }}</td>
                    <td>
                        <select class="form-control custom-select" name="keberadaan_io_{{ $monitoringImmediateOutcome->id }}">
                            <option value="" selected>Pilih</option>
                            <option value="Ada" {{ !empty($monitoringImmediateOutcome) && $monitoringImmediateOutcome->subbidang_tkd == 'Ada' ? 'selected' : '' }}>Ada</option>
                            <option value="Tidak Ada" {{ !empty($monitoringImmediateOutcome) && $monitoringImmediateOutcome->subbidang_tkd == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                        </select>
                    </td>
                    <td><input class="form-control" step="0.01" name="target_{{ $monitoringImmediateOutcome->id }}" type="number" value="{{ $monitoringImmediateOutcomes->where('id', $monitoringImmediateOutcome->id)->first()->target }}"></td>
                    <td><input class="form-control" step="0.01" name="capaian_{{ $monitoringImmediateOutcome->id }}" type="number" value="{{ $monitoringImmediateOutcomes->where('id', $monitoringImmediateOutcome->id)->first()->capaian }}"></td>
                    <td><textarea class="form-control" rows="3" name="penyebab_{{ $monitoringImmediateOutcome->id }}">{{ $monitoringImmediateOutcomes->where('id', $monitoringImmediateOutcome->id)->first()->penyebab }}</textarea></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>