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
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Đánh giá</a>
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
                              {{-- <?php
                                  $partal_ids = [];
                              ?> --}}
                              @foreach ($lesson as $valu => $le)
                              
                              <div class="card-header" id="heading-{{$valu}}">
                                <h2 class="mb-0">
                                  <button class="btn btn-link btn-block text-left accor-btn" type="button" data-toggle="collapse" data-target="#collapse-{{$valu}}" aria-expanded="true" aria-controls="collapseOne">
                                    {{$le->part_title}}
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-{{$valu}}" class="collapse show" aria-labelledby="heading-{{$valu}}" data-parent="#accordionExample">
                                <div class="card-body">
                                  <div class="list-video">
                                      <ul>
                                        <li><i class="fas fa-video" style="margin-right: 7px; color: rgb(238, 238, 88);"></i><a href="/video/{{$le->lesson_slug}}">{{$le->lesson_title}}</a></li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="container review">
                          <div class="rating-star">
                            <div class="row">
                                <div class="col-sm-8">
                                  <div class="num_comment">
                                    <p>Số lượt bình luận</p>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="votee d-flex">
                                    <p>Lượt đánh giá:</p>
                                    <div class="list_star">
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          @if(Auth::check())
                          <div class="comment-review">
                            <div class="id_comment d-flex">
                              {{-- <div class="id_img">
                                <img src="/img/tải xuống.png" alt="">
                              </div> --}}
                              <div class="comment_box">
                                <div class="input-group ml-2">
                                  <input type="hidden" value="{{$allDescription->course_slug}}" class="course_slug" name="course_slug">
                                  <form action="/khoahoc/{{$allDescription->course_slug}}" method="post" id="hello">
                                    {{csrf_field()}}
                                    <input type="text" class="form-control" name="comment_content" id="comment-btn" placeholder="Viết lời bình luận ở đây...." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append ml-1">
                                      <button type="submit"class="btn btn-outline-secondary" id="button-addon2">Bình Luận</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php
                          $mess = Session::get('mes');
                          if($mess){
                              echo '<p class="error">'.'<i class="fa fa-info-circle"></i>'.' '.$mess.'</p>';
                              Session::put('mes',null);
                          }
                          ?>
                          @endif
                          @foreach ($comments as $comm)
                            <div class="comment_show d-flex">
                              {{-- <div class="img_comment_show">
                                <img src="/img/tải xuống.png" alt="...">
                              </div> --}}
                              <div class="comment_content_show">
                                <div class="comment_name_id">
                                  <p class="name_id">{{$comm->name}}</p>
                                  <span id="link__">&nbsp-</span>
                                  <span class="time_id_post">&nbsp{{date('d/m/Y H:i')}}</span>
                                </div>
                                <div class="comment_name_text">
                                  <span class="text_id">{{$comm->comment_content}}</span>
                                </div>
                              </div>
                              <div class="comment_status_show">
                                <!-- Default dropright button -->
                                <div class="btn-group dropright">
                                  <button type="button" class="btn_comment_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ...
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/khoahoc/{{$comm->course_slug}}/{{$comm->comment_id}}" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">Xóa bình luận</a>
                                  </div>
                                </div>
                                <div class="comment_reply">
                                    <span id="id_replay">Trả lời</span>
                                </div>
                              </div>
                            </div>
                          @endforeach
                          
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card style-card" style="width: 100%;">
                    <p>{!!$allDescription->lesson_video!!}</p>
                    <div class="card-body">
                      <a href="/video/{{$allDescription->lesson_slug}}" class="btn btn-right mb-3">Học ngay</a>
                      <div class="list-txt">
                          <ul>
                            <li>{!! $allDescription->detail_des_rate !!}</li>
                          </ul>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection