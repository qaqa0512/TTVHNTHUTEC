@extends('layout')
@section('title','Thông tin tài khoản')
@section('content')
<div class="empty"></div>
<div class="profile_user">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user_form">
                  {{-- Title --}}
                    <div class="user_title">
                        <h4><i class="fas fa-user"></i>Thông tin cá nhân</h4>
                    </div>
                    <div class="update_image">
                            <img src="/img/29TI8147.jpg" alt="">
                    </div>
                  {{-- Form Info --}}
                    <form method="POST" action="/themthongtin" id="user_info_form">
                      {{-- Profile Name --}}
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="title_name">Họ tên</label>
                          <input type="text" class="form-control" id="nameUser" name="profile_name" aria-describedby="emailHelp">
                        </div>
                      {{-- Profile Date --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="title_name">Ngày sinh</label>
                            <input type="email" class="form-control" id="datelUser" name="profile_date" aria-describedby="emailHelp">
                        </div>
                      {{-- Profile Phone --}}
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="title_name">Số điện thoại</label>
                          <input type="password" class="form-control" name="profile_phone" id="numberUser">
                        </div>
                      {{-- Profile Avatar --}}
                        <div class="form-group">
                          <label for="exampleFormControlFile1" class="title_name">Ảnh đại diện</label>
                          <input type="file" class="form-control-file" name="profile_avatar" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" class="btn_profile">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection