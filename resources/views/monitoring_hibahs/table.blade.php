<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="monitoringHibahs-table">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Nama Pemda</th>
                <th rowspan="2">Tahun</th>
                <th colspan="3">Pinjaman Luar Negeri yang Diterushibahkan</th>
                <th colspan="3">Hibah Luar Negeri yang Diterushibahkan</th>
                <th colspan="3">Penerimaan Dalam Negeri yang DIhibahkan</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th>Alokasi</th>
                <th>Penyaluran</th>
                <th>Penggunaan</th>
                <th>Alokasi</th>
                <th>Penyaluran</th>
                <th>Penggunaan</th>
                <th>Alokasi</th>
                <th>Penyaluran</th>
                <th>Penggunaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitoringHibahs->where('tahun', '2023') as $monitoringHibah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $monitoringHibah->nama_pemda }}</td>
                <td>{{ $monitoringHibah->tahun }}</td>
                <td>{{ $monitoringHibah->uraian_hibah }}</td>
                <td>{{ number_format($monitoringHibahs->where('tahun', $monitoringHibah->tahun)->where('uraian_hibah', 'Pinjaman Luar Negeri yang Diterushibahkan')->first()->alokasi_hibah,2,',','.') }}</td>
                <td>{{ number_format($monitoringHibahs->where('tahun', $monitoringHibah->tahun)->where('uraian_hibah', 'Hibah Luar Negeri yang Diterushibahkan')->first()->alokasi_hibah,2,',','.') }}</td>
                <td>{{ number_format($monitoringHibahs->where('tahun', $monitoringHibah->tahun)->where('uraian_hibah', 'Penerimaan Dalam Negeri yang DIhibahkan')->first()->alokasi_hibah,2,',','.') }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('monitoringHibahs.edit', [$monitoringHibah->id]) }}"
                            class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $monitoringHibahs])
        </div>
    </div>
</div>