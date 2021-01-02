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
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/myCourse.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/event.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/sweetalert.css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
</head>
<body>
    {{-- Header HomeMusic --}}
    <header class="header-home">
        <div class="container">
            <div class="topbar_container">
                <div class="topbar">
                    <div class="phone">
                        <span>Phone: 0966853790</span>
                    </div>
                    <div class="social">
                        <span>Follow Me: </span>
                        <ul class="icons">
                            <li><a href="#"><i class="fab fa-facebook-f fb"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="lane">
            <div class="headcontainer">
                <div class="head-tilte">
                    <a href="/" class="brand-name"><img src="/img/your-logo.png" alt="brand"></a>
                </div>
                <div class="list-bar">
                    <ul class="list-tile">
                        <li><a href="/gioithieu">Giới Thiệu</a></li>
                        <li><a href="#">Câu Lạc Bộ</a></li>
                        <li><a href="/khoahoc">Khoá Học Online</a></li>
                        <li><a href="/sukien">Sự kiện</a></li>
    
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="/lienhe">Liên hệ</a></li>
                    </ul>
                </div>
                <form class="search-box" method="POST" action="">
                    <input class="form-control" type="text" name="" placeholder="Search....">
                    <div class="search-btn">
                        <i class="fa fa-search"></i>
                    </div>
                </form>
                <div class="account">
                    @if (Auth::check())
                        <div class="btn-group">
                            <div class="img_userr"><img src="" alt=""></div>
                            <button type="button" class="btn_user">{{Auth::user()->name}}</button>
                            <button type="button" class="btn btn-secondary btn_drop dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/capnhatthongtin"><i class="fas fa-cog"></i> Quản lý tài khoản</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/khoahoccuatoi"><i class="fas fa-bookmark"></i> Khóa học của tôi</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/dangxuat"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                            </div>
                        </div>
                    @else
                        <div class="background"></div>
                        <a href="/dangnhap" class="user"><i class="fa fa-user"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <div class="Hutech">
        @yield('content')
    </div>
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    {{-- Footer --}}
    <footer>
        <p>© <a href="#" class="foo">Nguyễn Quốc Anh</a> 2020</p>
    </footer>
    {{-- Javascript --}}

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
    
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'blogComm' );
        CKEDITOR.replace( 'blogg_title' );
        CKEDITOR.replace( 'blogg_content' );
        CKEDITOR.replace( 'blogg_sum' );
    </script>
    {!! Toastr::render() !!}
</body>
</html>