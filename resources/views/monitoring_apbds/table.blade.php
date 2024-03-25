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
                <th rowspan="2" style="min-width: 200px;">SiLPA</th>
                <th rowspan="2" colspan="3">Action</th>
            </tr>
            <tr>
                <th style="min-width: 200px;">Total</th>
                <th style="min-width: 200px;">PAD</th>
                <th style="min-width: 200px;">Transfer</th>
                <th style="min-width: 200px;">Lainnya</th>
                <th style="min-width: 200px;">Total</th>
                <th style="min-width: 200px;">Pegawai</th>
                <th style="min-width: 200px;">Barang dan Jasa</th>
                <th style="min-width: 200px;">Modal</th>
                <th style="min-width: 200px;">Hibah</th>
                <th style="min-width: 200px;">Lainnya</th>
                <th style="min-width: 200px;">Penerimaan Pembiayaan</th>
                <th style="min-width: 200px;">Pengeluaran Pembiayaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringApbds as $monitoringApbd)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $monitoringApbd->nama_pemda }}</td>
                <td class="text-center">{{ $monitoringApbd->tahun }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_daerah, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_pad, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_transfer, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_daerah, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_pegawai, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_barjas, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_modal, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_hibah, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->belanja_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->penerimaan_pembiayaan, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pengeluaran_pembiayaan, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->silpa, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringApbds.edit', $monitoringApbd->id) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>