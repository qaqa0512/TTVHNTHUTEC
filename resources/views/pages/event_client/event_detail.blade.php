@extends('layout')
@section('title','Chi tiết sự kiện')
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
<div class="evetDetail">
    <div class="container">
        <div class="row mt-3 mb-3">
            {{-- @foreach ($event_detail as $eve_de) --}}
            <div class="col-sm-7 event_left">
                <div class="eve_detail_content-top">
                    <div class="eve_detail_title">
                        <h5>Thông tin chi tiết</h5>
                    </div>
                    <div class="eve_detail_text">
                        <ul>
                            <li><span>Tên sự kiện: </span>
                                <p class="eve_text">
                                {!!$event_detail->event_title!!}
                                </p>
                            </li>
                            <li>
                                <span>Địa điểm: </span>
                                <p class="eve_text">{!!$event_detail->event_place!!}</p>
                            </li>
                            <li>
                                <span>Thời gian: </span>
                                <p class="eve_text">{!!$event_detail->event_date_time!!}</p>
                            </li>
                            <li><span>Giá: </span>
                                <p class="eve_text">{{$event_detail->event_price}}</p>
                            </li>
                            <li><span>Nội dung: </span></li>
                            <li><p>{!!$event_detail->event_content!!}</p></li>
                            <li>
                                <a href="/thamgia/{{$event_detail->event_id}}" class="btn_eve" onclick="myFunction(this)">Tham gia ({{$join}})</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="eve_detail_content_bottom">
                    <div class="eve_detail_title">
                        <h5>Người tổ chức</h5>
                    </div>
                    <div class="eve_detail_name">
                        <span>{!!$event_detail->event_name!!}</span>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-5 event_right">
                <div class="event_detail_image mb-3">
                    <div class="gg_title">
                        <h5>Ảnh sự kiện</h5>
                    </div>
                    <div class="gg_img">
                        <img src="/public/upload/course/{{$event_detail->event_image}}" alt="ảnh">
                    </div>
                </div>
                <div class="gg_content">
                    <div class="gg_title">
                        <h5>Bản đồ</h5>
                    </div>
                    <div class="gg_map">
                        {!!$event_detail->event_map!!}
                    </div>
                </div>
            </div>          
            {{-- @endforeach --}}
        </div>
    </div>
</div>
@endsection