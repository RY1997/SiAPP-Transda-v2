<div class="table-responsive card mb-0">
    <table class="table text-center m-0" id="evaluasiPrioritas-table">
        <thead class="thead-light">
            <tr>
                <th width="50">#</th>
                <th width="50">Bidang DAK</th>
                <th width="50">Subbidang DAK</th>
                <th width="50">Nama SKPD</th>
                <th width="250">Nama Program</th>
                <th width="250">Nama Kegiatan</th>
                <th width="150">Nilai Anggaran</th>
                <th width="150">Nilai Realisasi</th>
                <th width="150">Status Pemanfaatan</th>
                <th width="100">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($evaluasiPrioritas->count() > 0)
            @foreach($evaluasiPrioritas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->bidang_tkd }}</td>
                <td>{{ $item->subbidang_tkd }}</td>
                <td>{{ $item->nama_skpd }}</td>
                <td class="text-left">{{ $item->nama_program }}</td>
                <td class="text-left">{{ $item->nama_kegiatan }}</td>
                <td class="text-right">{{ number_format($item->nilai_anggaran, 2, ',', '.') }}</td>
                <td class="text-right">{{ number_format($item->nilai_realisasi, 2, ',', '.') }}</td>
                <td>
                    {!! ($item->prioritas_kegiatan == NULL ? '<span class="badge badge-sm bg-gradient-danger mb-1 text-white">Belum Diuji</span>' : '') !!}
                    {!! ($item->prioritas_kegiatan == 'Dimanfaatkan' ? '<span class="badge badge-sm bg-gradient-success mb-1">Dimanfaatkan</span>' : '') !!}
                    {!! ($item->prioritas_kegiatan == 'Tidak Dimanfaatkan' ? '<span class="badge badge-sm bg-gradient-warning mb-1">Tidak Dimanfaatkan</span>' : '') !!}
                </td>
                <td>
                    {!! Form::open(['route' => ['evaluasiKeberlanjutans.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evaluasiKeberlanjutans.edit', [$item->id]) }}" class="btn btn-sm btn-warning">
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">Tidak ada data</td>
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