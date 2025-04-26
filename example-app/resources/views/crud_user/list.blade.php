@extends('header_footer')

@section('content')
    <main class="login-form">
        <div class="form-List">
            <h2>Danh sách user</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Orders</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    @foreach($user->roles as $role)
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name . '-' }}
                                        </a>
                                    @endforeach
                                </th>
                                <th>
                                    <a href="{{ route('user.orders', ['id' => $user->id]) }}">View Orders</a>
                                </th>                                
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               <!-- Phân trang -->
            <div class="pagination">
                {{-- Previous Link --}}
                @if ($users->onFirstPage())
                    <span class="prev disabled">Previous</span>
                @else
                    <a href="{{ $users->previousPageUrl() }}" class="prev">Previous</a>
                @endif

                {{-- Số trang --}}
                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    @if ($page == $users->currentPage())
                        <span class="active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- Next Link --}}
                @if ($users->hasMorePages())
                    <a href="{{ $users->nextPageUrl() }}" class="next">Next</a>
                @else
                    <span class="next disabled">Next</span>
                @endif
            </div>
        </div>
    </main>
@endsection