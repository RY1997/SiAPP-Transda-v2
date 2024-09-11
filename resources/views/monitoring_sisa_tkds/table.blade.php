<div class="table-responsive">
    <table class="table" id="monitoringSisaTkds-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Tipe Tkd</th>
        <th>Bidang Tkd</th>
        <th>Subbidang Tkd</th>
        <th>Uraian</th>
        <th>Sisa Dana Tkd</th>
        <th>Dianggarkan Kembali</th>
        <th>Tidak Dianggarkan Kembali</th>
        <th>Penyebab</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringSisaTkds as $monitoringSisaTkd)
            <tr>
                <td>{{ $monitoringSisaTkd->tahun }}</td>
            <td>{{ $monitoringSisaTkd->kode_pwk }}</td>
            <td>{{ $monitoringSisaTkd->nama_pemda }}</td>
            <td>{{ $monitoringSisaTkd->jenis_tkd }}</td>
            <td>{{ $monitoringSisaTkd->tipe_tkd }}</td>
            <td>{{ $monitoringSisaTkd->bidang_tkd }}</td>
            <td>{{ $monitoringSisaTkd->subbidang_tkd }}</td>
            <td>{{ $monitoringSisaTkd->uraian }}</td>
            <td>{{ $monitoringSisaTkd->sisa_dana_tkd }}</td>
            <td>{{ $monitoringSisaTkd->dianggarkan_kembali }}</td>
            <td>{{ $monitoringSisaTkd->tidak_dianggarkan_kembali }}</td>
            <td>{{ $monitoringSisaTkd->penyebab }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringSisaTkds.destroy', $monitoringSisaTkd->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringSisaTkds.show', [$monitoringSisaTkd->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringSisaTkds.edit', [$monitoringSisaTkd->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
