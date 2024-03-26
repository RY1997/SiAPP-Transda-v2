<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="evaluasiRengars-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th width="50">#</th>
                <th width="250">Nama Program</th>
                <th width="250">Nama Kegiatan</th>
                <th>Urusan Bersama</th>
                <th width="150">Nilai Anggaran</th>
                <th width="150">Nilai Realisasi</th>
                <th width="100">Relevansi Subkegiatan</th>
                <th width="100">Pelaksanaan Subkegiatan</th>
                <th width="80">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiRengars->count() > 0)
            @foreach($evaluasiRengars as $evaluasiRengar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    {{ $evaluasiRengar->kode_program }}<br>
                    {{ $evaluasiRengar->nama_program }}
                </td>
                <td>
                    {{ $evaluasiRengar->kode_kegiatan }}<br>
                    {{ $evaluasiRengar->nama_kegiatan }}
                </td>
                <td>{{ $evaluasiRengar->urusan_subkegiatan }}</td>
                <td class="text-right">{{ number_format($evaluasiRengar->total_anggaran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($evaluasiRengar->total_realisasi, 2, ',', '.') }}</td>
                <td>{{ $evaluasiRengar->relevansi_subkegiatan }}</td>
                <td>{{ $evaluasiRengar->pelaksanaan_subkegiatan }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiRengars.edit', [$evaluasiRengar->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"> Uji </i>
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
</div>