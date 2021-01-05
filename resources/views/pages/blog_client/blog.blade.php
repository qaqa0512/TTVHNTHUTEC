@extends('layout')
@section('title','Blog')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C">Sự kiện</span></li>
            </ul>
        </div>
     </div>
</div>
<div class="blog_page">
    @if(Auth::check())
    <div class="create_blog">
        <button type="button" class="btn_create_blog" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i>Tạo blog mới</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tạo blog mới</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form role="form" action="/blog/themblog" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="user_id">
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label"id="blogg_cate">Thể loại: </label>
                        <select class="form-control input-lg m-bot15" name="blog_cate">
                            <option>Âm nhạc</option>
                            <option>Thể thao</option>
                            <option>Ẩm thực</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="message-text" class="col-form-label blogg_title" id="blogg_cate">Tiêu đề blog:</label>
                        <textarea class="form-control" name="blog_title" id="blogg_title"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label" id="blogg_cate">Nội dung tóm tắt:</label>
                            <textarea class="form-control" name="blog_sum" id="blogg_sum"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label" id="blogg_cate">Nội dung bài blog:</label>
                            <textarea class="form-control" name="blog_content" id="blogg_content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" id="blogg_cate">Hình ảnh</label>
                            <input type="file" name="blog_image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
                            <button type="submit" name="insertBlog" class="btn_blogg_createnew">Tạo mới</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <?php
            $mess = Session::get('mes');
            if($mess){
                echo '<p class="error">'.'<i class="fa fa-info-circle"></i>'.' '.$mess.'</p>';
                Session::put('mes',null);
            }
        ?>
        <div class="blog_page_title">
            <h5>Nơi chúng ta sẻ chia niềm vui cùng nhau</h5>    
        </div>
        <div class="row blog_list_category">
            <div class="col-sm-4 mb-4">
                <div class="blog_page_category">
                    <div class="layer_blog_page"></div>
                    <div class="blog_page_img">
                        <img src="./img/pexels-photo-1173651.jpeg" alt="">
                    </div>
                    <div class="blog_category_page_title">
                        <h5>Âm nhạc</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="blog_page_category">
                    <div class="layer_blog_page"></div>
                    <div class="blog_page_img">
                        <img src="./img/pexels-photo-1192043.jpeg" alt="">
                    </div>
                    <div class="blog_category_page_title">
                        <h5>Thể Thao</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="blog_page_category">
                    <div class="layer_blog_page"></div>
                    <div class="blog_page_img">
                        <img src="./img/pexels-photo-1266741.jpeg" alt="">
                    </div>
                    <div class="blog_category_page_title">
                        <h5>Ẩm Thực</h5>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row blog_content mb-4">
            @foreach ($blog_display as $blogg)
            <div class="col-sm-6 mb-4">
                <div class="blog_content_left">
                    <div class="blog_content_left_image">
                        <img src="/public/upload/course/{{$blogg->blog_image}}" alt="">
                    </div>
                    <div class="blog_content_box">
                        <div class="blog_content_text"><a href="#" class="bloggg">{{$blogg->blog_cate}}</a></div>
                        <div class="blog_content_title"><a href="/chitietblog/{{$blogg->blog_id}}" class="bloggg-tit">{!!$blogg->blog_title!!}</a></div>
                        <div class="blog_des">
                            <p>{!!$blogg->blog_sum!!}</p>
                        </div>
                        <div class="blog-right-details"><a href="/chitietblog/{{$blogg->blog_id}}" class="bloggg-detail">Chi tiết hơn <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection