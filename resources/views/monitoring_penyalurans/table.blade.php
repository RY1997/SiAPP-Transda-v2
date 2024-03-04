<div class="table-responsive">
    <table class="table m-0" id="monitoringPenyalurans-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Alokasi Id</th>
        <th>Tahap Salur</th>
        <th>Penyaluran Tkd</th>
        <th>Tepat Jumlah</th>
        <th>Penyebab Tidak Tepat Jumlah</th>
        <th>Tgl Salur</th>
        <th>Tepat Waktu</th>
        <th>Penyebab Tidak Tepat Waktu</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringPenyalurans as $monitoringPenyaluran)
            <tr>
                <td>{{ $monitoringPenyaluran->tahun }}</td>
            <td>{{ $monitoringPenyaluran->kode_pwk }}</td>
            <td>{{ $monitoringPenyaluran->nama_pemda }}</td>
            <td>{{ $monitoringPenyaluran->jenis_tkd }}</td>
            <td>{{ $monitoringPenyaluran->alokasi_id }}</td>
            <td>{{ $monitoringPenyaluran->tahap_salur }}</td>
            <td>{{ $monitoringPenyaluran->penyaluran_tkd }}</td>
            <td>{{ $monitoringPenyaluran->tepat_jumlah }}</td>
            <td>{{ $monitoringPenyaluran->penyebab_tidak_tepat_jumlah }}</td>
            <td>{{ $monitoringPenyaluran->tgl_salur }}</td>
            <td>{{ $monitoringPenyaluran->tepat_waktu }}</td>
            <td>{{ $monitoringPenyaluran->penyebab_tidak_tepat_waktu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringPenyalurans.destroy', $monitoringPenyaluran->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringPenyalurans.show', [$monitoringPenyaluran->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringPenyalurans.edit', [$monitoringPenyaluran->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
