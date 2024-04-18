<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="monitoringAlokasis-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Tipe Tkd</th>
        <th>Bidang Tkd</th>
        <th>Alokasi Tkd</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringAlokasis as $monitoringAlokasi)
            <tr>
                <td>{{ $monitoringAlokasi->tahun }}</td>
            <td>{{ $monitoringAlokasi->kode_pwk }}</td>
            <td>{{ $monitoringAlokasi->nama_pemda }}</td>
            <td>{{ $monitoringAlokasi->jenis_tkd }}</td>
            <td>{{ $monitoringAlokasi->tipe_tkd }}</td>
            <td>{{ $monitoringAlokasi->bidang_tkd }}</td>
            <td>{{ $monitoringAlokasi->alokasi_tkd }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringAlokasis.destroy', $monitoringAlokasi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringAlokasis.show', [$monitoringAlokasi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringAlokasis.edit', [$monitoringAlokasi->id]) }}"
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
