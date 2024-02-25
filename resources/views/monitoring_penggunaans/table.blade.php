<div class="table-responsive">
    <table class="table" id="monitoringPenggunaans-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Bidang Tkd</th>
        <th>Alokasi Id</th>
        <th>Penggunaan Tkd</th>
        <th>Penyebab Kurang Guna</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringPenggunaans as $monitoringPenggunaan)
            <tr>
                <td>{{ $monitoringPenggunaan->tahun }}</td>
            <td>{{ $monitoringPenggunaan->kode_pwk }}</td>
            <td>{{ $monitoringPenggunaan->nama_pemda }}</td>
            <td>{{ $monitoringPenggunaan->jenis_tkd }}</td>
            <td>{{ $monitoringPenggunaan->bidang_tkd }}</td>
            <td>{{ $monitoringPenggunaan->alokasi_id }}</td>
            <td>{{ $monitoringPenggunaan->penggunaan_tkd }}</td>
            <td>{{ $monitoringPenggunaan->penyebab_kurang_guna }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringPenggunaans.destroy', $monitoringPenggunaan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringPenggunaans.show', [$monitoringPenggunaan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringPenggunaans.edit', [$monitoringPenggunaan->id]) }}"
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
