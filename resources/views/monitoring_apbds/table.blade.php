<form class="input-group col-sm-4 float-right mb-2">
    <input class="form-control text-sm" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda..." />
    <div class="input-group-append">
        <button class="btn btn-success">Cari</button>
    </div>
</form>

<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="monitoringApbds-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 150px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th colspan="4">Pendapatan Daerah</th>
                <th colspan="6">Belanja Daerah</th>
                <th colspan="2">Pembiayaan Daerah</th>
                <th rowspan="2" style="min-width: 250px;">SiLPA</th>
                <th rowspan="2" colspan="3">Action</th>
            </tr>
            <tr>
                <th style="min-width: 250px;">Total</th>
                <th style="min-width: 250px;">PAD</th>
                <th style="min-width: 250px;">Transfer</th>
                <th style="min-width: 250px;">Lainnya</th>
                <th style="min-width: 250px;">Total</th>
                <th style="min-width: 250px;">Pegawai</th>
                <th style="min-width: 250px;">Barang dan Jasa</th>
                <th style="min-width: 250px;">Modal</th>
                <th style="min-width: 250px;">Hibah</th>
                <th style="min-width: 250px;">Lainnya</th>
                <th style="min-width: 250px;">Penerimaan Pembiayaan</th>
                <th style="min-width: 250px;">Pengeluaran Pembiayaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftarPemdas as $daftarPemda)
            <tr>
                <td rowspan="5">{{ $loop->iteration }}</td>
                <td rowspan="5">{{ $daftarPemda->nama_pemda }}</td>
                @foreach($monitoringApbds->where('nama_pemda', $daftarPemda->nama_pemda) as $monitoringApbd)
                @for($tahun = 2020; $tahun <= 2024; $tahun++)
                <td class="text-center">{{ $tahun }}</td>
                <td>{{ $monitoringApbd->pendapatan_daerah }}</td>
                <td>{{ $monitoringApbd->pendapatan_pad }}</td>
                <td>{{ $monitoringApbd->pendapatan_transfer }}</td>
                <td>{{ $monitoringApbd->pendapatan_lainnya }}</td>
                <td>{{ $monitoringApbd->belanja_daerah }}</td>
                <td>{{ $monitoringApbd->belanja_pegawai }}</td>
                <td>{{ $monitoringApbd->belanja_barjas }}</td>
                <td>{{ $monitoringApbd->belanja_modal }}</td>
                <td>{{ $monitoringApbd->belanja_hibah }}</td>
                <td>{{ $monitoringApbd->belanja_lainnya }}</td>
                <td>{{ $monitoringApbd->penerimaan_pembiayaan }}</td>
                <td>{{ $monitoringApbd->pengeluaran_pembiayaan }}</td>
                <td>{{ $monitoringApbd->silpa }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringApbds.edit', [$monitoringApbd->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endfor
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>