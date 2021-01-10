@extends('layout')
@section('title','Tìm kiếm')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span>Tìm kiếm</span></li>
            </ul>
        </div>
     </div>
</div>
{{--  --}}
<div class="Event_page mb-5">
    <div class="container">
        <div class="music-title">
            <h2>Không tìm thấy kết quả</h2>
        </div>
        <div class="img_search_error">
            <img src="img/error.png" alt="error">
        </div>
    </div>
</div>
@endsection