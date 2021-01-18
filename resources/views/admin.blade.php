
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/admin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="/admin/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- font-awesome icons -->
<link rel="stylesheet" href="/admin/css/font.css" type="text/css"/>
<link href="/admin/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="/admin/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="/admin/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="/admin/js/jquery2.0.3.min.js"></script>
<script src="/admin/js/raphael-min.js"></script>
<script src="/admin/js/morris.js"></script>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="/quantri" class="logo">
        <img src="/img/logohutech.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="/admin/img/2.png">
            <span class="username">
                <?php
                    $name = Session::get('admin_name');
                    if($name)
                    {
                        echo $name;
                    }
                ?>
            </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i> Thông tin cá nhân</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                <li><a href="/quantri/dangxuatad"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="/">
                        <i class="fa fa-home"></i>
                        <span> Trang chủ</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Khóa học</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/quantri/themkhoahoc">Thêm khóa học</a></li>
                        <li><a href="/quantri/themmotakhoahoc">Thêm mô tả khóa học</a></li>
                        <li><a href="/quantri/motakhoahoc">Mô tả khóa học</a></li>
                        <li><a href="/quantri/cackhoahoc">Liệt kê khóa học</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Bài học</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/quantri/themphanhoc">Thêm phần bài học</a></li>
                        <li><a href="/quantri/thembaihoc">Thêm bài học</a></li>
                        <li><a href="/quantri/phanhoc">Phần bài học</a></li>
                        <li><a href="/quantri/cacbaihoc">Danh sách bài học</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sự Kiện</span>
                    </a>
                    <ul class="sub">
						<li><a href="/quantri/themsukien">Thêm sự kiện</a></li>
                        <li><a href="/quantri/cacsukien">Liệt kê sự kiện</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Câu Lạc Bộ</span>
                    </a>
                    <ul class="sub">
						<li><a href="/quantri/themcaulacbo">Thêm câu lạc bộ</a></li>
                        <li><a href="/quantri/caccaulacbo">Danh sách câu lạc bộ</a></li>
                        <li><a href="/quantri/themthongtinclb">Thêm thông tin câu lạc bộ</a></li>
                        <li><a href="/quantri/thongtincaulacbo">Thông tin câu lạc bộ</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Liên hệ</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/quantri/thongtinlienhe">Danh sách liên hệ</a></li>
                    </ul>
                </li>
 		</div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		@yield('admin_content')
	</section>
 <!-- footer -->
<div class="footer">
	<div class="wthree-copyright">
    	<p>© <a href="#">Nguyễn Quốc Anh</a> 2020</p>
	</div>
</div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="/admin/js/bootstrap.js"></script>
<script src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/admin/js/scripts.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>
<script src="/admin/js/jquery.nicescroll.js"></script>
<script src="/admin/js/jquery.scrollTo.js"></script>
<script src="/admin/ckeditor/ckeditor.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
<script type="text/javascript">
    //Description
    CKEDITOR.replace( 'desCourse' );
    CKEDITOR.replace( 'desIns' );
    CKEDITOR.replace( 'desRes' );
    CKEDITOR.replace( 'desRate' );
    CKEDITOR.replace( 'desContent' );
    CKEDITOR.replace( 'desPlace' );
    CKEDITOR.replace( 'desPrice' );
    //Lesson 
    CKEDITOR.replace( 'videoLesson',{
    });
    //Club 
    CKEDITOR.replace( 'clubInfo',{
    });
</script>

</body>
</html>
