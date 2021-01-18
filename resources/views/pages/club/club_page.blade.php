@extends('layout')
@section('title','Câu Lạc Bộ')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="/caulacbo">Câu lạc bộ</a></li>
            </ul>
        </div>
     </div>
</div>
<div class="club_page">
    <div class="container">
        <div class="music-title">
            <h2>Tỏa sáng với niềm đam mê của chính bạn</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="carousel_club">
                    @foreach ($club_cate as $clubCate)
                    <div class="carousel-cell">
                        <div class="club_img">
                            <img src="/public/upload/course/{{$clubCate->club_category_image}}" alt="">
                        </div>
                        <div class="club_title">
                            <a href="/chitietcaulacbo/{{$clubCate->club_category_slug}}" class="clb_name"><h5>{{$clubCate->club_category_title}}</h5></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 mt-4 mb-4">
                <div class="club_form">
                    <div class="club_form_title">
                        <h5>Đăng ký tham gia câu lạc bộ tại đây <i class="fas fa-hand-point-down"></i></h5>
                    </div>
                    <div class="club_form_content mb-4">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form role="form" action="/themthanhvien" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="txt_label">Họ Tên</label>
                                            <input type="text" class="form-control club_form_style" name="club_member_name" id="exampleInputEmail1" placeholder="Nhập vào họ tên....">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="txt_label">Email</label>
                                            <input type="text" class="form-control club_form_style" name="club_member_email" id="exampleInputEmail1" placeholder="Nhập vào email....">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="txt_label">Số điện thoại</label>
                                            <input type="text" class="form-control club_form_style" name="club_member_phone" id="exampleInputEmail1" placeholder="Nhập vào số điện thoại....">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="txt_label">Câu lạc bộ</label>
                                            <select class="form-control input-lg m-bot15 select_club" name="club_category_id">
                                                @foreach ($club_cate as $clb_cate)
                                                    <option value="{{$clb_cate->club_category_id}}">{{$clb_cate->club_category_title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-info">Đăng ký câu lạc bộ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mb-4">
                <div class="club_statistic">
                    <div class="club_statistic_title">
                        <h5>Thống kê <i class="fas fa-medal"></i></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection