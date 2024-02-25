<div class="table-responsive">
    <table class="table" id="monitoringApbds-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Belanja Daerah</th>
        <th>Belanja Pegawai</th>
        <th>Belanja Barjas</th>
        <th>Belanja Modal</th>
        <th>Belanja Hibah</th>
        <th>Belanja Lainnya</th>
        <th>Pendapatan Daerah</th>
        <th>Pendapatan Pad</th>
        <th>Pendapatan Transfer</th>
        <th>Pendapatan Lainnya</th>
        <th>Penerimaan Pembiayaan</th>
        <th>Pengeluaran Pembiayaan</th>
        <th>Silpa</th>
        <th>Silpa Tkd</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringApbds as $monitoringApbd)
            <tr>
                <td>{{ $monitoringApbd->tahun }}</td>
            <td>{{ $monitoringApbd->kode_pwk }}</td>
            <td>{{ $monitoringApbd->nama_pemda }}</td>
            <td>{{ $monitoringApbd->belanja_daerah }}</td>
            <td>{{ $monitoringApbd->belanja_pegawai }}</td>
            <td>{{ $monitoringApbd->belanja_barjas }}</td>
            <td>{{ $monitoringApbd->belanja_modal }}</td>
            <td>{{ $monitoringApbd->belanja_hibah }}</td>
            <td>{{ $monitoringApbd->belanja_lainnya }}</td>
            <td>{{ $monitoringApbd->pendapatan_daerah }}</td>
            <td>{{ $monitoringApbd->pendapatan_pad }}</td>
            <td>{{ $monitoringApbd->pendapatan_transfer }}</td>
            <td>{{ $monitoringApbd->pendapatan_lainnya }}</td>
            <td>{{ $monitoringApbd->penerimaan_pembiayaan }}</td>
            <td>{{ $monitoringApbd->pengeluaran_pembiayaan }}</td>
            <td>{{ $monitoringApbd->silpa }}</td>
            <td>{{ $monitoringApbd->silpa_tkd }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringApbds.destroy', $monitoringApbd->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringApbds.show', [$monitoringApbd->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringApbds.edit', [$monitoringApbd->id]) }}"
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
