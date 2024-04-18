<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="monitoringApbds-table">
        <thead class="table-info">
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
                @if ($monitoringApbd->tahun == '2020')
                <td rowspan="5" class="text-center">{{ ceil($loop->iteration / 5 + ($page > 0 ? ($page - 1) : 0) * 5) }}</td>
                <td rowspan="5">{{ $monitoringApbd->nama_pemda }}</td>
                @endif
                <td class="text-center">{{ $monitoringApbd->tahun }}</td>
                <td class="text-right">{{ $monitoringApbd->pendapatan_daerah > 1 ? number_format($monitoringApbd->pendapatan_daerah, 2, ',', '.') : number_format($monitoringApbd->pendapatan_pad + $monitoringApbd->pendapatan_transfer + $monitoringApbd->pendapatan_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_pad, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_transfer, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringApbd->pendapatan_lainnya, 2, ',', '.') }}</td>
                <td class="text-right">{{ $monitoringApbd->belanja_daerah > 1 ? number_format($monitoringApbd->belanja_daerah, 2, ',', '.') : number_format($monitoringApbd->belanja_pegawai + $monitoringApbd->belanja_barjas + $monitoringApbd->belanja_modal + $monitoringApbd->belanja_hibah + $monitoringApbd->belanja_lainnya, 2, ',', '.') }}</td>
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
                        <a href="{{ route('monitoringApbds.edit', $monitoringApbd->id) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $monitoringApbds])
        </div>
    </div>
</div>