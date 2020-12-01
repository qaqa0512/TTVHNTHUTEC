@extends('admin')
@section('title','Thêm khóa học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm bài học
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="/thembh" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã khóa học</label>
                            <select class="form-control input-lg m-bot15" name="lesson_course_id">
                                @foreach ($Course as $cou)
                                    <option value="{{$cou->id}}">{{$cou->course_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề bài học</label>
                            <input type="text" class="form-control" name="lesson_title" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Video của bài học</label>
                            <textarea type="text" name="lesson_video" class="form-control" style="resize: none" rows="8" id="videoLesson" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã phần học</label>
                            <select class="form-control input-lg m-bot15" name="lesson_part_id">
                                @foreach ($part_Content as $part)
                                    <option value="{{$part->part_id}}">{{$part->part_title}}</option>
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