@extends('admin')
@section('title','Thêm Sự kiện')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Sự Kiện
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="/themsk" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề sự kiện</label>
                            <textarea type="text" name="event_title" class="form-control" style="resize: none" rows="8" id="desCourse"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Người tổ chức</label>
                            <textarea type="text" name="event_name" class="form-control" style="resize: none" rows="8" id="desIns"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Ngày tổ chức</label>
                            <textarea type="text" name="event_date_time" class="form-control" style="resize: none" rows="8" id="desRes"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Địa điểm tổ chức</label>
                            <textarea type="text" name="event_place" class="form-control" style="resize: none" rows="8" id="desPlace"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Phí tham gia</label>
                            <input type="text" class="form-control" name="event_price" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Bản đồ</label>
                            <textarea type="text" name="event_map" class="form-control" style="resize: none" rows="8" id="desContent"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Nội dung sự kiện</label>
                            <textarea type="text" name="event_content" class="form-control" style="resize: none" rows="8" id="desPrice"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="txt_label">Hình ảnh</label>
                            <input type="file" name="event_image" id="exampleInputFile">
                            <p class="help-block">Ảnh cho sự kiện</p>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Thêm sự kiện</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection