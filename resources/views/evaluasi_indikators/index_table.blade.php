<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="evaluasiIndikators-table">
        <thead class="text-center bg-secondary">
            <tr>
                <td rowspan="2" width="50">#</td>
                <th rowspan="2" width="200">Nama Pemda</th>
                <th rowspan="2" width="250">Uraian Indikator</th>
                <th colspan="4">Capaian 2023</th>
                <th colspan="4">Capaian 2024</th>
                <th rowspan="2" width="50">Action</th>
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
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $evaluasiIndikator->nama_pemda }}</td>
                <td>{{ $evaluasiIndikator->uraian_indikator }}</td>
                <td class="text-center">{{ number_format($evaluasiIndikator->target, 2, ',', '.') }}</td>
                <td class="text-center">{{ number_format($evaluasiIndikator->realisasi, 2, ',', '.') }}</td>
                <td class="text-center">{{ $evaluasiIndikator->target > 0 ? (number_format($evaluasiIndikator->realisasi / $evaluasiIndikator->target * 100, 2, ',', '.')) : '0,00' }}</td>
                <td>{{ $evaluasiIndikator->keterangan }}</td>
                <td class="text-center">{{ number_format($evaluasiIndikators->where('tahun', '2024')->sum('target'), 2, ',', '.') }}</td>
                <td class="text-center">{{ number_format($evaluasiIndikators->where('tahun', '2024')->sum('realisasi'), 2, ',', '.') }}</td>
                <td class="text-center">{{ $evaluasiIndikators->where('tahun', '2024')->sum('target') > 0 ? (number_format($evaluasiIndikators->where('tahun', '2024')->sum('realisasi') / $evaluasiIndikators->where('tahun', '2024')->sum('target') * 100, 2, ',', '.')) : '0,00' }}</td>
                <td>{{ $evaluasiIndikator->keterangan }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiIndikators.edit', [$evaluasiIndikator->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>