<div class="table-responsive">
    <table class="table" id="evaluasiLaporans-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Nama Laporan</th>
        <th>Keberadaan Laporan</th>
        <th>Nomor Laporan</th>
        <th>Tgl Laporan</th>
        <th>Tgl Penyampaian</th>
        <th>Penyebab Tidak Tepat Waktu</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($evaluasiLaporans as $evaluasiLaporan)
            <tr>
                <td>{{ $evaluasiLaporan->tahun }}</td>
            <td>{{ $evaluasiLaporan->kode_pwk }}</td>
            <td>{{ $evaluasiLaporan->nama_pemda }}</td>
            <td>{{ $evaluasiLaporan->jenis_tkd }}</td>
            <td>{{ $evaluasiLaporan->nama_laporan }}</td>
            <td>{{ $evaluasiLaporan->keberadaan_laporan }}</td>
            <td>{{ $evaluasiLaporan->nomor_laporan }}</td>
            <td>{{ $evaluasiLaporan->tgl_laporan }}</td>
            <td>{{ $evaluasiLaporan->tgl_penyampaian }}</td>
            <td>{{ $evaluasiLaporan->penyebab_tidak_tepat_waktu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiLaporans.destroy', $evaluasiLaporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiLaporans.show', [$evaluasiLaporan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('evaluasiLaporans.edit', [$evaluasiLaporan->id]) }}"
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
