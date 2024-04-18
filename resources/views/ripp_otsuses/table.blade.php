<div class="table-responsive">
    <table class="table table-bordered text-sm" id="rippOtsuses-table">
        <thead class="table-info">
            <tr>
                <th width="50">#</th>
                <th width="150">Nama Pemda</th>
                <th width="300">Item Ripp</th>
                <th width="300">Uraian Ripp</th>
                <th width="300">Penyebab Ripp</th>
                <th width="50">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rippOtsuses as $rippOtsus)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $rippOtsus->nama_pemda }}</td>
                <td>{{ $rippOtsus->item_ripp }}</td>
                <td>{{ $rippOtsus->uraian_ripp }}</td>
                <td>{{ $rippOtsus->penyebab_ripp }}</td>
                <td class="text-center">
                    <div class='btn-group'>                        
                        <a href="{{ route('rippOtsuses.edit', [$rippOtsus->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>