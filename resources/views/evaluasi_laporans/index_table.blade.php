<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="evaluasiLaporans-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Tahun</th>
                <th>Nama Pemda</th>
                <th>Jenis TKD</th>
                <th>Nama Laporan</th>
                <th>Keberadaan Laporan</th>
                <th>Nomor Laporan</th>
                <th>Tgl Laporan</th>
                <th>Penyebab Tidak Tepat Waktu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiLaporans->count() > 0)
            @foreach($evaluasiLaporans as $evaluasiLaporan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiLaporan->tahun }}</td>
                <td>{{ $evaluasiLaporan->nama_pemda }}</td>
                <td>{{ $evaluasiLaporan->jenis_tkd }}</td>
                <td>{{ $evaluasiLaporan->nama_laporan }}</td>
                <td>{{ $evaluasiLaporan->keberadaan_laporan }}</td>
                <td>{{ $evaluasiLaporan->nomor_laporan }}</td>
                <td>{{ $evaluasiLaporan->tgl_laporan }}</td>
                <td>{{ $evaluasiLaporan->penyebab_tidak_tepat_waktu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiLaporans.destroy', $evaluasiLaporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiLaporans.edit', [$evaluasiLaporan->id]) }}" class='btn btn-default btn-xs'>
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
                <td colspan="10" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>