<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="monitoringTls-table">
        <thead class="table-info">
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
                <th>Action</th>
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
                        <a href="{{ route('monitoringTls.edit', [$monitoringTl->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>