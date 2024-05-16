<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="ppbr-table">
        <thead class="table-info">
            <tr>
                <th>#</th>
                <th>Nama Pemda</th>                
                <th>Total Alokasi</th>
                <th>Ranking Alokasi</th>
                <th>Capaian IPM</th>
                <th>Ranking IPM</th>
                <th>Skor Risiko</th>
                <th>Pertimbangan Perwakilan</th>
                <th>Sampel Uji Petik</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            @if($ppbr->count() > 0)
            @foreach($ppbr as $ppbrItem)
            <tr class="{{ $ppbrItem->uji_petik == 'Ya' ? 'bg-light-success' : '' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ppbrItem->nama_pemda }}</td>
                <td>{{ $ppbrItem->alokasi }}</td>
                <td>{{ $ppbrItem->rank_risiko_1 }}</td>
                <td>{{ $ppbrItem->capaian_ipm }}</td>
                <td>{{ $ppbrItem->rank_risiko_2 }}</td>
                <td>{{ $ppbrItem->rank_risiko_total }}</td>
                <td>{{ $ppbrItem->ket_pwk }}</td>
                <td>{!! ($ppbrItem->uji_petik == 'Ya' ? '<span class="badge rounded-pill text-bg-success mb-1">Ya</span>' : '<span class="badge rounded-pill text-bg-danger mb-1">Tidak</span>') !!}</td>
                <!-- <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('ppbrs.edit', [$ppbrItem->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td> -->
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="9" class="text-center">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="card-footer clearfix">
        <div class="float-right d-flex justify-content-center">
            @include('adminlte-templates::common.paginate', ['records' => $ppbr])
        </div>
    </div>
</div>