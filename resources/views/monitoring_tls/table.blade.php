<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringTls-table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>
                <!-- <th>Tahun</th> -->
                <th>Kelompok Permasalahan</th>
                <th>Dampak Permasalahan</th>
                <!-- <th>Nilai Permasalahan</th> -->
                <th>Penyebab Permasalahan</th>
                <!-- <th>Tindak Lanjut</th> -->
                <!-- <th>Nilai TL</th> -->
                <th>Simpulan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($monitoringTls->count() > 0)
            @foreach($monitoringTls as $monitoringTl)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringTl->nama_pemda }}</td>
                <!-- <td>{{ $monitoringTl->tahun }}</td> -->
                <td>{{ $monitoringTl->kelompok_permasalahan }}</td>
                <td>{{ $monitoringTl->uraian_permasalahan }}</td>
                <!-- <td>{{ $monitoringTl->nilai_permasalahan }}</td> -->
                <td>{{ $monitoringTl->uraian_rekomendasi }}</td>
                <!-- <td>{{ $monitoringTl->uraian_tl }}</td> -->
                <!-- <td>{{ $monitoringTl->nilai_tl }}</td> -->
                <td>{{ $monitoringTl->simpulan_tl }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringTls.edit', [$monitoringTl->id]) }}" class='btn btn-sm btn-warning'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
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
            @include('adminlte-templates::common.paginate', ['records' => $monitoringTls])
        </div>
    </div>
</div>