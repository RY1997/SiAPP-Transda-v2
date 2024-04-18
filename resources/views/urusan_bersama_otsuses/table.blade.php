<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="urusanBersamaOtsuses-table">
        <thead class="table-info">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Urusan Bersama</th>
                <th>Anggaran Tahun 2023</th>
                <th>Anggaran Tahun 2024</th>
            </tr>
        </thead>
        <tbody>
            @foreach($urusanBersamaOtsuses->groupBy('urusan_subkegiatan')->get() as $urusanBersamaOtsus)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $urusanBersamaOtsus->nama_pemda }}</td>
                <td>{{ $urusanBersamaOtsus->urusan_subkegiatan }}</td>
                <td class="text-end">{{ $urusanBersamaOtsuses->where('tahun', 2023)->where('urusan_subkegiatan', $urusanBersamaOtsus->urusan_subkegiatan)->sum('nilai_anggaran') }}</td>
                <td class="text-end">{{ $urusanBersamaOtsuses->where('tahun', 2024)->where('urusan_subkegiatan', $urusanBersamaOtsus->urusan_subkegiatan)->sum('nilai_anggaran') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>