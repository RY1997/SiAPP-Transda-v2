<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringApbds-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2" width="50">#</th>
                <th rowspan="2" width="150">Nama Pemda</th>
                <th rowspan="2" width="100">Tahun</th>
                <th colspan="2">Anggaran</th>
                <th colspan="2">Realisasi</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th width="200">Pendapatan Daerah</th>
                <th width="200">Belanja Daerah</th>
                <th width="200">Pendapatan Daerah</th>
                <th width="200">Belanja Daerah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringApbds as $monitoringApbd)
            <tr>
                @if ($monitoringApbd->tahun == '2020')
                <td rowspan="5" class="text-center">{{ ceil($loop->iteration / 5 + ($page > 0 ? ($page - 1) : 0) * 5) }}</td>
                <td rowspan="5">{{ $monitoringApbd->nama_pemda }}</td>
                @endif
                <td class="text-center">{{ $monitoringApbd->tahun }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_pad + $monitoringApbd->pendapatan_transfer + $monitoringApbd->pendapatan_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_pegawai + $monitoringApbd->belanja_barjas + $monitoringApbd->belanja_modal + $monitoringApbd->belanja_hibah + $monitoringApbd->belanja_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->rpendapatan_pad + $monitoringApbd->rpendapatan_transfer + $monitoringApbd->rpendapatan_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->rbelanja_pegawai + $monitoringApbd->rbelanja_barjas + $monitoringApbd->rbelanja_modal + $monitoringApbd->rbelanja_hibah + $monitoringApbd->rbelanja_lainnya, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringApbds.edit', $monitoringApbd->id) }}" class='btn btn-sm btn-warning'>
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
            @include('adminlte-templates::common.paginate', ['records' => $monitoringApbds])
        </div>
    </div>
</div>