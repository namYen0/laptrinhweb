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
                                    <label for="username">Email</label>
                                    <input type="text" placeholder="Email" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username">Phone</label>
                                    <input type="text" placeholder="Phone" class="form-control"
                                           value="{{ $user->phone }}"
                                           name="phone" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username">Address</label>
                                    <input type="text" placeholder="Address" class="form-control"
                                           value="{{ $user->address }}"
                                           name="address" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
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