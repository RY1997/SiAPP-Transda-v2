<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="evaluasiKontraks-table">
        <thead class="table-info">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2" style="min-width: 150px;">Nama Pemda</th>
                <th rowspan="2" style="min-width: 100px;">Tahun</th>
                <th colspan="2">Kontrak</th>
                <th colspan="2">Nilai K.KN</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>
                <th style="min-width: 100px;">Jumlah</th>
                <th style="min-width: 250px;">Nilai</th>
                <th style="min-width: 250px;">Ketidaktepatan Pelaksanaan</th>
                <th style="min-width: 250px;">Ketidakmanfaatan Output</th>
            </tr>
        </thead>
        <tbody>
            @if ($suratTugas->count() > 0)
            @foreach($suratTugas as $suratTugas)
            @foreach([2023, 2024] as $tahun)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $suratTugas->nama_pemda }}</td>
                <td class="text-center">{{ $tahun }}</td>
                <td class="text-center">{{ number_format($suratTugas->{"kontrak{$tahun}"}, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($suratTugas->{"nilai_kontrak{$tahun}"}, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($suratTugas->{"nilai_masalah{$tahun}"}, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($suratTugas->{"nilai_manfaat{$tahun}"}, 2, ',', '.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$tahun) }}" class='btn btn-default btn-xs'>
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
</div>