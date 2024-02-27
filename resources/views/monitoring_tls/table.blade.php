<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="monitoringTls-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Tahun</th>
                <th>Kelompok Permasalahan</th>
                <th>Uraian Permasalahan</th>
                <th>Nilai Permasalahan</th>
                <th>Uraian Rekomendasi</th>
                <th>Uraian TL</th>
                <th>Nilai TL</th>
                <th>Simpulan TL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($monitoringTls->count() > 0)
            @foreach($monitoringTls as $monitoringTl)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringTl->nama_pemda }}</td>
                <td>{{ $monitoringTl->tahun }}</td>
                <td>{{ $monitoringTl->kelompok_permasalahan }}</td>
                <td>{{ $monitoringTl->uraian_permasalahan }}</td>
                <td>{{ $monitoringTl->nilai_permasalahan }}</td>
                <td>{{ $monitoringTl->uraian_rekomendasi }}</td>
                <td>{{ $monitoringTl->uraian_tl }}</td>
                <td>{{ $monitoringTl->nilai_tl }}</td>
                <td>{{ $monitoringTl->simpulan_tl }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringTls.destroy', $monitoringTl->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringTls.show', [$monitoringTl->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringTls.edit', [$monitoringTl->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="11" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>