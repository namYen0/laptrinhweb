@extends('header_footer')

@section('content')
    <main class="login-form">
        <div class="form-container">
            <h2>Màn hình chi tiết</h2>
            <form action="#" method="POST">
                <div class="form-group2">
                    <label class="label1">UserName:</label>
                    <label class="elabel1">{{$user->name}}</label>
                </div>
                <div class="form-group2">
                    <label class="label1">Email:</label>
                    <label class="elabel1">{{$user->email}}</label>
                </div>
                <div class="form-actions">
                    <button class="btn-huy" type="button" onclick="window.history.back();">Trở về</button>
                    <button type="button" onclick="window.location.href='{{ route('user.updateUser', ['id' => $user->id]) }}'">Chỉnh sửa</button>         
                </div>
            </form>
        </div>
    </main>
@endsection