<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="monitoringPenggunaans-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th rowspan="2" style="min-width: 100px;">Tipe TKD</th>
                <th rowspan="2" style="min-width: 100px;">Bidang TKD</th>
                <th rowspan="2" style="min-width: 100px;">Alokasi</th>
                <th colspan="2">Penggunaan TKD</th>
                <th rowspan="2" style="min-width: 300px;">Penyebab Realisasi Rendah</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th style="min-width: 250px;">Anggaran</th>
                <th style="min-width: 250px;">Realisasi</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringPenggunaans->count() > 0)
            @foreach($monitoringPenggunaans as $monitoringPenggunaan)
            <tr>
                <td>{{ $monitoringPenggunaan->tipe_tkd }}</td>
                <td>{{ $monitoringPenggunaan->bidang_tkd }}</td>
                <td>Alokasi</td>
                <td>{{ number_format($monitoringPenggunaan->anggaran_tkd, 2, ',', '.') }}</td>
                <td>{{ number_format($monitoringPenggunaan->realisasi_tkd, 2, ',', '.') }}</td>
                <td>{{ $monitoringPenggunaan->penyebab_kurang_guna }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringPenggunaans.destroy', $monitoringPenggunaan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringPenggunaans.edit', [$monitoringPenggunaan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>