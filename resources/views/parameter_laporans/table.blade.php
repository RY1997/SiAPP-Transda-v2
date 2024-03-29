<div class="table-responsive table-bordered">
    <table class="table m-0" id="parameterLaporans-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Jenis TKD</th>
                <th>Bidang TKD</th>
                <th>Tahun Laporan</th>
                <th>Nama Laporan</th>
                <th>Batas Penyampaian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parameterLaporans as $parameterLaporan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $parameterLaporan->jenis_tkd }}</td>
                <td>{{ $parameterLaporan->bidang_tkd }}</td>
                <td>{{ $parameterLaporan->tahun_laporan }}</td>
                <td>{{ $parameterLaporan->nama_laporan }}</td>
                <td>{{ $parameterLaporan->batas_penyampaian }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['parameterLaporans.destroy', $parameterLaporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parameterLaporans.edit', [$parameterLaporan->id]) }}" class='btn btn-default btn-xs'>
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