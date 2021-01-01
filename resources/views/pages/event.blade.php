@extends('layout')
@section('title','Sự kiện')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C">Sự kiện</span></li>
            </ul>
        </div>
     </div>
</div>
<div class="Event_page mb-5">
    <div class="container">
        <div class="music-title">
            <h2>Rất nhiều sự kiện hấp dẫn đang đón chào các bạn</h2>
        </div>
        <div class="row event_con">
            @foreach ($event as $eve_page)
            <div class="col-sm-4">
                <div class="card card-event" style="width: 100%;">
                    <img src="/public/upload/course/{{$eve_page->event_image}}" class="card-img-top" alt="...">
                    <div class="card-body event-content">
                        <span class="eve_date">{!!$eve_page->event_date_time!!}</span>
                        <a href="/chitietsukien/{{$eve_page->event_id}}" class="link_eve"><h5 class="card-title card_eve">{!!$eve_page->event_title!!}</h5></a>
                        <span class="eve_txt">{!!$eve_page->event_name!!}</span>
                        <ul class="list_options">
                          <li><a href="/chitietsukien/{{$eve_page->event_id}}" class="btn_eve_1">Xem chi tiết</a></li>
                          <li><form action="/trangthaisk" method="POST">
                            {{ csrf_field() }}
                            <input name="event_hidden" type="hidden" value="{{$eve_page->event_id}}">
                            <button type="submit" class="btn_eve">
                                Tham gia
                            </button> 
                          </form></li>
                          <li><button class="btn_viewer"><span><i class="fas fa-user"></i>10</span></button></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
</div>
@endsection