@extends('admin')
@section('title','Danh sách khóa học')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
        Mô tả khóa học
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
              <th>Mã khóa học</th>
              <th>Tổng quan khóa học</th>
              <th>Thông tin người hướng dẫn</th>
              <th>Yêu cầu</th>
              <th>Đánh giá</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($detailCourse as $key => $detail)
            <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td><span class="text-ellipsis">{{$detail->course_title}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_course}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_instructor}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_request}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_rate}}</span></td>
                <td>
                  <a href="/quantri/capnhatmotakhoahoc/{{$detail->detail_id}}" class="active" ui-toggle-class="">
                    <i class="fa fa-edit text-success text-active"></i>
                  </a>
                  <a href="/quantri/xoamotakhoahoc/{{$detail->detail_id}}" class="active" ui-toggle-class="" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">
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