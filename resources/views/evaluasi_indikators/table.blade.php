<div class="table-responsive">
    <table class="table" id="evaluasiIndikators-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Uraian Indikator</th>
        <th>Target</th>
        <th>Realisasi</th>
        <th>Cutoff Capaian</th>
        <th>Sumber Data</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($evaluasiIndikators as $evaluasiIndikator)
            <tr>
                <td>{{ $evaluasiIndikator->tahun }}</td>
            <td>{{ $evaluasiIndikator->kode_pwk }}</td>
            <td>{{ $evaluasiIndikator->nama_pemda }}</td>
            <td>{{ $evaluasiIndikator->uraian_indikator }}</td>
            <td>{{ $evaluasiIndikator->target }}</td>
            <td>{{ $evaluasiIndikator->realisasi }}</td>
            <td>{{ $evaluasiIndikator->cutoff_capaian }}</td>
            <td>{{ $evaluasiIndikator->sumber_data }}</td>
            <td>{{ $evaluasiIndikator->keterangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiIndikators.destroy', $evaluasiIndikator->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiIndikators.show', [$evaluasiIndikator->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('evaluasiIndikators.edit', [$evaluasiIndikator->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
