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
                    @if (Session::has('respone'))
                      <p class="message-txt"><i class="fas fa-info-circle"></i>{{Session::get('respone')}}</p>
                    @endif
                    <div class="update_image">
                            <img src="{{$profile->profile_avatar}}" alt="">
                    </div>
                  {{-- Form Info --}}
                    <form method="POST" action="/themthongtin" id="user_info_form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{-- Profile Name --}}
                        <div class="form-group">
                          <label for="name" class="title_name">Họ tên</label>
                          <input type="text" class="form-control" id="nameUser" name="profile_name" aria-describedby="emailHelp" value="{{$profile->profile_name}}" readonly>
                        </div>
                      {{-- Profile Date --}}
                        <div class="form-group">
                            <label for="Date" class="title_name">Ngày sinh</label>
                            <input type="date" class="form-control" id="datelUser" name="profile_date" aria-describedby="emailHelp" value="{{$profile->profile_date}}" readonly>
                        </div>
                      {{-- Profile Phone --}}
                        <div class="form-group">
                          <label for="number" class="title_name">Số điện thoại</label>
                          <input type="text" class="form-control" name="profile_phone" id="numberUser" value="{{$profile->profile_phone}}" readonly>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection