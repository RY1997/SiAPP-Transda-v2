<div class="table-responsive">
    <table class="table m-0" id="silpaOtsuses-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Nilai Silpa</th>
        <th>Dianggarkan Relevan</th>
        <th>Dianggarkan Tidak Relevan</th>
        <th>Tidak Dianggarkan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($silpaOtsuses as $silpaOtsus)
            <tr>
                <td>{{ $silpaOtsus->tahun }}</td>
            <td>{{ $silpaOtsus->kode_pwk }}</td>
            <td>{{ $silpaOtsus->nama_pemda }}</td>
            <td>{{ $silpaOtsus->jenis_tkd }}</td>
            <td>{{ $silpaOtsus->nilai_silpa }}</td>
            <td>{{ $silpaOtsus->dianggarkan_relevan }}</td>
            <td>{{ $silpaOtsus->dianggarkan_tidak_relevan }}</td>
            <td>{{ $silpaOtsus->tidak_dianggarkan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['silpaOtsuses.destroy', $silpaOtsus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('silpaOtsuses.show', [$silpaOtsus->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('silpaOtsuses.edit', [$silpaOtsus->id]) }}"
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
