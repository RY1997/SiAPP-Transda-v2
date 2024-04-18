<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="evaluasiRengars-table">
        <thead class="table-info">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Tahun</th>
                <th>Nilai Anggaran</th>
                <th>Nilai Realisasi</th>
                <th>Status Isian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($suratTugas->count() > 0)
            @foreach($suratTugas as $suratTugas)
            @foreach([2023, 2024] as $tahun)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $suratTugas->nama_pemda }}</td>
                <td>{{ $tahun }}</td>
                <td class="text-right">{{ number_format($evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('nilai_anggaran'), 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('nilai_realisasi'), 2, ',', '.') }}</td>
                <td>
                    @if ($evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('nilai_anggaran') > 0)
                    {{ $evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->whereNull('relevansi_subkegiatan')->count() > 0 ? 'Belum Lengkap' : 'Lengkap' }}
                    @else
                    Belum ada data
                    @endif
                </td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiRengars/'.$suratTugas->id.'/'.$tahun) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
            @else
            <tr>
                <td colspan="7" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>