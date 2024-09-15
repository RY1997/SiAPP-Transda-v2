<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringApbds-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Nama Pemda</th>
                <th rowspan="2">Uraian Indikator</th>
                <th colspan="5">Capaian Indikator Makro</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
                <th>2023</th>
                <th>2024</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringIndikatorMakrosIndex as $monitoringIndikatorMakro)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringIndikatorMakro->nama_pemda }}</td>
                <td>{{ $monitoringIndikatorMakro->uraian_indikator }}</td>
                <td>{{ $monitoringIndikatorMakros->where('tahun', '2020')->where('nama_pemda', $monitoringIndikatorMakro->nama_pemda)->where('uraian_indikator', $monitoringIndikatorMakro->uraian_indikator)->first()->capaian_4 }}</td>
                <td>{{ $monitoringIndikatorMakros->where('tahun', '2021')->where('nama_pemda', $monitoringIndikatorMakro->nama_pemda)->where('uraian_indikator', $monitoringIndikatorMakro->uraian_indikator)->first()->capaian_4 }}</td>
                <td>{{ $monitoringIndikatorMakros->where('tahun', '2022')->where('nama_pemda', $monitoringIndikatorMakro->nama_pemda)->where('uraian_indikator', $monitoringIndikatorMakro->uraian_indikator)->first()->capaian_4 }}</td>
                <td>{{ $monitoringIndikatorMakros->where('tahun', '2023')->where('nama_pemda', $monitoringIndikatorMakro->nama_pemda)->where('uraian_indikator', $monitoringIndikatorMakro->uraian_indikator)->first()->capaian_4 }}</td>
                <td>{{ $monitoringIndikatorMakros->where('tahun', '2024')->where('nama_pemda', $monitoringIndikatorMakro->nama_pemda)->where('uraian_indikator', $monitoringIndikatorMakro->uraian_indikator)->first()->capaian_4 }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringIndikatorMakros.edit', [$monitoringIndikatorMakro->id]) }}"
                            class='btn btn-sm btn-warning'>
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
            @include('adminlte-templates::common.paginate', ['records' => $monitoringIndikatorMakrosIndex])
        </div>
    </div>
</div>