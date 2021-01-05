@extends('admin')
@section('title','Cập Nhật Sự kiện')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Sự Kiện
            </header>
            <div class="panel-body">
                @foreach ($edit_event as $edit_eve)
                <div class="position-center">
                    <form role="form" action="/capnhatsk/{{$edit_eve->event_id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề sự kiện</label>
                            <textarea type="text" name="event_title" class="form-control" style="resize: none" rows="8" id="desCourse">{{$edit_eve->event_title}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Người tổ chức</label>
                            <textarea type="text" name="event_name" class="form-control" style="resize: none" rows="8" id="desIns">{{$edit_eve->event_name}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Ngày tổ chức</label>
                            <textarea type="text" name="event_date_time" class="form-control" style="resize: none" rows="8" id="desRes">{{$edit_eve->event_date_time}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Địa điểm tổ chức</label>
                            <textarea type="text" name="event_place" class="form-control" style="resize: none" rows="8" id="desPlace">{{$edit_eve->event_place}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Phí tham gia</label>
                            <input type="text" class="form-control" value="{{$edit_eve->event_price}}" name="event_price" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Bản đồ</label>
                            <textarea type="text" name="event_map" class="form-control" style="resize: none" rows="8" id="desContent">{{$edit_eve->event_map}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Nội dung sự kiện</label>
                            <textarea type="text" name="event_content" class="form-control" style="resize: none" rows="8" id="desPrice">{{$edit_eve->event_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="txt_label">Hình ảnh</label>
                            <input type="file" name="event_image" id="exampleInputFile">
                            <img src="/public/upload/course/{{$edit_eve->event_image}}" alt="" width="80px" height="50px" style="margin-top: 10px">
                            <p class="help-block">Ảnh cho sự kiện</p>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Cập nhật sự kiện</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection