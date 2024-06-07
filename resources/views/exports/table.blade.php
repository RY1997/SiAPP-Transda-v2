<div class="card mb-0">
    <table class="table small text-center align-middle m-0" id="exports-table">
        <thead class="table-info">
            <tr>
                <th width="5%">#</th>
                <th width="30%">Kode Perwakilan</th>
                <th width="30%">Nama Pemda</th>
                <th width="35%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($suratTugas->count() > 0)
            @foreach($suratTugas as $st)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $st->kode_pwk }}</td>
                <td>{{ $st->nama_pemda }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-secondary rounded-start" href="{{ route('kertasKerja.progres') }}">
                            Progres Isian
                        </a>
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
                <td colspan="4">Surat Tugas belum diinput</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>