@extends('admin')
@section('title','Thêm khóa học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-extra">
            <header class="panel-heading">
                Thêm phần cho bài học
            </header>
            <div class="panel-body panel-body-extra">
                <div class="position-center">
                    <form role="form" action="/themph" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã khóa học</label>
                            <select class="form-control input-lg m-bot15" name="part_course_id">
                                @foreach ($Course as $cou)
                                    <option value="{{$cou->id}}">{{$cou->course_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề của phần học</label>
                            <input type="text" class="form-control" name="part_title" id="exampleInputEmail1" placeholder="Nhập vào tiêu đề....">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã mô tả</label>
                            <select class="form-control input-lg m-bot15" name="part_detail_id">
                                @foreach ($Detail as $del)
                                <option>{{$del->detail_id}}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-info" name="add-courses">Thêm phần bài học</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection