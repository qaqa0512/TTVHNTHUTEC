@extends('admin')
@section('title','Danh sách phần học')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
        Phần bài học
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
        <table class="table table-striped b-t b-light" id="myTable">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Mã khóa học</th>
              <th>Tiêu đề học phần</th>
              {{-- <th>Mã mô tả</th> --}}
              <th style="width:30px;"></>
            </tr>
          </thead>
          <tbody>
            @foreach ($allPartContent as $part)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><span class="text-ellipsis">{{$part->course_title}}</span></td>
              <td><span class="text-ellipsis">{{$part->part_title}}</span></td>
              {{-- <td><span class="text-ellipsis">{{$part->detail_id}}</span></td> --}}
              <td></td>
              <td>
                <a href="/quantri/capnhatphanhoc/{{$part->part_id}}" class="active" ui-toggle-class="">
                  <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a href="/quantri/xoaphanhoc/{{$part->part_id}}" class="active" ui-toggle-class="" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">
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