@extends('client.layout')

@section('content')
<!-- about me -->
<div class="w3l-about py-5">
    <div class="container py-lg-3">
        <div class="row about-content mb-lg-5">
            <div class="col-lg-6 pr-md-5">
                <div class="image-block">
                    <img src="public/assets/images/me.jpg" class="img-fluid myphoto" alt="my photo" />
                    <img src="public/assets/images/cross.png" class="img-fluid pos" alt="dots" />
                </div>
            </div>
            <div class="col-lg-6 info pl-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-3 align-center">
                <h4 class="">Tôi là Búp Bê.</h4>
                <p class="mt-md-4 mt-3 mb-0"> Tác giả sách thiếu nhi và thiếu niên.
                    <br />Điều làm Búp Bê hăng say cống hiến
                    là mang lại những câu chuyện có ý nghĩa giáo dục sức khỏe thể chất và tinh thần cho con trẻ và phụ
                    huynh, giúp họ tìm thấy sự kết nối thương yêu ý nghĩa, sự hòa hợp và hạnh phúc trong từng trang
                    sách.
                </p>
                <img src="public/assets/images/signature.png" class="img-fluid signature" width="300px"
                    alt="my photo" />
                <p class="m-0 mb-2">Búp Bê</p>
                <h6>25/02/2021.</h6>
            </div>
        </div>
    </div>
</div>
<!-- //about me -->

<!-- about my profile -->
<section class="w3l-about-bottom py-5" id="about">
    <div class="container py-lg-5 py-md-3">
        <div class="row middle-grids">
            <div class="col-lg-7 advantage-grid-info">
                <div class="advantage_left">
                    <h4>Vài lời chia sẻ bạn đọc</h4>
                    <p class="">Sáng tác văn chương và sáng tạo nghệ thuật là niềm đam mê từ thuở nhỏ của Búp Bê. Báo
                        Nhi Đồng, Khăn Quàng Đỏ, Mực Tím đã từng là những người bạn tinh thần thân thiết của cô. Cô bắt
                        đầu viết văn, thơ, truyện từ khi học tiểu học.
                        <br />
                        Năm lớp 8, câu chuyện của cô đạt giải Nhất trong cuộc thi “Cùng Nhau Vì Màu Xanh” do Sở Giáo
                        Dục&Đào Tạo Khánh Hòa tổ chức, cùng các bài viết đăng trên Báo Khăn Quàng Đỏ suốt những năm
                        trung học cơ sở.
                        <br />
                        Lớn lên cùng niềm đam mê với giáo dục và tình yêu dành cho quê hương đất nước, mặc dù được đi du
                        lịch, học tập và làm việc tại các quốc gia tiên tiến như Pháp, Mỹ… cô hiện là nhà huấn luyện cá
                        nhân, huấn luyện sức khỏe được chứng nhận tại Hoa Kỳ nhưng Búp Bê vẫn quyết định quay về Việt
                        Nam để cống hiến và cho các thế hệ trẻ Việt Nam biết rằng, đất nước này là một nơi đẹp đẽ và
                        đáng sống, con người và văn hóa Việt Nam tuyệt vời và độc đáo.
                        <br />Chỉ cần các bạn nhận ra điều ấy,
                        hạnh phúc và thịnh vượng sẽ trở lại trên quê hương Âu Lạc Tiên Rồng.
                    </p>
                    <p class="mb-0">
                        <h3><b>Sáng tác ấu thơ:</b></h3>
                        <h5>Đồng Rau Muống</h5>
                        <b>“</b> Sáng em đi cùng mẹ
                        <br />Bế em trai trên tay
                        <br />Dắt dìu nhau trong nắng
                        <br />Trên cánh đồng mướt xanh
                        <br />Con đường dài như ngắn
                        <br />Có bạn bò đưa chân
                        <br />Tung tăng cùng chim sẻ
                        <br />Hót líu lo yêu đời
                        <br />Các bạn em cùng gió
                        <br />Thương nhau như bạn thân
                        <br />Bạn chúc em chăm học
                        <br />Em chúc bạn vui tươi
                        <br />Ai ai cũng thích cười.<b>”</b>
                    </p>
                    <!-- <a href="#resume" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">Download CV</a>
                        <a href="#contact" class="secondary-btn-style btn-secondary btn mt-lg-5 mt-4 ml-1">Hire
                            Me</a> -->
                </div>
            </div>
            <div class="col-lg-5 advantage-grid-info1">
                <div class="advantage_left1 mt-lg-0 mt-5">
                    <img src="public/assets/images/about.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about my profile -->
<!-- my featured projects -->
<!-- <section class="w3l-block py-5">
        <div class="container py-lg-3">
            <h3 class="title mb-md-5 mb-4">Featured projects </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 content" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="public/assets/images/alexandra.jpg" class="img-fluid w3layouts agileits"
                                alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-sm-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="public/assets/images/bench.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-md-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="public/assets/images/alexandra.jpg" class="img-fluid w3layouts agileits"
                                alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="content text-center mt-sm-5 mt-4">
                    <a href="#portfolio" class="btn btn-primary primary-btn-style">View more</a>
                </div>
            </div>
        </div>
    </section> -->
<!-- //my featured projects -->
@endsection