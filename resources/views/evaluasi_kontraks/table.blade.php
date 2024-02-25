<div class="table-responsive">
    <table class="table" id="evaluasiKontraks-table">
        <thead>
        <tr>
            <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Tahun</th>
        <th>Jenis Tkd</th>
        <th>Nomor Kontrak</th>
        <th>Tanggal Kontrak</th>
        <th>Uraian Kontrak</th>
        <th>Program</th>
        <th>Kegiatan</th>
        <th>Target Output</th>
        <th>Satuan Output</th>
        <th>Jenis Kontrak</th>
        <th>Lokasi</th>
        <th>Nama Opd</th>
        <th>Nama Rekanan</th>
        <th>Tgl Lelang</th>
        <th>Masa Kontrak</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Nilai Kontrak</th>
        <th>Sisa Nilai Kontrak</th>
        <th>Penyebab Pembayaran</th>
        <th>No Bast</th>
        <th>Tgl Bast</th>
        <th>Realisasi Bast</th>
        <th>Persen Fisik</th>
        <th>Penyebab Realisasi</th>
        <th>Uji Petik</th>
        <th>Keterangan</th>
        <th>Target Omspan</th>
        <th>Target Auditor</th>
        <th>Realisasi Omspan</th>
        <th>Realisasi Auditor</th>
        <th>Fisik Omspan</th>
        <th>Fisik Auditor</th>
        <th>Nilai Laporan</th>
        <th>Nilai Auditor</th>
        <th>Masalah Pelaksanaan</th>
        <th>Masalah1</th>
        <th>Uraian Masalah1</th>
        <th>Masalah2</th>
        <th>Uraian Masalah2</th>
        <th>Masalah3</th>
        <th>Uraian Masalah3</th>
        <th>Masalah4</th>
        <th>Uraian Masalah4</th>
        <th>Masalah5</th>
        <th>Uraian Masalah5</th>
        <th>Masalah6</th>
        <th>Uraian Masalah6</th>
        <th>Masalah7</th>
        <th>Uraian Masalah7</th>
        <th>Masalah8</th>
        <th>Uraian Masalah8</th>
        <th>Masalah Pemanfaatan</th>
        <th>Manfaat1</th>
        <th>Uraian Manfaat1</th>
        <th>Manfaat2</th>
        <th>Uraian Manfaat2</th>
        <th>Manfaat3</th>
        <th>Uraian Manfaat3</th>
        <th>Manfaat4</th>
        <th>Uraian Manfaat4</th>
        <th>Manfaat5</th>
        <th>Uraian Manfaat5</th>
        <th>Manfaat6</th>
        <th>Uraian Manfaat6</th>
        <th>Manfaat7</th>
        <th>Uraian Manfaat7</th>
        <th>Manfaat8</th>
        <th>Uraian Manfaat8</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($evaluasiKontraks as $evaluasiKontrak)
            <tr>
                <td>{{ $evaluasiKontrak->kode_pwk }}</td>
            <td>{{ $evaluasiKontrak->nama_pemda }}</td>
            <td>{{ $evaluasiKontrak->tahun }}</td>
            <td>{{ $evaluasiKontrak->jenis_tkd }}</td>
            <td>{{ $evaluasiKontrak->nomor_kontrak }}</td>
            <td>{{ $evaluasiKontrak->tanggal_kontrak }}</td>
            <td>{{ $evaluasiKontrak->uraian_kontrak }}</td>
            <td>{{ $evaluasiKontrak->program }}</td>
            <td>{{ $evaluasiKontrak->kegiatan }}</td>
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
            <td>{{ $evaluasiKontrak->sisa_nilai_kontrak }}</td>
            <td>{{ $evaluasiKontrak->penyebab_pembayaran }}</td>
            <td>{{ $evaluasiKontrak->no_bast }}</td>
            <td>{{ $evaluasiKontrak->tgl_bast }}</td>
            <td>{{ $evaluasiKontrak->realisasi_bast }}</td>
            <td>{{ $evaluasiKontrak->persen_fisik }}</td>
            <td>{{ $evaluasiKontrak->penyebab_realisasi }}</td>
            <td>{{ $evaluasiKontrak->uji_petik }}</td>
            <td>{{ $evaluasiKontrak->keterangan }}</td>
            <td>{{ $evaluasiKontrak->target_omspan }}</td>
            <td>{{ $evaluasiKontrak->target_auditor }}</td>
            <td>{{ $evaluasiKontrak->realisasi_omspan }}</td>
            <td>{{ $evaluasiKontrak->realisasi_auditor }}</td>
            <td>{{ $evaluasiKontrak->fisik_omspan }}</td>
            <td>{{ $evaluasiKontrak->fisik_auditor }}</td>
            <td>{{ $evaluasiKontrak->nilai_laporan }}</td>
            <td>{{ $evaluasiKontrak->nilai_auditor }}</td>
            <td>{{ $evaluasiKontrak->masalah_pelaksanaan }}</td>
            <td>{{ $evaluasiKontrak->masalah1 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah1 }}</td>
            <td>{{ $evaluasiKontrak->masalah2 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah2 }}</td>
            <td>{{ $evaluasiKontrak->masalah3 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah3 }}</td>
            <td>{{ $evaluasiKontrak->masalah4 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah4 }}</td>
            <td>{{ $evaluasiKontrak->masalah5 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah5 }}</td>
            <td>{{ $evaluasiKontrak->masalah6 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah6 }}</td>
            <td>{{ $evaluasiKontrak->masalah7 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah7 }}</td>
            <td>{{ $evaluasiKontrak->masalah8 }}</td>
            <td>{{ $evaluasiKontrak->uraian_masalah8 }}</td>
            <td>{{ $evaluasiKontrak->masalah_pemanfaatan }}</td>
            <td>{{ $evaluasiKontrak->manfaat1 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat1 }}</td>
            <td>{{ $evaluasiKontrak->manfaat2 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat2 }}</td>
            <td>{{ $evaluasiKontrak->manfaat3 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat3 }}</td>
            <td>{{ $evaluasiKontrak->manfaat4 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat4 }}</td>
            <td>{{ $evaluasiKontrak->manfaat5 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat5 }}</td>
            <td>{{ $evaluasiKontrak->manfaat6 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat6 }}</td>
            <td>{{ $evaluasiKontrak->manfaat7 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat7 }}</td>
            <td>{{ $evaluasiKontrak->manfaat8 }}</td>
            <td>{{ $evaluasiKontrak->uraian_manfaat8 }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['evaluasiKontraks.destroy', $evaluasiKontrak->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKontraks.show', [$evaluasiKontrak->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('evaluasiKontraks.edit', [$evaluasiKontrak->id]) }}"
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
