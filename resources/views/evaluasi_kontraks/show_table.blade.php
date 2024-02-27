<div class="table-responsive table-bordered text-xs">
    <table class="table m-0" id="evaluasiKontrak-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th colspan="14">Data Kontrak</th>
                <th colspan="4">Penyelesaian Kontrak</th>
                <th rowspan="2">Keterangan</th>
                <th colspan="2">Nilai K.KN</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th style="min-width: 150px;">Nomor Kontrak</th>
                <th style="min-width: 50px;">Tanggal Kontrak</th>
                <th style="min-width: 150px;">Uraian Kontrak</th>
                <th style="min-width: 50px;">Target Output</th>
                <th style="min-width: 50px;">Satuan Output</th>
                <th style="min-width: 50px;">Jenis Kontrak</th>
                <th style="min-width: 100px;">Lokasi</th>
                <th style="min-width: 100px;">Nama Opd</th>
                <th style="min-width: 100px;">Nama Rekanan</th>
                <th style="min-width: 50px;">Tgl Lelang</th>
                <th style="min-width: 50px;">Masa Kontrak</th>
                <th style="min-width: 50px;">Tanggal Mulai</th>
                <th style="min-width: 50px;">Tanggal Selesai</th>
                <th style="min-width: 250px;">Nilai Kontrak</th>
                <th style="min-width: 150px;">No Bast</th>
                <th style="min-width: 50px;">Tgl Bast</th>
                <th style="min-width: 50px;">Realisasi Bast</th>
                <th style="min-width: 50px;">Persen Fisik</th>
                <th style="min-width: 100px;">Keterangan</th>
                <th style="min-width: 250px;">Ketidaktepatan Pelaksanaan</th>
                <th style="min-width: 250px;">Ketidakmanfaatan Output</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiKontraks->count() > 0)
            @foreach($evaluasiKontraks as $evaluasiKontrak)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiKontrak->nomor_kontrak }}</td>
                <td>{{ $evaluasiKontrak->tanggal_kontrak }}</td>
                <td>{{ $evaluasiKontrak->uraian_kontrak }}</td>
                <td>{{ $evaluasiKontrak->target_output }}</td>
                <td>{{ $evaluasiKontrak->satuan_output }}</td>
                <td>{{ $evaluasiKontrak->jenis_kontrak }}</td>
                <td>{{ $evaluasiKontrak->lokasi }}</td>
                <td>{{ $evaluasiKontrak->nama_opd }}</td>
                <td>{{ $evaluasiKontrak->nama_rekanan }}</td>
                <td>{{ $evaluasiKontrak->tgl_lelang }}</td>
                <td>{{ $evaluasiKontrak->masa_kontrak }}</td>
                <td>{{ $evaluasiKontrak->tanggal_mulai }}</td>
                <td>{{ $evaluasiKontrak->tanggal_selesai }}</td>
                <td>{{ $evaluasiKontrak->nilai_kontrak }}</td>
                <td>{{ $evaluasiKontrak->no_bast }}</td>
                <td>{{ $evaluasiKontrak->tgl_bast }}</td>
                <td>{{ $evaluasiKontrak->realisasi_bast }}</td>
                <td>{{ $evaluasiKontrak->persen_fisik }}</td>
                <td>{{ $evaluasiKontrak->keterangan }}</td>
                <td>{{ $evaluasiKontrak->masalah1 + $evaluasiKontrak->masalah2 + $evaluasiKontrak->masalah3 + $evaluasiKontrak->masalah4 + $evaluasiKontrak->masalah5 + $evaluasiKontrak->masalah6 + $evaluasiKontrak->masalah7 + $evaluasiKontrak->masalah8 }}</td>
                <td>{{ $evaluasiKontrak->manfaat1 + $evaluasiKontrak->manfaat2 + $evaluasiKontrak->manfaat3 + $evaluasiKontrak->manfaat4 + $evaluasiKontrak->manfaat5 + $evaluasiKontrak->manfaat6 + $evaluasiKontrak->manfaat7 + $evaluasiKontrak->manfaat8 }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiKontraks.destroy', $evaluasiKontrak->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKontraks.edit', [$evaluasiKontrak->id]) }}" class='btn btn-default btn-xs'>
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
                <td colspan="23">Tidak ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>