<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringHibahs-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Jumlah Keberadaan IO</th>
                <th>Rata-Rata Capaian</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringImmediateOutcomes as $monitoringImmediateOutcome)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringImmediateOutcome->nama_pemda }}</td>
                <td>{{ $monitoringImmediateOutcome->total_keberadaan }}</td>
                <td>{{ number_format($monitoringImmediateOutcome->rerata_capaian,2,',','.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringImmediateOutcomes.edit', [$monitoringImmediateOutcome->id]) }}"
                            class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>