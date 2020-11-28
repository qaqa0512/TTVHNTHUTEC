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
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0"></option>
            <option value="1"></option>
            <option value="2"></option>
            <option value="3"></option>
          </select>
          <button class="btn btn-sm btn-default">Sắp xếp</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên khóa học</th>
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
                <td><span class="text-ellipsis">{{$detail->detail_des_name}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_course}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_instructor}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_request}}</span></td>
                <td><span class="text-ellipsis">{{$detail->detail_des_rate}}</span></td>
                <td>
                  <a href="/quantri/capnhatmotakhoahoc/{detail_id}" class="active" ui-toggle-class="">
                    <i class="fa fa-edit text-success text-active"></i>
                  </a>
                  <a href="" class="active" ui-toggle-class="">
                    <i class="fa fa-times text-danger text"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection