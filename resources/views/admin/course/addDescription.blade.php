@extends('admin')
@section('title','Thêm khóa học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Mô tả Khóa Học
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="/themmotakh" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã Khóa học</label>
                            <select class="form-control input-lg m-bot15" name="description_course_id">
                                @foreach ($course as $cou)
                                    <option value="{{$cou->id}}">{{$cou->course_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Tổng quan về khóa học</label>
                            <textarea type="text" name="detail_des_course" class="form-control" style="resize: none" rows="8" id="desCourse" placeholder="Nhập vào họ tên...."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thông tin người hướng dẫn</label>
                            <textarea type="text" name="detail_des_instructor" class="form-control" style="resize: none" rows="8" id="desIns" placeholder="Nhập vào họ tên...."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Yêu Cầu</label>
                            <textarea type="text" name="detail_des_request" class="form-control" style="resize: none" rows="8" id="desRes" placeholder="Nhập vào họ tên...."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Đánh giá</label>
                            <textarea type="text" name="detail_des_rate" class="form-control" style="resize: none" rows="8" id="desRate" placeholder="Nhập vào họ tên...."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã Khóa học</label>
                            <select class="form-control input-lg m-bot15" name="description_lesson_id">
                                @foreach ($lesson as $le)
                                    <option value="{{$le->lesson_id}}">{{$le->lesson_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Thêm khóa học</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection