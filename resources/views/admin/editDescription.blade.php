@extends('admin')
@section('title','Cập nhật mô tả khóa học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Mô tả Khóa Học
            </header>
            <div class="panel-body">
                @foreach ($edit_description as $key => $edit_des)
                <div class="position-center">
                    <form role="form" action="/capnhatmotakh/{{$edit_des->detail_id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tên khóa học</label>
                            <input type="text" value="{{$edit_des->detail_des_name}}" class="form-control" name="detail_des_name" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Tổng quan về khóa học</label>
                            <textarea type="text"  name="detail_des_course" class="form-control" style="resize: none" rows="8" id="exampleInputPassword1">{{$edit_des->detail_des_course}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thông tin người hướng dẫn</label>
                            <textarea type="text" name="detail_des_instructor" class="form-control" style="resize: none" rows="8" id="exampleInputPassword1">{{$edit_des->detail_des_instructor}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Yêu Cầu</label>
                            <textarea type="text" name="detail_des_request" class="form-control" style="resize: none" rows="8" id="exampleInputPassword1">{{$edit_des->detail_des_request}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Đánh giá</label>
                            <textarea type="text" name="detail_des_rate" class="form-control" style="resize: none" rows="8" id="exampleInputPassword1">{{$edit_des->detail_des_rate}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Cập nhập mô tả khóa học</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection