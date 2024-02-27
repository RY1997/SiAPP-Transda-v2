<div class="table-responsive table-bordered">
    <table class="table m-0" id="users-table">
        <thead class="text-center bg-secondary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #f4f6f9;">
            <form class="input-group col-sm-4 float-right mb-2">
                <td></td>
                <td><input class="form-control text-sm" type="text" name="name" value="{{ $search['name'] ?? NULL }}"/></td>
                <td><input class="form-control text-sm" type="text" name="username" value="{{ $search['username'] ?? NULL }}"/></td>
                <td></td>
                <td><button class="btn btn-success" hidden></button></td>
            </form>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>