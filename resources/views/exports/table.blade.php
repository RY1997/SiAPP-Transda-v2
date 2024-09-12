<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiRengars-table">
        <thead class="thead-light">
            <tr>
                <th width="50">#</th>
                <th width="50">Kode Perwakilan</th>
                <th width="100">Nama Pemda</th>
                <th width="300">Nama Penugasan</th>
                <th width="100">Progres Monitoring</th>
                <th width="100">Progres Evaluasi</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($suratTugas->count() > 0)
            @foreach($suratTugas as $st)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $st->kode_pwk }}</td>
                <td>{{ $st->nama_pemda }}</td>
                <td>{{ $st->nama_penugasan }}</td>
                <td> XX,XX %</td>
                <td> XX,XX %</td>
                <td>
                    <div class="btn-group" role="group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kertas Kerja
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Data Umum</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Tren Pengelolaan TKD</a>
                                <a class="dropdown-item" href="#">Capaian Indikator Makro</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7">Surat Tugas belum diinput</td>
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