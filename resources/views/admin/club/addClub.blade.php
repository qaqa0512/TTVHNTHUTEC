@extends('admin')
@section('title','Thêm Câu Lạc Bộ')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Câu Lạc Bộ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="/themclb" method="POST" enctype="multipart/form-data" id="form_club_admin">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tên CLB</label>
                            <input type="text" class="form-control" name="club_category_title" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Slug CLB</label>
                            <input type="text" class="form-control" name="club_category_slug" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="txt_label">Ảnh đại diện câu lạc bộ</label>
                            <input type="file" name="club_category_image" id="exampleInputFile">
                            <p class="help-block">Ảnh đại diện cho câu lạc bộ</p>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Thêm câu lạc bộ</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection