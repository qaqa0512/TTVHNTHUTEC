@extends('layout')
@section('title','Cập nhật thông tin')
@section('content')
<div class="empty"></div>
<div class="profile_user">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user_form">
                  {{-- Title --}}
                    <div class="user_title">
                        <h4><i class="fas fa-user"></i>Cập nhật thông tin</h4>
                    </div>
                  {{-- Form Info --}}
                    <form method="POST" action="/themthongtin" id="user_info_form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{-- Profile Name --}}
                        <div class="form-group">
                          <label for="name" class="title_name">Họ tên</label>
                          <input type="text" class="form-control" id="nameUser" name="profile_name" aria-describedby="emailHelp" required>
                        </div>
                      {{-- Profile Date --}}
                        <div class="form-group">
                            <label for="Date" class="title_name">Ngày sinh</label>
                            <input type="date" class="form-control" id="datelUser" name="profile_date" aria-describedby="emailHelp" required>
                        </div>
                      {{-- Profile Phone --}}
                        <div class="form-group">
                          <label for="number" class="title_name">Số điện thoại</label>
                          <input type="text" class="form-control" name="profile_phone" id="numberUser" required>
                        </div>
                      {{-- Profile Avatar --}}
                        <div class="form-group">
                          <label for="image" class="title_name">Ảnh đại diện</label>
                          <input type="file" class="form-control-file" name="profile_avatar" id="exampleFormControlFile1">
                        </div>
                        <div class="d-flex">
                          <button type="submit" class="btn_profile">Cập nhật</button>
                          <div class="viewprofile">
                            <a href="/thongtincanhan" id="link_profile">Xem thông tin cá nhân <i class="fa fa-arrow-right"></i></a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection