@extends('header_footer')

@section('content')
    <main class="signup-form">
        <div class="form-container">
            <h2>Màn hình cập nhật</h2>
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group">
                                    <label for="username">UserName</label>
                                    <input type="text" placeholder="Name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username">like</label>
                                    <input type="text" placeholder="like" class="form-control" name="like"
                                           value="{{ $user->like }}"
                                           required autofocus>
                                    @if ($errors->has('like'))
                                        <span class="text-danger">{{ $errors->first('like') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username">github</label>
                                    <input type="text" placeholder="github" class="form-control" name="github"
                                           value="{{ $user->github }}"
                                           required autofocus>
                                    @if ($errors->has('github'))
                                        <span class="text-danger">{{ $errors->first('github') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username">Password</label>
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-actions">
                                    <button class="btn-huy" onclick="window.history.back();">Hủy</button>  
                                    <button type="submit">Cập nhật</button>  
                                </div>
                            </form>
                        </div>
                    </main>
@endsection