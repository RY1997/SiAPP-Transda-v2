<form class="input-group col-sm-4 float-right mb-2">
    <input class="form-control text-sm" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda..." />
    <div class="input-group-append">
        <button class="btn btn-success">Cari</button>
    </div>
</form>

<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="monitoringPenyalurans-table">
        <thead class="table-info">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 150px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th colspan="5">Jenis TKD</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th style="min-width: 250px;">Dana Otonomi Khusus</th>
                <th style="min-width: 250px;">Dana Tambahan Infrastruktur</th>
                <th style="min-width: 250px;">Dana Alokasi Umum</th>
                <th style="min-width: 250px;">Dana Alokasi Khusus</th>
                <th style="min-width: 250px;">Dana Bagi Hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftarPemdas as $daftarPemda)
            <tr>
                <td rowspan="5" class="text-center">{{ $loop->iteration }}</td>
                <td rowspan="5">{{ $daftarPemda->nama_pemda }}</td>
                @for($tahun = 2020; $tahun <= 2024; $tahun++)
                <td class="text-center">{{ $tahun }}</td>
                <td>{{ $monitoringPenyalurans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->where('jenis_tkd', 'Otsus')->sum('penyaluran_tkd') }}</td>
                <td>{{ $monitoringPenyalurans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->where('jenis_tkd', 'DTI')->sum('penyaluran_tkd') }}</td>
                <td>{{ $monitoringPenyalurans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->where('jenis_tkd', 'DAU')->sum('penyaluran_tkd') }}</td>
                <td>{{ $monitoringPenyalurans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->where('jenis_tkd', 'DAK')->sum('penyaluran_tkd') }}</td>
                <td>{{ $monitoringPenyalurans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->where('jenis_tkd', 'DBH')->sum('penyaluran_tkd') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('monitoringPenyalurans/'.$daftarPemda->id.'/'.$tahun) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endfor
            </tr>
            @endforeach
        </tbody>
    </table>
</div>