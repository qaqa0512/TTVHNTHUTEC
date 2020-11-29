<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{--  Font Awesome --}}
    <link rel="stylesheet" href="/fonts/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css">

    {{--  Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
    
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/courses.css">
    <link rel="stylesheet" href="/css/details.css">
    <link rel="stylesheet" href="/css/videoCourse.css">

    
    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
</head>
<body>
    {{-- Header HomeMusic --}}
    <header class="header-home">
        {{-- top-navbar --}}
        <div class="topbar_container">
            <div class="topbar">
                <div class="phone"><span>Phone: 0966853790</span></div>
                <div class="social">
                    <span>Follow Me: </span>
                        <ul class="icons">
                            <li><a href="#"><i class="fab fa-facebook-f fb"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins"></i></a></li>
                        </ul>
                </div>
            </div>
            {{-- Lane --}}
            <hr class="lane">
        </div>
        {{-- Container of navbar --}}
        <div class="headcontainer">
            <div class="head-tilte">
                <h2><a href="/" class="brand-name"><img src="/img/your-logo.png" alt="brand"></a></h2>
            </div>
            <div class="list-bar">
                <ul class="list-tile">
                    <li><a href="#">Giới Thiệu</a></li>
                    <li><a href="#">Câu Lạc Bộ</a></li>
                    <li><a href="/khoahoc">Khoá Học Online</a></li>
                    <li><a href="#">Sự kiện</a></li>
                    <li><a href="#">Liên kết đào tạo</a></li>
                    <li><a href="#">Tin Tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="search-box">
                <input class="form-control" type="text" name="" placeholder="Search....">
                <div class="search-btn">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="account">
                @if (Auth::check())
                    <div class="user-info">
                        <p>{{Auth::user()->name}}</p>
                        <a href="/dangxuat" class="logoutt">Đăng xuất</a>
                    </div>
                        
                @else
                    <div class="background"></div>
                    <a href="/dangnhap" class="user"><i class="fa fa-user"></i></a>
                @endif
            </div>
        </div>
    </header>
    <div class="Hutech">
        @yield('content')
    </div>
    {{-- Footer --}}
    <footer>
        <p>© <a href="#">Nguyễn Quốc Anh</a> 2020</p>
    </footer>
    {{-- Javascript --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>
</body>
</html>