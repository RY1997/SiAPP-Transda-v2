<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="evaluasiRengars-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>Tahun</th>
                <th>Nama Pemda</th>
                <th>Nilai Anggaran</th>
                <th>Nilai Realisasi</th>
                <th>Status Isian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suratTugas as $suratTugas)
            @foreach([2023, 2024] as $tahun)
            <tr>
                <td>{{ $tahun }}</td>
                <td>{{ $suratTugas->nama_pemda }}</td>
                <td>{{ $evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('nilai_anggaran') }}</td>
                <td>{{ $evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('nilai_realisasi') }}</td>
                <td>{{ $evaluasiRengars->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->whereNull('relevansi_subkegiatan')->count() ? 'Belum Lengkap' : 'Lengkap' }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiRengars/'.$suratTugas->id.'/'.$tahun) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>