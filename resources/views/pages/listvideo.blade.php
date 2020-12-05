@extends('layout')
@section('title','Video')
@section('content')
<div class="Detail">
    <div class="Detail-container">
        <div class="detail-breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="/khoahoc">Khóa học</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><p>Nhiếp ảnh</p></li>
            </ul>
        </div>
     </div>
</div>
<div class="videoCourse mb-4">
    <div class="videoTitle">
        <h3>Chúc bạn có buổi học vui vẻ</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left">
                <div class="card card-list-video" style="width: 100%;">
                    @foreach ($videoName as $name)
                        <p>{!!$name->lesson_video!!}</p>
                        <div class="vid-tit">
                        <h5>{{$name->lesson_title}}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 right">
                <div class="card listVideoContent" style="width: 100%;">
                    <div class="listVideo-title">
                        @foreach ($videoName as $brand)
                            <h5>{{$brand->lesson_brand}}</h5>
                        @endforeach
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                        @foreach ($video as $vid)
                            @foreach ($relate as $key => $rela)
                                    <div class="card-header" id="heading-{{$key}}">
                                        <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left accor-btn" type="button" data-toggle="collapse" data-target="#collapse-{{$key}}" aria-expanded="true" aria-controls="collapseOne">
                                            {{$rela->part_title}}
                                        </button>
                                        </h2>
                                    </div>
                                    <div id="collapse-{{$key}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                        <div class="list-video">
                                            <ul>
                                                <li><a href="/video/{{$rela->lesson_slug}}">{{$rela->lesson_title}}</a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                            @endforeach             
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection