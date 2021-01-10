@extends('layout')
@section('title','Trang chủ')
@section('content')
{{-- <!-- Menu --> --}}
<div class="home">
    <div class="home-content">
        <div class="home-title">
            <h2>Trung tâm văn hóa - nghệ thuật</h2>
            <span>Nơi kiến tạo những ước mơ nghệ thuật dành cho sinh viên</span>
        </div>
        {{-- <div class="home-btn">
            <a href="#" class="bt">Tham quan thôi</a>
        </div> --}}
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
                                <li><i class="fa fa-user" style="color: #AE4CA4;"></i><span style="margin-left:10px;">{{$show->view_count}}</span></li>
                                <li><a href="/khoahoc/{{$show->course_slug}}" class="btn course_btn">Học ngay</a></li>
                                <li>
                                    <form action="">
                                        {{ csrf_field() }}
                                        {{-- <input class="course_id_{{$show->id}}" type="hidden" value="{{$show->id}}">
                                        <input class="course_title_{{$show->course_title}}" type="hidden" value="{{$show->course_title}}">
                                        <input class="course_name_{{$show->course_name}}" type="hidden" value="{{$show->course_name}}">
                                        <input class="course_image_{{$show->course_image}}" type="hidden" value="{{$show->course_image}}"> --}}

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
        </div>
        <div class="load-more">
            <a href="/khoahoc" class="loadd">Xem thêm</a>
        </div>
    </div>
</div>
{{-- <!-- Events --> --}}
<div class="event-background"> 
        <div class="event">
            <div class="container">
                <div class="event-title"><h2>Những Sự Kiện Sắp Diễn Ra</h2></div>
                <div class="row eve_top_list">
                    @foreach ($showEvent as $show_eve)
                    <div class="col-sm-4">
                        <div class="card card-event" style="width: 100%;">
                            <img src="/public/upload/course/{{$show_eve->event_image}}" class="card-img-top" alt="...">
                            <div class="card-body event-content">
                                <span class="eve_date">{!!$show_eve->event_date_time!!}</span>
                                <a href="/chitietsukien/{{$show_eve->event_id}}" class="link_eve"><h5 class="card-title card_eve">{!!$show_eve->event_title!!}</h5></a>
                                <span class="eve_txt">{!!$show_eve->event_name!!}</span>
                                <ul class="list_options">
                                  <li><a href="/chitietsukien/{{$show_eve->event_id}}" class="btn_eve_1">Xem chi tiết</a></li>
                                  <li><form action="">
                                    {{ csrf_field() }}
                                    <button type="submit"class="btn_eve">
                                        Tham gia
                                    </button>
                                  </form></li>
                                  <li><button class="btn_viewer"><span><i class="fas fa-user"></i>10</span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="blog-right-details">
                        <a href="/sukien" class="bloggg-detail">Xem thêm sự kiện <i class="fa fa-arrow-right"></i></a>
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
                        <h2><a href="/blog" class="_blog_ttt"> Blog có những thú vị ?? </a></h2>
                    </div>
                    <div class="blog-text">
                        <span>Nơi các bạn có thể sẻ chia những tâm tư, bài học cũng như các sản phẩm do chính mình tạo nên.</span>
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
            @foreach ($blogggg as $blo)
            <div class="col-lg-6">
                <div class="blog_content_left">
                    <div class="blog_content_left_image">
                        <img src="/public/upload/course/{{$blo->blog_image}}" alt="">
                    </div>
                    <div class="blog_content_box">
                        <div class="blog_content_text"><a href="#" class="bloggg">{{$blo->blog_cate}}</a></div>
                        <div class="blog_content_title"><a href="/chitietblog/{{$blo->blog_id}}" class="bloggg-tit">{!!$blo->blog_title!!}</a></div>
                        <div class="blog_des">
                            <p>{!!$blo->blog_sum!!}</p>
                        </div>
                        <div class="blog-right-details"><a href="/chitietblog/{{$blo->blog_id}}" class="bloggg-detail">Chi tiết hơn <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection