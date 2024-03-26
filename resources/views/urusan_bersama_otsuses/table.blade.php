<div class="table-responsive">
    <table class="table table-bordered text-sm" id="urusanBersamaOtsuses-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Urusan Bersama</th>
                <th>Anggaran Tahun 2024</th>
                <th>Anggaran Tahun 2023</th>
            </tr>
        </thead>
        <tbody>
            @foreach($urusanBersamaOtsuses2024 as $urusanBersamaOtsus2024)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $urusanBersamaOtsus2024->first()->nama_pemda }}</td>
                <td>{{ $urusanBersamaOtsus2024->urusan_subkegiatan }}</td>
                <td class="text-right">0,00</td>
                <td class="text-right">0,00</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>