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
                                <li><i class="fa fa-star" style="margin-right: 10px;color: #AE4CA4;"></i><span>5</span></li>
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
            <div class="top-events">
                <div class="event-title"><h2>Những Sự Kiện Sắp Diễn Ra</h2></div>
                <div class="event-flex">
                    <div class="event-body">
                        <div class="event-image">
                            <img src="/img/event_1.jpg" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-padding">
                                <div class="event-info">
                                    <a href="#">Networking Day</a>
                                </div>
                                <div class="event-btn">
                                    <a href="#" class="join">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="event-body">
                        <div class="event-image">
                            <img src="/img/event_1.jpg" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-padding">
                                <div class="event-info">
                                    <a href="#">Networking Day</a>
                                </div>
                                <div class="event-btn">
                                    <a href="#" class="join">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="event-body">
                        <div class="event-image">
                            <img src="/img/event_1.jpg" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-padding">
                                <div class="event-info">
                                    <a href="#">Networking Day</a>
                                </div>
                                <div class="event-btn">
                                    <a href="#" class="join">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
{{-- <!-- BLog --> --}}
<div class="blog">
    <div class="blog-background"></div>
    <div class="blog-body">
        <div class="blog-left">
            <div class="blog-title">
                <h2>Blog có những thú vị ??</h2>
            </div>
            <div class="blog-text">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</span>
            </div>
            <div class="blog-flex">
                <div class="blog-category">
                    <div class="layer-blog"></div>
                    <div class="blog-list-img">
                        <img src="./img/pexels-photo-1173651.jpeg" alt="">
                    </div>
                    <div class="blog-category-title">
                        <h3>Âm nhạc</h3>
                    </div>
                </div>
                <div class="blog-category">
                    <div class="layer-blog"></div>
                    <div class="blog-list-img">
                        <img src="./img/pexels-photo-1192043.jpeg" alt="">
                    </div>
                    <div class="blog-category-title">
                        <h3>Thể thao</h3>
                    </div>
                </div>
                <div class="blog-category">
                    <div class="layer-blog"></div>
                    <div class="blog-list-img">
                        <img src="./img/pexels-photo-1266741.jpeg" alt="">
                    </div>
                    <div class="blog-category-title1">
                        <h3>Nấu ăn</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-right">
            <div class="blog-image"></div>
            <div class="blog-title-container">
                <div class="blog-righit-text"><a href="">Âm nhạc</a></div>
                <div class="blog-right-title"><a href="">Làm thế nào để có thể hát hay???</a></div>
                <div class="blog-right-content">
                    <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                </div>
                <div class="blog-right-details"><a href="">Chi tiết hơn <i class="fa fa-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</div>
@endsection