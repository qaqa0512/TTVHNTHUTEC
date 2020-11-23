@extends('admin')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Khóa Học
            </header>
            <?php
                $mess = Session::get('mes');
                if($mess){
                    echo '<p class="error">'.'<i class="fa fa-exclamation-triangle"></i>'.' '.$mess.'</p>';
                    Session::put('mes',null);
                }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="/themkh" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Tiêu đề</label>
                            <input type="text" class="form-control" name="course_title" id="exampleInputEmail1" placeholder="Nhập vào tiêu đề....">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="txt_label">Họ tên giảng viên</label>
                            <input type="text" class="form-control" name="course_name" id="exampleInputEmail1" placeholder="Nhập vào tiêu đề....">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Mô tả</label>
                            <textarea type="text" name="course_description" class="form-control" style="resize: none" rows="8" id="exampleInputPassword1" placeholder="Nhập vào họ tên...."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="txt_label">Thể loại</label>
                            <select class="form-control input-lg m-bot15" name="course_category">
                                <option>Âm nhạc</option>
                                <option>Thời trang</option>
                                <option>Nhạc cụ</option>
                                <option>Truyền thông</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="txt_label">Hình ảnh</label>
                            <input type="file" name="course_image" id="exampleInputFile">
                            <p class="help-block">Ảnh bìa cho khóa học</p>
                        </div>
                        <button type="submit" class="btn btn-info" name="add-courses">Thêm khóa học</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection