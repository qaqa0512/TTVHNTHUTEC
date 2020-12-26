@extends('admin')
@section('title','Danh sách các sự kiện')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
        Danh sách các sự kiện
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
              <th>Tiêu đề sự kiện</th>
              <th>Người tổ chức</th>
              <th>Ngày tổ chức</th>
              <th>Địa điểm tổ chức</th>
              <th>Phí tham gia</th>
              <th>Bản đồ</th>
              <th>Nội dung</th>
              <th>Hình ảnh</th>
              <th></th>
              <th style="width:30px;"></>
            </tr>
          </thead>
          <tbody>
            @foreach ($event as $eve)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><span class="text-ellipsis">{!!$eve->event_title!!}</span></td>
              <td><span class="text-ellipsis">{!!$eve->event_name!!}</span></td>
              <td><span class="text-ellipsis">{!!$eve->event_date_time!!}</span></td>
              <td><span class="text-ellipsis">{!!$eve->event_place!!}</span></td>
              <td><span class="text-ellipsis">{!!$eve->event_price!!}</span></td>
              <td><span class="text-ellipsis">{!!$eve->event_map!!}</span></td>
              <td><span class="text-ellipsis">{!!$eve->event_content!!}</span></td>
              <td><img src="/public/upload/course/{{$eve->event_image}}" alt="" width="50px" height="50px" style="object-fit: cover"></td>
              <td></td>
              <td>
                <a href="/quantri/capnhatsukien/{{$eve->event_id}}" class="active" ui-toggle-class="">
                  <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a href="/quantri/xoasukien/{{$eve->event_id}}" class="active" ui-toggle-class="" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">
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