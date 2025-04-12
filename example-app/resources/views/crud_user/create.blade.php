@extends('header_footer')

@section('content')
    <main class="signup-form">
        <div class="form-container">
            <h2>Màn hình đăng ký</h2>
            <form action="{{ route('user.postUser') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>UserName</label>
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label>like</label>
                                    <input type="text" placeholder="like" id="like" class="form-control" name="like"
                                           required autofocus>
                                    @if ($errors->has('like'))
                                        <span class="text-danger">{{ $errors->first('like') }}</span>
                                    @endif
                                </div>                        
                                <div class="form-group mb-3">
                                    <label>github</label>
                                    <input type="text" placeholder="github" id="github" class="form-control" name="github"
                                           required autofocus>
                                    @if ($errors->has('github'))
                                        <span class="text-danger">{{ $errors->first('github') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="text" placeholder="Email" id="email" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-actions">
                                    <a href="{{ route('login') }}" class="login-link">Đã có tài khoản?</a>
                                    <button type="submit" class="btn btn-dark btn-block">Đăng ký</button>
                    </div>
            </form>
        </div>
    </main>
@endsection