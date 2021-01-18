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
                    {{-- <li class="nav-item nav_club" role="presentation">
                        <a class="nav-link active_club" id="pills-manage-tab" data-toggle="pill" href="#pills-manage" role="tab" aria-controls="pills-contact" aria-selected="false">Quản lý thành viên <i class="fas fa-users"></i></a>
                      </li> --}}
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
                            <table class="table table-striped mt-3">
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
                    <div class="tab-pane fade" id="pills-schedule" role="tabpanel" aria-labelledby="pills-schedule-tab"></div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection