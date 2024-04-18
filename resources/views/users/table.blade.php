<div class="table-responsive card mb-0">
    <table class="table small text-center align-middle m-0" id="users-table">
        <thead class="table-info">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Peran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="text-start">{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-warning btn-xs'>
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
            @include('adminlte-templates::common.paginate', ['records' => $users])
        </div>
    </div>
</div>