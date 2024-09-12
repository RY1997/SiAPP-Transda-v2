<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="ppbr-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Provinsi</th>
                <th>Nama Pemda</th>
                <th>Uji Petik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($ppbr->count() > 0)
            @foreach($ppbr as $ppbrItem)
            <tr class="{{ $ppbrItem->uji_petik == 'Ya' ? 'bg-light-success' : '' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ppbrItem->nama_provinsi }}</td>
                <td>{{ $ppbrItem->nama_pemda }}</td>
                <td>{!! ($ppbrItem->uji_petik == 'Ya' ? '<span class="badge badge-sm bg-gradient-success mb-1 text-white">Ya</span>' : '<span class="badge badge-sm bg-gradient-danger mb-1 text-white">Tidak</span>') !!}</td>
                <td width="120">
                    @if (Auth::user()->role == 'Admin')
                    {!! Form::model($ppbrItem, ['route' => ['ppbrs.update', $ppbrItem->id], 'method' => 'patch']) !!}
                    <div class='btn-group'>
                        @if ($ppbrItem->uji_petik == 'Ya')
                        {!! Form::submit('Batalkan Uji Petik', ['class' => 'btn btn-danger btn-sm', 'name' => 'action', 'onclick' => 'return confirm("Apakah Anda yakin ingin membatalkan uji petik? Semua data terkait Penyaluran dan Penggunaan akan dihapus")']) !!}
                        @else
                        {!! Form::submit('Jadikan Uji Petik', ['class' => 'btn btn-primary btn-sm', 'name' => 'action', 'onclick' => 'return confirm("Apakah Anda yakin ingin menjadikan uji petik? Semua data terkait Penyaluran dan Penggunaan akan dihapus")']) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                    @endif
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $ppbr])
        </div>
    </div>
</div>