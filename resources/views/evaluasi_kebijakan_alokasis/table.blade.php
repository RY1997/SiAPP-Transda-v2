<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiKebijakanAlokasis-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <!-- <th>Tahun</th> -->
                <th>Jenis DBH</th>
                <th>Dasar Penetapan Alokasi</th>
                <th>Perhitungan Realisasi</th>
                <th>Rekonsiliasi Triwulanan</th>
                <th>Keterlibatan Pemda Penghasil</th>
                <th>Keberadaan Kebijakan</th>
                <th>Nomor Kebijakan</th>
                <th>Tgl Kebijakan</th>
                <th>Ringkasan Kebijakan</th>
                <th>Kesesuaian dengan Kebijakan Pusat</th>
                <th>Memuat Pengalokasian ke Masing-Masing OPD</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiKebijakanAlokasis->count() > 0)
            @foreach($evaluasiKebijakanAlokasis as $evaluasiKebijakanAlokasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->nama_pemda }}</td>
                <!-- <td>{{ $evaluasiKebijakanAlokasi->tahun }}</td> -->
                <td>{{ $evaluasiKebijakanAlokasi->bidang_tkd }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->dasar_penetapan }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->perhitungan_realisasi }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->rekon_triwulanan }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->keterlibatan_penghasil }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->keberadaan_kebijakan }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->nomor_kebijakan }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->tgl_kebijakan }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->uraian_kebijakan }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->kesesuaian_pusat }}</td>
                <td>{{ $evaluasiKebijakanAlokasi->alokasi_opd }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKebijakanAlokasis.edit', [$evaluasiKebijakanAlokasi->id]) }}"
                            class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="14">Surat Tugas Belum Diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>