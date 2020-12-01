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
                        <h5 >Nhiếp ảnh 360 Cơ Bản - Học chụp ảnh cho người mới bắt đầu</h5>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                        @foreach ($video as $vid)
                            @foreach ($relate as $rela)
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left accor-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{$rela->part_title}}
                                        </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                        {{-- <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed accor-btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Phần 2: Kiến thức cốt lõi
                            </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-video">
                                    <ul>
                                    <li><a href="#">Bài 2: Tìm hiểu về khẩu độ</a></li>
                                    <li><a href="#">Bài 3: Tìm hiểu về tốc độ chụp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed accor-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Phần 3: Tổng kết
                            </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-video">
                                    <ul>
                                        <li><a href="#">Bài 3: Lễ tốt nghiệp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection