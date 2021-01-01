@extends('layout')
@section('title','Chi tiết Blog')
@section('content')
<div class="Home">
    <div class="container">
        <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C">Blog</span></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C">Âm nhạc</span></li>
            </ul>
        </div>
     </div>
    </div>
</div>
@foreach ($blog_detail as $blog_de)
<div class="blog_Detail">
    <div class="blog_detail_image">
        <img src="/public/upload/course/{{$blog_de->blog_image}}" alt="">
    </div>
    <div class="blog_detail_content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog_detail_content_box">
                        <div class="blog_detail_content_title">
                            <h5>{!!$blog_de->blog_title!!}</h5>
                        </div>
                        <div class="blog_detail_content_text">
                            <span>
                                {!!$blog_de->blog_content!!}
                            </span>
                        </div>
                        <div class="blog_detail_content_postman">
                            <div class="blog_post_name">{{$blog_de->name}}</div>
                            <div class="blog_post_ic">&nbsp-&nbsp</div>
                            <div class="blog_post_date">{{date('d/m/Y H:i')}}</div>
                        </div>
                        <div class="blog_detail_content_comment">
                            <div class="blog_detail_comment_title">
                                <h5>Bình luận</h5>
                            </div>
                            <div class="blog_detail_comment_form">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <form action="" method="post">
                                                <textarea type="text" name="lesson_video" class="form-control" style="resize: none" rows="8" id="blogComm" placeholder="Viết bình luận ở đây..."></textarea>
                                                <button class="btn_blog_comm" type="submit">Gửi bình luận</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="blog_lanee">
                            <div class="blog_detail_comment_display d-flex">
                                <div class="blog_detail_comment_display_name">
                                    <div class="blog_comment_name_id d-flex">
                                        <p class="blog_name_id">Quoc Anh</p>
                                        <span id="link__">&nbsp-</span>
                                        <span class="blog_time_id_post">&nbsp 30/12/2020</span>
                                      </div>
                                      <div class="blog_comment_name_text">
                                        <span class="text_id">Mỗi khi cất lên câu hát dường như mọi phiền muộn trong tôi đều với đi hết</span>
                                      </div>
                                    </div>
                                    <div class="blog_comment_status_show">
                                      <div class="btn-group dropright">
                                        <button type="button" class="btn_comment_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          ...
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="" onclick="return confirm('Bạn chắc chắn muốn xóa nó?')">Xóa bình luận</a>
                                        </div>
                                      </div>
                                      <div class="comment_reply">
                                          <span id="id_replay">Trả lời</span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection