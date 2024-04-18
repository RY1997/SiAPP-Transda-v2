<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="kebijakanOtsuses-table">
        <thead class="table-info">
            <tr>
                <th width="50">#</th>
                <th width="150">Nama Pemda</th>
                <th width="100">Tahun</th>
                <th width="150">Jenis TKD</th>
                <th width="200">Dasar Penetapan</th>
                <th width="100">Tgl Penetapan</th>
                <th width="300">Simpulan Penetapan</th>
                <th width="50">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kebijakanOtsuses as $kebijakanOtsus)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kebijakanOtsus->nama_pemda }}</td>
                <td>{{ $kebijakanOtsus->tahun }}</td>
                <td>{{ $kebijakanOtsus->jenis_tkd }}</td>
                <td>{{ $kebijakanOtsus->dasar_penetapan }}</td>
                <td>{{ $kebijakanOtsus->tgl_penetapan != NULL ? $kebijakanOtsus->tgl_penetapan->format('d M Y') : '' }}</td>
                <td>{{ $kebijakanOtsus->simpulan_penetapan }}</td>
                <td>
                    <div class='btn-group'>                        
                        <a href="{{ route('kebijakanOtsuses.edit', [$kebijakanOtsus->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $kebijakanOtsuses])
        </div>
    </div>
</div>