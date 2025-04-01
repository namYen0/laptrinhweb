@extends('header_footer')

@section('content')
    <main class="login-form">
        <div class="form-List">
            <h2>Danh sách user</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    <a href="#" class="prev">Previous</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="next">Next</a>
                </div>
            </div>
        </div>
    </main>
@endsection