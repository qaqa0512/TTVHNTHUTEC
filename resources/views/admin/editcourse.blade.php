@extends('admin')
@section('title','Cập nhật khóa học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Khóa Học
            </header>
            <div class="panel-body">
                @foreach ($edit_course as $key => $edit_value)
                <div class="position-center">
                <form role="form" action="/capnhatkh/{{$edit_value->course_id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề</label>
                        <input type="text" value="{{$edit_value->course_title}}" class="form-control" name="course_title" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Họ tên giảng viên</label>
                            <input type="text" value="{{$edit_value->course_name}}" class="form-control" name="course_name" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mô tả</label>
                            <textarea type="text" name="course_description" class="form-control" style="resize: none" rows="8" id="exampleInputPassword1">{{$edit_value->course_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thể loại</label>
                            <select class="form-control input-lg m-bot15" name="course_category">
                                @foreach ($edit_course as $key => $edit_value)
                                    <option>{{ $edit_value->course_category}}</option>
                                @endforeach
                                    <option>Âm nhạc</option>
                                    <option>Thời trang</option>
                                    <option>Nhạc cụ</option>
                                    <option>Truyền thông</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="txt_label">Hình ảnh</label>
                            <input type="file" name="course_image" id="exampleInputFile">
                            <img src="/public/upload/course/{{$edit_value->course_image}}" alt="" width="80px" height="50px" style="margin-top: 10px">
                            <p class="help-block">Ảnh bìa cho khóa học</p>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Cập nhật khóa học</button>
                    </form>
                </div>            
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection