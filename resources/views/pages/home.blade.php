@extends('layout')
@section('title','Trang chủ')
@section('content')
{{-- <!-- Menu --> --}}
<div class="home">
    <div class="home-content">
        <div class="home-title">
            <h2>Được Sống Với Đam Mê Của Chính Bạn</h2>
        </div>
        <div class="home-btn">
            <a href="#" class="bt">Bắt Đầu Thôi</a>
        </div>
    </div>
</div>
{{--  <!-- Course --> --}}
<div class="course">
    <div class="course-background"></div>
    <div class="course-online">
        <div class="container">
            <div class="music-title">
                <h2>Các Khóa Học Online Nổi Bật</h2>
            </div>
            <div class="row course_row">
                @foreach ($showCourse as $key => $show)
                <div class="col-lg-4 course_col mb-4">
                    <div class="card course_box">
                        <img src="/public/upload/course/{{$show->course_image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="/khoahoc/{{$show->course_slug}}" class="title-cou"><h5 class="card-title">{{$show->course_title}}</h5></a>
                          <div class="music-info">
                            <ul>
                                <li><a href="#">{{$show->course_name}}</a></li>
                                <li><i class="fa fa-caret-right icon-lane"></i></li>
                                <li><a href="">{{$show->course_title}}</a></li>
                            </ul>
                          </div>
                          <p class="card-text mb-4">{{$show->course_description}}</p>
                          <div class="music-footer">
                            <ul>
                                <li><i class="fa fa-user" style="color: #AE4CA4;"></i><span style="margin-left:10px;">10</span></li>
                                <li><a href="/khoahoc/{{$show->course_slug}}" class="btn course_btn">Học ngay</a></li>
                                <li>
                                    <form action="">
                                        {{ csrf_field() }}
                                        <button type="submit" id="btn_add_favour">
                                            <i class="fas fa-heart" style="font-size:17px;color: #ac029b;"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="load-more">
                <a href="/khoahoc" class="loadd">Xem thêm</a>
            </div>
        </div>
        
    </div>
</div>
{{-- <!-- Events --> --}}
<div class="event-background"> 
        <div class="event">
            <div class="container">
                <div class="event-title"><h2>Những Sự Kiện Sắp Diễn Ra</h2></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-event" style="width: 100%;">
                            <img src="/img/event_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body event-content">
                              <h5 class="card-title card_eve">Đêm nhạc giao lưu với sinh viên k20</h5>
                              <a href="#" class="btn_eve">Tham gia</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-event" style="width: 100%;">
                            <img src="/img/event_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body event-content">
                              <h5 class="card-title card_eve">Đêm nhạc giao lưu với sinh viên k20</h5>
                              <a href="#" class="btn_eve">Tham gia</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-event" style="width: 100%;">
                            <img src="/img/event_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body event-content">
                              <h5 class="card-title card_eve">Đêm nhạc giao lưu với sinh viên k20</h5>
                              <a href="#" class="btn_eve">Tham gia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
{{-- <!-- BLog --> --}}
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="blogLeft">
                    <div class="blog-title">
                        <h2>Blog có những thú vị ??</h2>
                    </div>
                    <div class="blog-text">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</span>
                    </div>
                    <div class="container blog-show">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="blog-category">
                                    <div class="layer-blog"></div>
                                    <div class="blog-list-img">
                                        <img src="./img/pexels-photo-1173651.jpeg" alt="">
                                    </div>
                                    <div class="blog-category-title">
                                        <h5>Âm nhạc</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-category">
                                    <div class="layer-blog"></div>
                                    <div class="blog-list-img">
                                        <img src="./img/pexels-photo-1192043.jpeg" alt="">
                                    </div>
                                    <div class="blog-category-title">
                                        <h5>Thể thao</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-category">
                                    <div class="layer-blog"></div>
                                    <div class="blog-list-img">
                                        <img src="./img/pexels-photo-1266741.jpeg" alt="">
                                    </div>
                                    <div class="blog-category-title">
                                        <h5>Ẩm thực</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blogRight">
                    <div class="blog-image"></div>
                    <div class="blog-title-container">
                        <div class="blog-right-text"><a href="" class="bloggg">Âm nhạc</a></div>
                        <div class="blog-right-title"><a href="" class="bloggg-tit">Làm thế nào để có thể hát hay???</a></div>
                        <div class="blog-right-content">
                            <p>Tôi có một tình yêu lớn dành cho âm nhạc. Phải có âm nhạc để cuộc sống bớt đi sự căng thẳng, để mình thêm yêu đời hơn. Tôi tìm thấy ở âm nhạc những thanh âm tuyệt vời của cuộc sống.</p>
                        </div>
                        <div class="blog-right-details"><a href="" class="bloggg-detail">Chi tiết hơn <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection