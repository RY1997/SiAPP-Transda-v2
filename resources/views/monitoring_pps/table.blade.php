<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringApbds-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 150px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th rowspan="2" style="min-width: 100px;">Rerata Hasil Evaluasi UPP menurut Pedoman Permenpan RB Nomor 38 Tahun 2012</th>
                <th rowspan="2" style="min-width: 100px;">Rerata Hasil Evaluasi UPP menurut Pedoman Menpan RB Nomor 3 Tahun 2023</th>
                <th colspan="4">Rerata Hasil Evaluasi UPP menurut Pedoman Permendagri Nomor 59 Tahun 2021</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th style="min-width: 100px;">Pendidikan</th>
                <th style="min-width: 100px;">Kesehatan</th>
                <th style="min-width: 100px;">Pekerjaan Umum</th>
                <th style="min-width: 100px;">Perumahan Rakyat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringPps as $monitoringPp)
            <tr>
                @if ($monitoringPp->tahun == '2020')
                <td rowspan="5">{{ ceil($loop->iteration / 5 + ($page > 0 ? ($page - 1) : 0) * 5) }}</td>
                <td rowspan="5">{{ $monitoringPp->nama_pemda }}</td>
                @endif
                <td>{{ $monitoringPp->tahun }}</td>
                <td>{{ number_format($monitoringPp->evaluasi_upp_1, 2, ',', '.') }}</td>
                <td>{{ number_format($monitoringPp->evaluasi_upp_2, 2, ',', '.') }}</td>
                <td>{{ $monitoringPp->count_pendidikan_2 > 0 ? number_format($monitoringPp->count_pendidikan_1 / $monitoringPp->count_pendidikan_2 * 100, 2, ',', '.') : '0,00' }}</td>
                <td>{{ $monitoringPp->count_kesehatan_2 > 0 ? number_format($monitoringPp->count_kesehatan_1 / $monitoringPp->count_kesehatan_2 * 100, 2, ',', '.') : '0,00' }}</td>
                <td>{{ $monitoringPp->count_pu_2 > 0 ? number_format($monitoringPp->count_pu / $monitoringPp->count_pu_2 * 100, 2, ',', '.') : '0,00' }}</td>
                <td>{{ $monitoringPp->count_pr_2 > 0 ? number_format($monitoringPp->count_pr / $monitoringPp->count_pr_2 * 100, 2, ',', '.') : '0,00' }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringPps.edit', $monitoringPp->id) }}" class='btn btn-sm btn-warning'>
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
            @include('adminlte-templates::common.paginate', ['records' => $monitoringPps])
        </div>
    </div>
</div>