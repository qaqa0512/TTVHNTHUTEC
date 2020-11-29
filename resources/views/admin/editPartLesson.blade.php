@extends('admin')
@section('title','Cập nhật phần bài học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-extra">
            <header class="panel-heading">
                Cập nhật phần cho bài học
            </header>
            <div class="panel-body panel-body-extra">
                @foreach ($editPart as $editPa)
                <div class="position-center">
                    <form role="form" action="/capnhatph/{{$editPa->part_id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã khóa học</label>
                            <select class="form-control input-lg m-bot15" name="part_course_id">
                                @foreach ($Course as $cou)
                                    @if ($cou->id == $editPa->course_id)
                                        <option selected value="{{$cou->id}}">{{$cou->course_title}}</option>
                                    @else
                                        <option value="{{$cou->id}}">{{$cou->course_title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề của phần học</label>
                            <input type="text" value="{{$editPa->part_title}}" class="form-control" name="part_title" id="exampleInputEmail1" placeholder="Nhập vào tiêu đề....">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã mô tả</label>
                            <select class="form-control input-lg m-bot15" name="part_detail_id">
                            @foreach ($Detail as $del)
                                @if ($del->detail_id == $editPa->detail_id)
                                    <option selected value="{{$del->detail_id}}">{{$del->detail_id}}</option>
                                @else
                                    <option value="{{$del->detail_id}}">{{$del->detail_id}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Cập nhật phần bài học</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection