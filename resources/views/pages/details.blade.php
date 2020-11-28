@extends('layout')
@section('title','Chi tiết khóa học')
@section('content')
{{-- Details --}}
<div class="Detail">
    <div class="Detail-container">
        <div class="detail-breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="/khoahoc">Khóa học</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><p>{{$detail->course_title}}</p></li>
            </ul>
        </div>
     </div>
</div>
{{-- Intro Details  --}}
<div class="Intro Details">
    <div class="background-intro">
        <img src="/public/upload/course/{{$detail->course_image}}" alt="background intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro-content">
                        <div class="rating">
                            <div class="btn-intro">Miễn phí</div>
                        </div>
                        <div class="title-intro">
                            <h2>{{$detail->course_title}}</h2>
                        </div>
                        <div class="information">
                            <p>Người hướng dẫn: <a href="" class="instructor">{{$detail->course_name}}</a></p>
                        </div>
                        <div class="img-intro">
                            <img src="/admin/img/g9.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Course-details mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 bg">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nội dung khóa học</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Thành viên</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="course-tab-title">
                            <h5>Về khóa học</h5>
                            <p>{!! $allDescription->detail_des_course!!}</p>
                        </div>
                        <div class="course-tab-instructor">
                            <h5>Người hướng dẫn</h5>
                            <div class="instructor-info">
                                <ul>
                                    <li>{!!$allDescription->detail_des_instructor!!}</li>
                                    {{-- <li><i class="fas fa-hand-point-right"></i>Có 5 năm kinh nghiệm nhiếp ảnh</li> --}}
                                    {{-- <li><i class="fas fa-hand-point-right"></i>Tốt nghiệp ĐH Công nghệ TPHCM -> kỹ sư phần mềm</li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="course-tab-recommend">
                            <h5>Yêu cầu</h5>
                            <div class="instructor-info">
                                <ul>
                                    <li>{!! $allDescription->detail_des_request !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link btn-block text-left accor-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Phần 1: Giới thiệu
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  <div class="list-video">
                                      <ul>
                                        <li><a href="#">Bài 1: Tại sao chúng ta cần mua máy ảnh?</a></li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                  <button class="btn btn-block text-left collapsed accor-btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Phần 2: Kiến thức cốt lõi
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="list-video">
                                        <ul>
                                          <li><a href="#">Bài 2: Tìm hiểu về khẩu độ</a></li>
                                          <li><a href="#">Bài 3: Tìm hiểu về tốc độ chụp</a></li>
                                        </ul>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                  <button class="btn btn-link btn-block text-left collapsed accor-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Phần 3: Tổng kết
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="list-video">
                                        <ul>
                                            <li><a href="#">Bài 3: Lễ tốt nghiệp</a></li>
                                        </ul>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        Members
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card style-card" style="width: 100%;">
                    <iframe width="100%" height="250px" src="https://www.youtube.com/embed/z1zWvtRucn0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                      <a href="#" class="btn btn-right mb-3">Học ngay</a>
                      <div class="list-txt">
                          <ul>
                            <li>{!! $allDescription->detail_des_rate !!}</li>
                              {{-- <li><i class="fas fa-stopwatch"></i> Trình độ học cơ bản</li>
                              <li><i class="fas fa-book"></i> Học mọi lúc mọi nơi</li> --}}
                          </ul>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection