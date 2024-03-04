<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="evaluasiIndikators-table">
        <thead class="text-center bg-secondary">
            <tr>
                <td>#</td>
                <th style="min-width: 150px;">Nama Pemda</th>
                <th style="min-width: 100px;">Tahun</th>
                <th style="min-width: 150px;">Uraian Indikator</th>
                <th style="min-width: 100px;">Target</th>
                <th style="min-width: 100px;">Realisasi</th>
                <th style="min-width: 100px;">Cutoff Capaian</th>
                <th style="min-width: 100px;">Sumber Data</th>
                <th style="min-width: 200px;">Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiIndikators->count() > 0)
            @foreach($evaluasiIndikators as $evaluasiIndikator)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiIndikator->nama_pemda }}</td>
                <td>{{ $evaluasiIndikator->tahun }}</td>
                <td>{{ $evaluasiIndikator->uraian_indikator }}</td>
                <td>{{ $evaluasiIndikator->target }}</td>
                <td>{{ $evaluasiIndikator->realisasi }}</td>
                <td>{{ $evaluasiIndikator->cutoff_capaian }}</td>
                <td>{{ $evaluasiIndikator->sumber_data }}</td>
                <td>{{ $evaluasiIndikator->keterangan }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiIndikators.edit', [$evaluasiIndikator->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>