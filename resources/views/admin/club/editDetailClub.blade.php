@extends('admin')
@section('title','Cập nhật thông tin câu lạc bộ')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật thông tin câu lạc bộ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @foreach ($edit_clubb as $editClubInfo)
                    <form role="form" action="/capnhatthongtinclb/{{$editClubInfo->club_id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tên câu lạc bộ</label>
                            <select class="form-control input-lg m-bot15" name="club_category_id">
                                @foreach ($edit_club_cate as $editClubCategory)
                                @if ($editClubCategory->club_category_id == $editClubInfo->club_category_id)
                                    <option value="{{$editClubCategory->club_category_id}}">{{$editClubCategory->club_category_title}}</option>
                                @else
                                <option value="{{$editClubCategory->club_category_id}}">{{$editClubCategory->club_category_title}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thông tin câu lạc bộ</label>
                            <textarea type="text" name="club_info" class="form-control" style="resize: none" rows="8" id="clubInfo">{{$editClubInfo->club_info}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Cập nhật thông tin câu lạc</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
@endsection