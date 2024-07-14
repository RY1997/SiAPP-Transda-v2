<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="rippOtsuses-table">
        <thead class="thead-light">
            <tr>
                <th width="50">#</th>
                <th width="150">Nama Pemda</th>
                <th width="300">Item RIPP</th>
                <th width="300">Uraian RIPP</th>
                <th width="300">Penyebab</th>
                <th width="50">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($rippOtsuses->count() > 0)
            @foreach($rippOtsuses as $rippOtsus)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $rippOtsus->nama_pemda }}</td>
                <td class="text-left">{{ $rippOtsus->item_ripp }}</td>
                <td class="text-left">{{ $rippOtsus->uraian_ripp }}</td>
                <td class="text-left">{{ $rippOtsus->penyebab_ripp }}</td>
                <td>
                    <div class='btn-group'>                        
                        <a href="{{ route('rippOtsuses.edit', [$rippOtsus->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6">Menu Pengujian Khusus Perwakilan BPKP Papua dan Papua Barat</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            
        </div>
    </div>
</div>