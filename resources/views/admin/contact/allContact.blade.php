@extends('admin')
@section('title','Thông tin người liên hệ')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
        Danh sách thông tin người liên hệ
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
              <th>Tên người liên hệ</th>
              <th>Email</th>
              <th>Nội dung liên hệ</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contact as $conta)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><span class="text-ellipsis">{{$conta->contact_name}}</span></td>
              <td><span class="text-ellipsis">{{$conta->contact_email}}</span></td>
              <td><span class="text-ellipsis">{{$conta->contact_content}}</span></td>
              <td>
                <a href="" class="active" ui-toggle-class="">
                  <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a href="" class="active" ui-toggle-class="" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">
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