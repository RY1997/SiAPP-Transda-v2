<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="evaluasiIndikators-table">
        <thead class="table-info">
            <tr>
                <td rowspan="2" width="50">#</td>
                <th rowspan="2" width="200">Nama Pemda</th>
                <th rowspan="2" width="250">Uraian Indikator</th>
                <th colspan="4">Capaian 2023</th>
                <th colspan="4">Capaian 2024</th>
                <th rowspan="2" width="50">Aksi</th>
            </tr>
            <tr>
                <th width="100">Target</th>
                <th width="100">Realisasi</th>
                <th width="100">Capaian (%)</th>
                <th width="200">Penyebab Capaian Rendah</th>
                <th width="100">Target</th>
                <th width="100">Realisasi</th>
                <th width="100">Capaian (%)</th>
                <th width="200">Penyebab Capaian Rendah</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiIndikators->count() > 0)
            @foreach($evaluasiIndikators->where('tahun', '2023') as $evaluasiIndikator)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiIndikator->nama_pemda }}</td>
                <td>{{ $evaluasiIndikator->uraian_indikator }}</td>
                <td>{{ number_format($evaluasiIndikator->target, 2, ',', '.') }}</td>
                <td>{{ number_format($evaluasiIndikator->realisasi, 2, ',', '.') }}</td>
                <td>{{ $evaluasiIndikator->target > 0 ? (number_format($evaluasiIndikator->realisasi / $evaluasiIndikator->target * 100, 2, ',', '.')) : '0,00' }}%</td>
                <td>{{ $evaluasiIndikator->keterangan }}</td>
                <td>{{ number_format($evaluasiIndikators->where('tahun', '2024')->sum('target'), 2, ',', '.') }}</td>
                <td>{{ number_format($evaluasiIndikators->where('tahun', '2024')->sum('realisasi'), 2, ',', '.') }}</td>
                <td>{{ $evaluasiIndikators->where('tahun', '2024')->sum('target') > 0 ? (number_format($evaluasiIndikators->where('tahun', '2024')->sum('realisasi') / $evaluasiIndikators->where('tahun', '2024')->sum('target') * 100, 2, ',', '.')) : '0,00' }}%</td>
                <td>{{ $evaluasiIndikator->keterangan }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiIndikators.edit', [$evaluasiIndikator->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiIndikators])
        </div>
    </div>
</div>