@extends('layout')
@section('title','Khóa học')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="/khoahoc">Khóa học</a></li>
            </ul>
        </div>
     </div>
</div>
{{--  --}}
<div class="background-course">
    <div class="container">
        <div class="music-title">
            <h2>Với niềm đam mê và sự cố gắng sẽ giúp bạn vượt qua tất cả</h2>
        </div>
        <div class="row course_row">
            @foreach ($displayCourse as $key => $display)
            <div class="col-lg-4 course_col mb-4">
                <div class="card course_box">
                    <img src="/public/upload/course/{{$display->course_image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="/khoahoc/{{$display->course_slug}}" class="title-cou"><h5 class="card-title">{{$display->course_title}}</h5></a>
                      <div class="music-info">
                        <ul>
                            <li><a href="#">{{$display->course_name}}</a></li>
                            <li><i class="fa fa-caret-right icon-lane"></i></li>
                            <li><a href="">{{$display->course_title}}</a></li>
                        </ul>
                      </div>
                      <p class="card-text mb-4">{{$display->course_description}}</p>
                      <div class="music-footer">
                        <ul>
                            <li><i class="fa fa-user" style="color: #AE4CA4;"></i><span style="margin-left:10px;">10</span></li>
                            <li><a href="/khoahoc/{{$display->course_slug}}" class="btn course_btn">Học ngay</a></li>
                            <li><i class="fa fa-star" style="margin-right: 10px;color: #AE4CA4;"></i><span>5</span></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="load-more">
            <a href="" class="loadd">Tải thêm</a>
        </div>
    </div>
</div>
@endsection