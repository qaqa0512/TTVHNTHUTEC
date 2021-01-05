@extends('layout')
@section('title','Khóa học của tôi')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C">Khóa học của tôi</span></li>
            </ul>
        </div>
     </div>
</div>
<div class="myCourse">
    <div class="container">
        <div class="row myCourse_form">
            <div class="col-lg-3 left_info">
                <div class="profile_course_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="img_log" style="background: #c4bfbf;border-radius:15px;">
                                    <img src="img/logohutech.png" alt="">
                                </div>
                                <div class="info_user_favouriteCourse">
                                    <div class="img_profilee">
                                        <img src="{{$profile_url->profile_avatar}}" alt="">
                                    </div>
                                    <div class="name_profilee">
                                        <span>{{$profile_url->profile_name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="profile_course_bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link check_active active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-play-circle"></i>Khóa học của tôi</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-user"></i>Thông tin cá nhân</a>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 right_course">
                <div class="list_myCourse">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="title__favourite_course">
                                    <h5>Khóa học của tôi</h5>
                                </div>
                                <div class="serch_box">
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" id="serch_bx" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                                        <button class="btn btn-outline-success " type="submit">Tìm kiếm</button>
                                      </form>
                                </div>
                                <div class="list_favourite_course">
                                    <?php
                                        $content = Cart::content();  
                                        // echo '<pre>';
                                        //     print_r($content);
                                        // echo '</pre>'
                                    ?>
                                    <div class="row">
                                        @foreach ($content as $con)
                                        <div class="col-lg-4 mb-4">
                                            <div class="card favour_video">
                                                <input name="course_hidden" type="hidden" value="{{$con->id}}">
                                                <img src="/public/upload/course/{{$con->options->image}}" alt="" class="img_cou">
                                                <div class="card-body d-flex">
                                                  <a href="/khoahoc/{{$con->options->slug}}" class="id_favour"><h5 class="card-title">{{$con->name}}</h5></a>
                                                  <a href="/xoakhoahoccuatoi/{{$con->rowId}}" class="delete_ic"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>                 
                                        </div>
                                        @endforeach
                                    </div>               
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="profile_course_favour">
                                    <div class="title__profile_favourite_course">
                                        <h5>Thông tin cá nhân</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 profile_left">
                                            <div class="img_pro_course">
                                                <img src="{{$profile_url->profile_avatar}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-9 profile_right">
                                            <div class="form_user_profile">
                                                <div class="user_info_course d-flex">
                                                    <div class="user_info_course_tilte"><h5>Họ tên:</h5></div>
                                                    <div class="user_info_course_text"><span>{{$profile_url->profile_name}}</span></div>
                                                </div>
                                                <div class="user_info_course d-flex">
                                                    <div class="user_info_course_tilte"><h5>Ngày sinh:</h5></div>
                                                    <div class="user_info_course_text"><span>{{$profile_url->profile_date}}</span></div>
                                                </div>
                                                <div class="user_info_course d-flex">
                                                    <div class="user_info_course_tilte"><h5>Số điện thoại</h5></div>
                                                    <div class="user_info_course_text"><span>{{$profile_url->profile_phone}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection