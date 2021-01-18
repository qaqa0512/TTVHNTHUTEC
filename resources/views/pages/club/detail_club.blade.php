@extends('layout')
@section('title','Chi Tiết Câu Lạc Bộ')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="/caulacbo">Câu lạc bộ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C;">{{$club_info_cate->club_category_title}}</span></li>
            </ul>
        </div>
     </div>
</div>
<div class="detail_club_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <ul class="nav nav-pills mb-3 detai_clubb justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item nav_club" role="presentation">
                      <a class="nav-link active_club" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-home" aria-selected="true">Thông tin <i class="fas fa-info-circle"></i></a>
                    </li>
                    <li class="nav-item nav_club" role="presentation">
                      <a class="nav-link active_club" id="pills-list-tab" data-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-profile" aria-selected="false">Danh sách học viên <i class="fas fa-clipboard-list"></i></a>
                    </li>
                    <li class="nav-item nav_club" role="presentation">
                      <a class="nav-link active_club" id="pills-schedule-tab" data-toggle="pill" href="#pills-schedule" role="tab" aria-controls="pills-contact" aria-selected="false">Hoạt động của CLB <i class="far fa-calendar-alt"></i></a>
                    </li>
                  </ul>
                  <div class="tab-content detail_club_content" id="pills-tabContent">
                    <div class="tab-pane detail_club_content_info fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                      @foreach ($club_info_page as $clbInfo)  
                        <div class="club_info_title">
                            <h5>Thông Tin - CLB {!!$clbInfo->club_category_title!!} <i class="fas fa-compact-disc"></i></h5>
                        </div>
                        <div class="club_info_content">
                          {!!$clbInfo->club_info!!}
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                        <div class="detail_club_member">
                            <div class="detail_club_member_title">
                              <h5>Danh sách thành viên - CLB {{$club_info_cate->club_category_title}} </h5>
                            </div>
                            <div class="detail_club_member_img">
                              <img src="/public/upload/course/{{$club_info_cate->club_category_image}}" alt="">
                            </div>
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Họ tên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Câu lạc bộ</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($club_member as $clbMem)
                                    <tr>
                                      {{-- <th scope="row">{{$clbMem->club_member_id}}</th> --}}
                                      <td>{{$clbMem->club_member_name}}</td>
                                      <td>{{$clbMem->club_member_email}}</td>
                                      <td>{{$clbMem->club_member_phone}}</td>
                                      <td>{{$clbMem->club_category_title}}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-schedule" role="tabpanel" aria-labelledby="pills-schedule-tab">
                        <div class="detail_club_activity">
                            <div class="row">
                              <div class="col-sm-4 club_activity_left">
                                <!-- Button trigger modal -->
                                <button type="button" class="btnClubActivity" data-toggle="modal" data-target="#staticBackdrop">
                                  <i class="fas fa-plus mr-2"></i> Hôm nay có gì mới????
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tạo bài viết</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        ...
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Đăng</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-8 club_activity_right">
                                <div class="container">
                                  <div class="row">
                                    <div class="col">
                                      <div class="club_activity_right_top d-flex">
                                        <div class="club_activity_right_top_info">
                                          <div class="club_activity_right_name"><span>Quốc Anh - Thành Viên - 18/01/2021</span></div>
                                        </div>
                                        <div class="club_activity_right_top_option">
                                          <div class="dropdown">
                                            <button class="btnClubActivityOption" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                              <button class="dropdown-item" type="button">Chỉnh sửa bài viết</button>
                                              <button class="dropdown-item" type="button">Xóa bài viết</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="club_activity_right_bottom">
                                        <div class="club_activity_right_bottom_status">
                                          <span>Hôm nay buồn quá...</span>
                                        </div>
                                        <div class="club_activity_right_bottom_img">
                                          <img src="/img/119469758_2462420790718075_3741060378152167569_o.jpg" alt="">
                                        </div>
                                        <hr>
                                        <div class="club_activity_right_bottom_comment">
                                          <ul class="d-flex">
                                            <li><a href="#" class="club_like"><i class="fas fa-heart"></i> Thích</a></li>
                                            <li><a href="#" class="club_dislike"><i class="fas fa-heart-broken"></i> Không thích</a></li>
                                            <li>
                                              <a href="#"><i class="fas fa-comment-alt"></i> Bình luận</a>
                                            </li>
                                          </ul>
                                          <div class="form-group">
                                            <textarea type="text" name="blog_comment_content" class="form-control" id="formClubComment"style="resize: none">Viết bình luận ở đây...</textarea>
                                            <button class="btnClubComment" type="submit">Đăng bình luận</button>
                                          </div>
                                          <hr>
                                          <div class="club_comment_content">
                                            <div class="club_comment_name">Quốc Anh - 18/01/2021</div>
                                            <div class="club_comment_text">Hi Everyone</div>
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
        </div>
    </div>
</div>
@endsection