<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="monitoringPenyalurans-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th rowspan="2" style="min-width: 100px;">Tahap Salur</th>
                <th rowspan="2" style="min-width: 100px;">Tanggal Penyaluran</th>
                <th rowspan="2" style="min-width: 250px;">Nilai Penyaluran</th>
                <th colspan="2">Ketepatan Waktu</th>
                <th colspan="2">Ketepatan Jumlah</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th style="width: 100px;">Simpulan</th>
                <th style="width: 300px;">Penyebab</th>
                <th style="width: 100px;">Simpulan</th>
                <th style="width: 300px;">Penyebab</th>
            </tr>
        </thead>
        <tbody>
            @if ($monitoringPenyalurans->count() > 0)
            @foreach($monitoringPenyalurans as $monitoringPenyaluran)
            <tr>
                <td>{{ $monitoringPenyaluran->tahap_salur }}</td>
                <td>{{ $monitoringPenyaluran->tgl_salur }}</td>
                <td>{{ $monitoringPenyaluran->penyaluran_tkd }}</td>
                <td>{{ $monitoringPenyaluran->tepat_waktu }}</td>
                <td>{{ $monitoringPenyaluran->penyebab_tidak_tepat_waktu }}</td>
                <td>{{ $monitoringPenyaluran->tepat_jumlah }}</td>
                <td>{{ $monitoringPenyaluran->penyebab_tidak_tepat_jumlah }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringPenyalurans.destroy', $monitoringPenyaluran->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringPenyalurans.edit', [$monitoringPenyaluran->id]) }}" class='btn btn-default btn-xs'>
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
                <td colspan="8" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>