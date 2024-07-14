<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="urusanBersamaOtsuses-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Urusan Bersama</th>
                <th>Anggaran Tahun 2023</th>
                <th>Anggaran Tahun 2024</th>
            </tr>
        </thead>
        <tbody>
            @if (Auth::user()->role == 'Admin' || Auth::user()->kode_pwk == 'PW26' || Auth::user()->kode_pwk == 'PW27')
            @if ($urusanBersamaOtsuses->count() > 0)
            @foreach($urusanBersamaOtsuses as $urusanBersamaOtsus)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $urusanBersamaOtsus->nama_pemda }}</td>
                <td>{{ $urusanBersamaOtsus->urusan_subkegiatan }}</td>
                <td class="text-right">{{ number_format($urusanBersamaOtsus->total_anggaran_2023, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($urusanBersamaOtsus->total_anggaran_2024, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5">Belum ada data</td>
            </tr>
            @endif
            @else
            <tr>
                <td colspan="5">Menu Pengujian Khusus Perwakilan BPKP Provinsi Papua dan Papua Barat</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>