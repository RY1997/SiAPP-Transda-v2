<div class="table-responsive">
    <table class="table" id="monitoringTls-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Kelompok Permasalahan</th>
        <th>Uraian Permasalahan</th>
        <th>Nilai Permasalahan</th>
        <th>Uraian Rekomendasi</th>
        <th>Uraian Tl</th>
        <th>Nilai Tl</th>
        <th>Simpulan Tl</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringTls as $monitoringTl)
            <tr>
                <td>{{ $monitoringTl->tahun }}</td>
            <td>{{ $monitoringTl->kode_pwk }}</td>
            <td>{{ $monitoringTl->nama_pemda }}</td>
            <td>{{ $monitoringTl->jenis_tkd }}</td>
            <td>{{ $monitoringTl->kelompok_permasalahan }}</td>
            <td>{{ $monitoringTl->uraian_permasalahan }}</td>
            <td>{{ $monitoringTl->nilai_permasalahan }}</td>
            <td>{{ $monitoringTl->uraian_rekomendasi }}</td>
            <td>{{ $monitoringTl->uraian_tl }}</td>
            <td>{{ $monitoringTl->nilai_tl }}</td>
            <td>{{ $monitoringTl->simpulan_tl }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringTls.destroy', $monitoringTl->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringTls.show', [$monitoringTl->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringTls.edit', [$monitoringTl->id]) }}"
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
