<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header_footer.css') }}" rel="stylesheet">    
</head>
<body>
    <header>
        <nav>
            <ul>           
            @guest
                <li><a href="">Home</a></li>
                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                <li><a href="{{ route('user.createUser') }}">Đăng ký</a></li>
                @else
                <li><a href="">Home</a></li>
                <li><a class="nav-link" href="{{ route('signout') }}">Logout</a></li>
            @endguest 
            </ul>
        </nav>
    </header>    

    @yield('content')


    <br>
    <br>
    <footer>
        <p>&copy; 2025 Website. Tất cả quyền lợi được bảo lưu.</p>
    </footer>
</body>
</html>
