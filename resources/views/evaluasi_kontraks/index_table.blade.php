<div class="table-responsive table-bordered text-sm">
    <table class="table m-0" id="evaluasiKontraks-table">
        <thead class="text-center bg-secondary">
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
                <td>{{ $tahun }}</td>
                <td>{{ $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->count() }}</td>
                <td>{{ $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('nilai_kontrak') }}</td>
                <td>{{
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah1') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah2') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah3') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah4') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah5') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah6') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah7') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('masalah8')
                     }}</td>
                <td>{{
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat1') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat2') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat3') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat4') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat5') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat6') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat7') +
                    $evaluasiKontraks->where('tahun', $tahun)->where('nama_pemda', $suratTugas->nama_pemda)->sum('manfaat8')
                     }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$tahun) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
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