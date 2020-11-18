@extends('layout')
@section('title','Khóa học')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="/khoahoc">Khóa học</a></li>
            </ul>
        </div>
     </div>
</div>
{{--  --}}
<div class="background-course">
    <div class="music-container">
        <div class="music-title">
            <h2>Với niềm đam mê và sự cố gắng sẽ giúp bạn vượt qua tất cả</h2>
        </div>

        <div class="music-flex">
            @foreach ($courselist as $course)
            <div class="music-body">
                <div class="music-image">
                    <img src="{{$course->image}}" alt="">
                </div>
                <div class="music-position">
                    <div class="music-text">
                        <h2><a href="/khoahoc/chitiet">{{$course->title}}</a></h2>
                    </div>
                    <div class="music-info">
                        <ul>
                            <li><a href="#">{{$course->name}}</a></li>
                            <li><i class="fa fa-caret-right icon-lane"></i></li>
                            <li><a href="">{{$course->title}}</a></li>
                        </ul>
                    </div>
                    <div class="music-content">
                        <span>{{$course->description}}</span>
                    </div>
                </div>
                <div class="music-footer">
                    <div class="padding-music">
                        <div class="viewer-music">
                            <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                            <span>10</span>
                        </div>
                        <div class="price-music">
                            <a href="">Free</a>
                        </div>
                            <div class="vote-music">
                                <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                <span>5</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="music-body">
                    <div class="music-image">
                        <img src="./img/course_1.jpg" alt="">
                    </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="music-flex">
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="music-flex">
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="music-body">
                        <div class="music-image">
                             <img src="./img/course_1.jpg" alt="">
                        </div>
                        <div class="music-position">
                            <div class="music-text">
                                <h2><a href="">Thanh Nhạc</a></h2>
                            </div>
                            <div class="music-info">
                                <ul>
                                    <li><a href="#">Quốc Anh Nguyễn</a></li>
                                    <li><i class="fa fa-caret-right icon-lane"></i></li>
                                    <li><a href="">Thanh Nhạc</a></li>
                                </ul>
                            </div>
                            <div class="music-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</span>
                            </div>
                        </div>
                        <div class="music-footer">
                            <div class="padding-music">
                                <div class="viewer-music">
                                    <i class="fa fa-user" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>10</span>
                                </div>
                                <div class="price-music">
                                    <a href="">Free</a>
                                </div>
                                <div class="vote-music">
                                    <i class="fa fa-star" style="margin-right: 5px;color: #AE4CA4;"></i>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endforeach
                {{-- <div class="load-more">
                    <a href="">Tải thêm</a>
                </div> --}}
            </div>

</div>
@endsection