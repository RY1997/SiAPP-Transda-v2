<div class="table-responsive">
    <table class="table m-0" id="urusanBersamaOtsuses-table">
        <thead>
        <tr>
            <th>Tahun</th>
        <th>Kode Pwk</th>
        <th>Nama Pemda</th>
        <th>Jenis Tkd</th>
        <th>Urusan Bersama</th>
        <th>Anggaran</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($urusanBersamaOtsuses as $urusanBersamaOtsus)
            <tr>
                <td>{{ $urusanBersamaOtsus->tahun }}</td>
            <td>{{ $urusanBersamaOtsus->kode_pwk }}</td>
            <td>{{ $urusanBersamaOtsus->nama_pemda }}</td>
            <td>{{ $urusanBersamaOtsus->jenis_tkd }}</td>
            <td>{{ $urusanBersamaOtsus->urusan_bersama }}</td>
            <td>{{ $urusanBersamaOtsus->anggaran }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['urusanBersamaOtsuses.destroy', $urusanBersamaOtsus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('urusanBersamaOtsuses.show', [$urusanBersamaOtsus->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('urusanBersamaOtsuses.edit', [$urusanBersamaOtsus->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
