@extends('admin')
@section('title','Thêm thông tin câu lạc bộ')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm thông tin câu lạc bộ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="/themthongtinclb" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tên câu lạc bộ</label>
                            <select class="form-control input-lg m-bot15" name="club_category_id">
                                @foreach ($club_catee as $clb)
                                <option value="{{$clb->club_category_id}}">{{$clb->club_category_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thông tin câu lạc bộ</label>
                            <textarea type="text" name="club_info" class="form-control" style="resize: none" rows="8" id="clubInfo"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Thêm thông tin câu lạc</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection