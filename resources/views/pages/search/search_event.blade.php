@extends('layout')
@section('title','Tìm kiếm')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span>Tìm kiếm</span></li>
            </ul>
        </div>
     </div>
</div>
{{--  --}}
<div class="background-course">
    <div class="container">
        <div class="music-title">
            <h2>Tìm kiếm những điều bạn cần</h2>
        </div>
        <div class="row course_row">
            @foreach ($search as $key => $display)
            <div class="col-lg-4 course_col mb-4">
                <div class="card course_box">
                    <img src="/public/upload/course/{{$display->course_image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="/khoahoc/{{$display->course_slug}}" class="title-cou"><h5 class="card-title">{{$display->course_title}}</h5></a>
                      <div class="music-info">
                        <ul>
                            <li><a href="#">{{$display->course_name}}</a></li>
                            <li><i class="fa fa-caret-right icon-lane"></i></li>
                            <li><a href="/khoahoc/{{$display->course_slug}}">{{$display->course_title}}</a></li>
                        </ul>
                      </div>
                      <p class="card-text mb-4">{{$display->course_description}}</p>
                      <div class="music-footer">
                        <ul>
                            <li><i class="fa fa-user" style="color: #AE4CA4;"></i><span style="margin-left:10px;">10</span></li>
                            <li><a href="/khoahoc/{{$display->course_slug}}" class="btn course_btn">Học ngay</a></li>
                            <li><form action="/themvaokhoahoccuatoi" method="POST">
                                {{ csrf_field() }}
                                <input name="course_id_hidden" type="hidden" value="{{$display->id}}">
                                <button type="submit" id="btn_add_favour">
                                    <i class="fas fa-heart" style="font-size:17px;color: #ac029b;"></i>
                                </button>
                            </form></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection