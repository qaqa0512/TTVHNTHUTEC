@extends('admin')
@section('title','Cập nhật bài học')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật bài học
            </header>
            <div class="panel-body">
                @foreach ($editLesson as $edit_lesson)
                <div class="position-center">
                    <form role="form" action="/capnhatbh/{{$edit_lesson->lesson_id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã khóa học</label>
                            <select class="form-control input-lg m-bot15" name="lesson_course_id">
                                @foreach ($Course as $cou)
                                    @if ($cou->id == $edit_lesson->course_id)
                                        <option selected value="{{$cou->id}}">{{$cou->course_title}}</option>
                                    @else
                                    <option value="{{$cou->id}}">{{$cou->course_title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề bài học</label>
                            <input type="text" value="{{$edit_lesson->lesson_title}}" class="form-control" name="lesson_title" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Video của bài học</label>
                            <textarea type="text" name="lesson_video" class="form-control" style="resize: none" rows="8" id="videoLesson">{{$edit_lesson->lesson_video}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mã phần học</label>
                            <select class="form-control input-lg m-bot15" name="lesson_part_id">
                                @foreach ($partContent as $part)
                                    @if ($part->part_id == $edit_lesson->part_id)
                                        <option selected value="{{$part->part_id}}">{{$part->part_title}}</option>
                                    @else
                                        <option value="{{$part->part_id}}">{{$part->part_title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Cập nhật bài học</button>
                    </form>
                </div>            
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection