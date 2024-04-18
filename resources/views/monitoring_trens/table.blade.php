<form class="input-group col-sm-4 float-right mb-2">
    <input class="form-control text-sm" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda..." />
    <div class="input-group-append">
        <button class="btn btn-success">Cari</button>
    </div>
</form>

<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="monitoringAlokasis-table">
        <thead class="table-info">
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
            @foreach($monitoringTrens as $monitoringTren)
            <tr>
                @if ($monitoringTren->tahun == $monitoringTren->first()->tahun)
                <td rowspan="5" class="text-center">{{ ceil($loop->iteration / 5 + ($page > 0 ? ($page - 1) : 0) * 5) }}</td>                
                <td rowspan="5">{{ $monitoringTren->nama_pemda }}</td>
                @endif
                <td class="text-center">{{ $monitoringTren->tahun }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_alokasi, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_penyaluran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_anggaran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($monitoringTren->total_realisasi, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringTrens.show', $monitoringTren->id) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>