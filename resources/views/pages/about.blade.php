@extends('layout')
@section('title','Giới thiệu')
@section('content')
<div class="Home">
    <div class="Home-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-caret-right icon-lane"></i></li>
                <li><span style="color: #E1306C">Giới thiệu</span></li>
            </ul>
        </div>
     </div>
</div>
<div class="About">
    <div class="about_slider">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/index_background.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/index_background.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/index_background.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span> --}}
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span> --}}
                    </a>
                  </div>
            </div>
        </div>
    </div>
    <div class="about-content">
        <div class="container">
            <div class="row about_con_1">
                <div class="col-sm-7 about-left">
                        <div class="about_left_text">
                            <p>
                                Với nhiệm vụ phát hiện, bồi dưỡng năng khiếu nghệ thuật của sinh viên Đại học Công nghệ TP.HCM (HUTECH); triển khai tổ chức các hoạt động phong trào, sự kiện văn hóa của trường cũng như tham gia chinh phục các sân chơi có quy mô lớn trong nước và quốc tế, ngày 11/11/2015, Trung tâm Văn hóa Nghệ thuật HUTECH và Các CLB Văn hóa Nghệ thuật trực thuộc đã chính thức ra đời.
                            </p>
                        </div>
                </div>
                <div class="col-sm-5 about-right">
                    <img src="img/49110300_1938768806237741_949725098594533376_o.jpg" alt="...">
                </div>
            </div>
            <hr>
            <div class="row about_con_1">
                <div class="col-sm-5 about-right">
                    <img src="img/nhieu clb tai hutech.png" alt="...">
                </div>
                <div class="col-sm-7 about-left">
                        <div class="about_left_text">
                            <p>
                                Tham gia vào các CLB tại Trung tâm chúng ta sinh viên được giao lưu học hỏi và rèn luyện các kỹ năng nghệ thuật. Ngoài ra, các cuộc thi, các chương trình gặp gỡ giao lưu với những nghệ sỹ nổi tiếng để sân chơi văn hóa, nghệ thuật tại HUTECH thực sự hấp dẫn và bổ ích. Với sân chơi này sinh viên HUTECH chắc chắn sẽ có thêm nhiều cơ hội tham gia giao lưu, biểu diễn thực tế tại các sân khấu chuyên nghiệp để thỏa mãn đam mê và tài năng của bản thân.
                            </p>
                        </div>
                </div>

            </div>
            <hr>
            <div class="row about_con_1">
                <div class="col-sm-7 about-left">
                        <div class="about_left_text">
                            <p>
                                Trong nhiều năm qua, HUTECH luôn được xem là chiếc nôi của những tài năng lớn - sinh viên HUTECH không chỉ giỏi chuyên môn, tích cực tham gia nghiên cứu khoa học mà còn liên tiếp gặt hái nhiều giải thưởng cao tại các cuộc thi Văn hóa – Nghệ thuật trong nước và quốc tế. Trên nền tảng vững chắc đó, Trung tâm Văn hóa - Nghệ thuật HUTECH ra đời và hoạt động theo chiều sâu nhằm chuyên nghiệp hóa hoạt động phong trào sinh viên, phát hiện, khuyến khích, bồi dưỡng những tài năng nghệ thuật ngay trong chính cộng đồng sinh viên HUTECH.
                            </p>
                        </div>
                </div>
                <div class="col-sm-5 about-right">
                    <img src="img/K19.jpg" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection