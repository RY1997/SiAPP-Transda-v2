<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="dataUmumTkds-table">
        <thead class="thead-light">
            <tr>
                <th width="50">#</th>
                <th width="200">Nama Pemda</th>
                <th width="100">Tahun</th>
                <th width="200">Alokasi</th>
                <th width="200">Penyaluran</th>
                <th width="200">Penganggaran</th>
                <th width="200">Penggunaan</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataUmumTkds as $dataUmumTkd)
            <tr>
                @if ($dataUmumTkd->tahun == 2023)
                <td rowspan="5">{{ ceil($loop->iteration / 2 + ($page > 0 ? ($page - 1) : 0) * 2) }}</td>
                <td rowspan="5">{{ $dataUmumTkd->nama_pemda }}</td>
                @endif
                <td class="text-right">{{ $dataUmumTkd->tahun }}</td>
                <td class="text-right">{{ number_format($dataUmumTkd->total_alokasi,2,',','.') }}</td>
                <td class="text-right">{{ number_format($dataUmumTkd->total_penyaluran,2,',','.') }}</td>
                <td class="text-right">{{ number_format($dataUmumTkd->total_penganggaran,2,',','.') }}</td>
                <td class="text-right">{{ number_format($dataUmumTkd->total_penggunaan,2,',','.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiDataUmumTkds.edit', [$dataUmumTkd->id]) }}"
                            class='btn btn-warning btn-sm'>
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
            @include('adminlte-templates::common.paginate', ['records' => $dataUmumTkds])
        </div>
    </div>
</div>