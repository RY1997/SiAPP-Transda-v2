<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiRengars-table">
        <thead class="thead-light">
            <tr>
                <th width="50">#</th>
                <th width="50">Nama SKPD</th>
                <th width="250">Nama Program</th>
                <th width="250">Nama Kegiatan</th>
                <th width="150">Urusan Bersama</th>
                <th width="150">Nilai Anggaran</th>
                <th width="150">Nilai Realisasi</th>
                <th width="100">Relevansi Subkegiatan</th>
                <th width="100">Pelaksanaan Subkegiatan</th>
                <th width="100">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiRengars->count() > 0)
            @foreach($evaluasiRengars as $evaluasiRengar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiRengar->nama_skpd }}</td>
                <td class="text-left">
                    {{ $evaluasiRengar->kode_program }}<br>
                    {{ $evaluasiRengar->nama_program }}
                </td>
                <td class="text-left">
                    {{ $evaluasiRengar->kode_kegiatan }}<br>
                    {{ $evaluasiRengar->nama_kegiatan }}
                </td>
                <td>{{ $evaluasiRengar->urusan_subkegiatan }}</td>
                <td class="text-right">{{ number_format($evaluasiRengar->total_anggaran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($evaluasiRengar->total_realisasi, 2, ',', '.') }}</td>
                <td>
                    {!! ($evaluasiRengar->total_blm_relevan > 0 ? '<span class="badge badge-sm bg-gradient-danger mb-1 text-white">Belum Diuji</span>' : '') !!}
                    {!! ($evaluasiRengar->total_relevan > 0 ? '<span class="badge badge-sm bg-gradient-success mb-1">'.$evaluasiRengar->total_relevan.' Relevan</span>' : '') !!}
                    {!! ($evaluasiRengar->total_tdk_relevan > 0 ? '<span class="badge badge-sm bg-gradient-warning mb-1">'.$evaluasiRengar->total_tdk_relevan.' Tidak</span>' : '') !!}
                </td>
                <td>
                    {!! ($evaluasiRengar->total_blm_pelaksanaan > 0 ? '<span class="badge badge-sm bg-gradient-danger mb-1 text-white">Belum Diuji</span>' : '') !!}
                    {!! ($evaluasiRengar->total_pelaksanaan > 0 ? '<span class="badge badge-sm bg-gradient-success mb-1">'.$evaluasiRengar->total_pelaksanaan.' Dilaksanakan</span>' : '') !!}
                    {!! ($evaluasiRengar->total_tdk_pelaksanaan > 0 ? '<span class="badge badge-sm bg-gradient-warning mb-1">'.$evaluasiRengar->total_tdk_pelaksanaan.' Tidak</span>' : '') !!}
                </td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiRengars.edit', [$evaluasiRengar->id]) }}" class="btn btn-sm btn-warning">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="13">Tidak ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiRengars])
        </div>
    </div>
</div>