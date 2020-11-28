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
                            <label for="exampleInputPassword1" class="txt_label">Mã Khóa học</label>
                            <select class="form-control input-lg m-bot15" name="description_course_id">
                                @foreach ($course as $cou)
                                        @if ($cou->id == $edit_des->course_id)
                                            <option selected value="{{$cou->id}}">{{$cou->course_title}}</option>
                                        @else
                                            <option value="{{$cou->id}}">{{$cou->course_title}}</option>
                                        @endif
                                        
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Tổng quan về khóa học</label>
                            <textarea type="text"  name="detail_des_course" class="form-control" style="resize: none" rows="8" id="desCourse">{{$edit_des->detail_des_course}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thông tin người hướng dẫn</label>
                            <textarea type="text" name="detail_des_instructor" class="form-control" style="resize: none" rows="8" id="desIns">{{$edit_des->detail_des_instructor}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Yêu Cầu</label>
                            <textarea type="text" name="detail_des_request" class="form-control" style="resize: none" rows="8" id="desRes">{{$edit_des->detail_des_request}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Đánh giá</label>
                            <textarea type="text" name="detail_des_rate" class="form-control" style="resize: none" rows="8" id="desRate">{{$edit_des->detail_des_rate}}</textarea>
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