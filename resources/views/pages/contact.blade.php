@extends('layout')
@section('title','Liên hệ')
@section('content')
{{-- Contact map --}}
<div class="empty"></div>
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1251208102735!2d106.71230301462275!3d10.801727892304376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDw7RuZyBOZ2jhu4cgVFAuSENNIC0gSFVURUNI!5e0!3m2!1svi!2s!4v1607753399953!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="contact">
    <div class="container contact_content">
        <div class="row ">
            <div class="col-lg-6">
                <div class="contact_title">
                    <h5>Thông tin liên lạc</h5>
                </div>
                <div class="contact_info">
                    <p><i class="far fa-clock"></i> 07:30 – 19:30</p>
                    <p><i class="fas fa-phone"></i> +84 285 445 7777</p>
                    <p><i class="far fa-envelope"></i> nguyenquocanh0512@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> 475A Điện Biên Phủ, Q Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact_form">
                    <div class="contact_form_title">
                        <h5>Liên hệ</h5>
                    </div>
                    <div class="contact__form_info">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 mb-3"><input class="form-control" type="text" placeholder="Nhập vào họ tên...." id="nameForm"></div>
                                <div class="col-sm-6 mb-3"><input class="form-control" type="text" placeholder="Nhập vào email.... " id="emailForm"></div>
                                <div class="col-sm-12 mb-3"><textarea rows="6" cols="78" placeholder="Nội dung" id="contentForm"></textarea></div>
                                <div class="col">
                                    <button type="submit" class="contact_btn">Gửi đi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection