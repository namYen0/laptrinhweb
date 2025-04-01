@extends('header_footer')

@section('content')
    <main class="login-form">
        <div class="form-container">
            <h2>Màn hình đăng nhập</h2>
            <form action="{{ route('user.authUser') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ghi nhớ đăng nhập</label>
                </div>
                <div class="form-actions">
                    <a href="#" class="forgot-password">Quên mật khẩu?</a>
                    <button type="submit">Đăng nhập</button>                
                </div>
            </form>
        </div>
    </main>
@endsection