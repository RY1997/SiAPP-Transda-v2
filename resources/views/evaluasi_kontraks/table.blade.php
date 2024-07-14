<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiKontraks-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 150px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th colspan="2">Kontrak</th>
                <th colspan="2">Nilai K.KN</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th style="min-width: 100px;">Jumlah</th>
                <th style="min-width: 200px;">Nilai</th>
                <th style="min-width: 200px;">Ketidaktepatan Pelaksanaan</th>
                <th style="min-width: 200px;">Ketidakmanfaatan Output</th>
            </tr>
        </thead>
        <tbody>
            @if ($suratTugas->count() > 0)
            @foreach($suratTugas as $st)
            @foreach([2023, 2024] as $tahun)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $st->nama_pemda }}</td>
                <td>{{ $tahun }}</td>
                <td>{{ number_format($st->{"kontrak{$tahun}"}, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($st->{"nilai_kontrak{$tahun}"}, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($st->{"nilai_masalah{$tahun}"}, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($st->{"nilai_manfaat{$tahun}"}, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiKontraks/'.$st->id.'/'.$tahun) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
            @else
            <tr>
                <td colspan="8" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $suratTugas])
        </div>
    </div>
</div>