<form class="input-group col-sm-4 float-right mb-2">
    <input class="form-control text-sm" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda..." />
    <div class="input-group-append">
        <button class="btn btn-success">Cari</button>
    </div>
</form>

<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="monitoringAlokasis-table">
        <thead class="text-center bg-secondary">
        <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 150px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th colspan="4">Pengelolaan TKD</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th style="min-width: 250px;">Alokasi</th>
                <th style="min-width: 250px;">Penyaluran</th>
                <th style="min-width: 250px;">Penganggaran</th>
                <th style="min-width: 250px;">Penggunaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftarPemdas as $daftarPemda)
            <tr>
                <td rowspan="5" class="text-center">{{ $loop->iteration }}</td>
                <td rowspan="5">{{ $daftarPemda->nama_pemda }}</td>
                @for($tahun = 2020; $tahun <= 2024; $tahun++)
                <td class="text-center">{{ $tahun }}</td>
                <td class="text-right">{{ number_format($monitoringAlokasis->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->sum('alokasi_tkd'), 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringPenyalurans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->sum('penyaluran_tkd'), 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringPenggunaans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->sum('anggaran_tkd'), 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringPenggunaans->where('nama_pemda', $daftarPemda->nama_pemda)->where('tahun', $tahun)->sum('realisasi_tkd'), 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('monitoringTrens/'.$daftarPemda->id.'/'.$tahun) }}" class='btn btn-default btn-xs'>
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