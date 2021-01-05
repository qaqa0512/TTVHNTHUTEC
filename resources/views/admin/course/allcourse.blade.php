@extends('admin')
@section('title','Danh sách khóa học')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
        Liệt kê các khóa học
    </div>
    <?php
    $mess = Session::get('mes');
    if($mess){
        echo '<p class="error">'.'<i class="fa fa-info-circle"></i>'.' '.$mess.'</p>';
        Session::put('mes',null);
    }
    ?>
    <div class="row w3-res-tb">
      <div class="table-responsive">
        <table class="table table-striped b-t b-light" id="myTable">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên khóa học</th>
              <th>Người hướng dẫn</th>
              <th>Mô tả</th>
              <th>Thể loại</th>
              <th>Hình ảnh</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($course as $key => $cate_cou)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$cate_cou->course_title}}</td>
              <td><span class="text-ellipsis">{{$cate_cou->course_name}}</span></td>
              <td><span class="text-ellipsis">{{$cate_cou->course_description}}</span></td>
              <td><span class="text-ellipsis">{{$cate_cou->course_category}}</span></td>
              <td><img src="/public/upload/course/{{$cate_cou->course_image}}" alt="" width="50px" height="50px"></td>
              <td>
                <a href="/quantri/capnhatkhoahoc/{{$cate_cou->id}}" class="active" ui-toggle-class="">
                  <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a href="/quantri/xoakhoahoc/{{$cate_cou->id}}" class="active" ui-toggle-class="" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">
                  <i class="fa fa-times text-danger text"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection