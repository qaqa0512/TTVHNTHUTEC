@extends('admin')
@section('title','Danh sách câu lạc bộ')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
        Danh sách câu lạc bộ
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
              <th>Tên CLB</th>
              <th>Slug CLB</th>
              <th>Hình ảnh CLB</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($club_category as $club_cate)
            <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td><span class="text-ellipsis">{{$club_cate->club_category_title}}</span></td>
                <td><span class="text-ellipsis">{{$club_cate->club_category_slug}}</span></td>
                <td><img src="/public/upload/course/{{$club_info_cate->club_category_image}}" alt="" width="50px" height="50px" style="object-fit: cover"></td>
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