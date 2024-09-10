<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiRengars-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <th>Tahun</th>
                <th>Nilai Anggaran</th>
                <th>Nilai Realisasi</th>
                <th>Status Isian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiPrioritas->count() > 0)
            @foreach($evaluasiPrioritas as $item)
            @foreach([2023, 2024] as $tahun)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_pemda }}</td>
                <td>{{ $tahun }}</td>
                <td class="text-right">{{ number_format($item->{"nilai_anggaran{$tahun}"}, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($item->{"nilai_realisasi{$tahun}"}, 2, ',', '.') }}</td>
                <td>
                    @if ($item->{"nilai_anggaran{$tahun}"} > 0)
                    {{ $item->{"jumlah_prioritas{$tahun}"} > 0 ? 'Belum Lengkap' : 'Lengkap' }}
                    @else
                    Belum ada data
                    @endif
                </td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('evaluasiPrioritas/'.$item->id.'?tahun='.$tahun) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
            @else
            <tr>
                <td colspan="7" class="text-center">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $evaluasiPrioritas])
        </div>
    </div>
</div>