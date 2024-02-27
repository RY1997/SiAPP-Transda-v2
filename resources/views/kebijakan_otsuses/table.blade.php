<div class="table-responsive">
    <table class="table m-0" id="kebijakanOtsuses-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Dasar Penetapan</th>
        <th>Tgl Penetapan</th>
        <th>Simpulan Penetapan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kebijakanOtsuses as $kebijakanOtsus)
            <tr>
                <td>{{ $kebijakanOtsus->tahun }}</td>
            <td>{{ $kebijakanOtsus->kode_pwk }}</td>
            <td>{{ $kebijakanOtsus->nama_pemda }}</td>
            <td>{{ $kebijakanOtsus->jenis_tkd }}</td>
            <td>{{ $kebijakanOtsus->dasar_penetapan }}</td>
            <td>{{ $kebijakanOtsus->tgl_penetapan }}</td>
            <td>{{ $kebijakanOtsus->simpulan_penetapan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['kebijakanOtsuses.destroy', $kebijakanOtsus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kebijakanOtsuses.show', [$kebijakanOtsus->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('kebijakanOtsuses.edit', [$kebijakanOtsus->id]) }}"
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
