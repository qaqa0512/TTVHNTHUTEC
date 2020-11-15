@extends('layout')
@section('title','Chi tiết khóa học')
@section('content')
{{-- Details --}}
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="">Home</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><a href="">Khóa học</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><p class="details-title">Thanh Nhạc</p></li>
            </ul>
            </ul>
        </div>
     </div>
</div>
{{-- Intro Details  --}}
<div class="Intro">
    {{-- background-intro --}}
    <div class="background-intro">
        <img src="../img/119469758_2462420790718075_3741060378152167569_o.jpg" alt="background intro">
        <div class="intro-content">
            <div class="rating">
                <div class="btn-intro">Free</div>
            </div>
            <div class="title-intro">
                <h2>Thanh Nhạc</h2>
            </div>
            <div class="information">
                <p>Người hướng dẫn: <a href="" class="instructor">ABCDZ</a></p>
            </div>
            <div class="img-intro">
                <img src="../img/29TI8030.jpg" alt="">
            </div>
        </div>
    </div>
    {{-- Course-intro --}}
    <div class="course-details">
        <div class="course-top-details">
            <div class="course-details-container">
                <div class="left-details">
                    <div class="tab-details">
                        <ul>
                            <li class="active">
                                <span class="text-details">Mô tả</span>
                            </li>
                            <li>
                                <span class="text-details">Nội dung khóa học</span>
                            </li>
                            <li>
                                <span class="text-details">Thành viên</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content-details">
                        <div class="tap-warp" style="display: block;">
                            <div class="tab-title">
                                Mô Tả 
                            </div>
                            <div class="tab-content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, fugiat? Quod ad eum facere rem sint minima nulla repellendus quis pariatur corrupti excepturi saepe, fuga perspiciatis. Hic quasi ab, culpa, nemo consectetur blanditiis voluptatum, laborum accusantium dolorum rem molestiae! Iusto nam fuga tempore earum quaerat. Ipsum fugit sunt ipsam inventore!</p>
                            </div>
                        </div>
                        <div class="tap-warp" style="display: none;">
                            <div class="tab-title">
                                Nội Dung Khóa Học
                            </div>
                            <div class="tab-content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, fugiat? Quod ad eum facere rem sint minima nulla repellendus quis pariatur corrupti excepturi saepe, fuga perspiciatis. Hic quasi ab, culpa, nemo consectetur blanditiis voluptatum, laborum accusantium dolorum rem molestiae! Iusto nam fuga tempore earum quaerat. Ipsum fugit sunt ipsam inventore!</p>
                            </div>
                        </div>
                        <div class="tap-warp" style="display: none;">
                            <div class="tab-title">
                                Thành Viên
                            </div>
                            <div class="tab-content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, fugiat? Quod ad eum facere rem sint minima nulla repellendus quis pariatur corrupti excepturi saepe, fuga perspiciatis. Hic quasi ab, culpa, nemo consectetur blanditiis voluptatum, laborum accusantium dolorum rem molestiae! Iusto nam fuga tempore earum quaerat. Ipsum fugit sunt ipsam inventore!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-details">
                    <div class="right-title">
                        <span>Thanh Nhạc</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection