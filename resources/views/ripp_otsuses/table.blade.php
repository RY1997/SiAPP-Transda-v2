<div class="table-responsive">
    <table class="table m-0" id="rippOtsuses-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Item Ripp</th>
        <th>Uraian Ripp</th>
        <th>Penyebab Ripp</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rippOtsuses as $rippOtsus)
            <tr>
                <td>{{ $rippOtsus->tahun }}</td>
            <td>{{ $rippOtsus->kode_pwk }}</td>
            <td>{{ $rippOtsus->nama_pemda }}</td>
            <td>{{ $rippOtsus->jenis_tkd }}</td>
            <td>{{ $rippOtsus->item_ripp }}</td>
            <td>{{ $rippOtsus->uraian_ripp }}</td>
            <td>{{ $rippOtsus->penyebab_ripp }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['rippOtsuses.destroy', $rippOtsus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rippOtsuses.show', [$rippOtsus->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('rippOtsuses.edit', [$rippOtsus->id]) }}"
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
