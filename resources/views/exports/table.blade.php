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
                <th width="300">Aksi</th>
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
                        <button class="btn btn-info rounded-0 dropdown-toggle" type="button" id="dropdownMonitoring" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Monitoring
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMonitoring" style="">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                        <button class="btn btn-success dropdown-toggle rounded-end" type="button" id="dropdownEvaluasi" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Evaluasi
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownEvaluasi" style="">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
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