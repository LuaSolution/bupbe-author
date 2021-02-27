@extends('client.layout')

@section('content')
<!-- w3l-content-photo-5 -->
<div class="w3l-content-photo-5 py-5">
    <div class="content-main py-lg-5 py-md-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content-left">
                    <h3>Chào mừng các bạn đến với trang web của Búp Bê</h3>
                    <p class="mb-0">Búp Bê, tác giả sách giáo dục thể chất và
                        tinh thần cho thiếu nhi và thiếu niên.
                        <br />
                        <br />Nơi đây quý phụ huynh có thể tìm hiểu thông tin về Búp
                        Bê, về các cuốn sách của cô, cùng các chương trình đào tạo về cách dùng sách làm công cụ kết nối
                        giữa phụ huynh và con trẻ.
                        <br />
                        <br />Nơi các bạn có thể gửi các thử thách hoàn thành cho tác giả, chia sẻ
                        cảm nhận và cùng nhau xây dựng một thế giới hòa bình, hạnh phúc.</p>
                </div>
                <div class="col-lg-4 content-photo mt-lg-0 mt-sm-5 mb-md-0 mb-4">
                    <a href="#img">
                        <img src="public/assets/images/myimage.jpg" class="img-fluid" alt="content-photo"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //w3l-content-photo-5 -->

<!-- gallery-7 -->
<section class="w3l-gallery-7 bg-light py-5">
    <div class="gallery-7_sur py-lg-5">
        <div class="container">
            <div id="container">
                <div class="galleryContainer">
                    <div class="gallery">
                        <input type="radio" name="controls" id="c1" checked>
                        <img class="galleryImage img-fluid" id="i1" style="height: 500px"
                            src="public/assets/images/g1.jpg" class="img" alt="">
                        <input type="radio" name="controls" id="c2">
                        <img class="galleryImage img-fluid" id="i2" style="height: 500px;"
                            src="public/assets/images/g2.jpg" class="img" alt="">
                        <input type="radio" name="controls" id="c3">
                        <img class="galleryImage img-fluid" id="i3" style="height: 500px"
                            src="public/assets/images/g3.jpg" class="img" alt="">
                        <input type="radio" name="controls" id="c4">
                        <img class="galleryImage img-fluid" id="i4" style="height: 500px"
                            src="public/assets/images/g4.jpg" class="img" alt="">
                        <input type="radio" name="controls" id="c5">
                        <img class="galleryImage img-fluid" id="i5" style="height: 500px"
                            src="public/assets/images/g5.jpg" class="img" alt="">
                        <input type="radio" name="controls" id="c6">
                        <img class="galleryImage img-fluid" id="i6" style="height: 500px"
                            src="public/assets/images/g6.jpg" class="img" alt="">
                    </div>
                    <div class="thumbnails">
                        <label class="thumbnailImage" for="c1"><img src="public/assets/images/g1.jpg"
                                class="img img-fluid" alt=""></label>
                        <label class="thumbnailImage" for="c2"><img src="public/assets/images/g2.jpg"
                                class="img img-fluid" alt=""></label>
                        <label class="thumbnailImage" for="c3"><img src="public/assets/images/g3.jpg"
                                class="img img-fluid" alt=""></label>
                        <label class="thumbnailImage" for="c4"><img src="public/assets/images/g4.jpg"
                                class="img img-fluid" alt=""></label>
                        <label class="thumbnailImage" for="c5"><img src="public/assets/images/g5.jpg"
                                class="img img-fluid" alt=""></label>
                        <label class="thumbnailImage" for="c6"><img src="public/assets/images/g6.jpg"
                                class="img img-fluid" alt=""></label>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //gallery-7 -->

<!-- iphone home block -->
<!-- <section class="w3l-blog py-5">
    <div class="container py-lg-5">
        <div class="row">
            <div class="col-lg-3 col-6 pr-md-3 pr-2">
                <div class="img-block">
                    <a href="#img">
                        <img src="public/assets/images/iphone1.jpg" class="img-fluid" alt="image" />
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                <h3>Tiêu đề chính</h3>
                <h5 class="mt-3">Tiêu đề nhỏ</h5>
                <p class="mt-4 mb-0">Nội dung</p>
            </div>
        </div>
    </div>
</section> -->
<!-- //iphone home block -->

<!-- testimonial -->
<section class="w3l-quote-main">
    <div class="quote py-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-lg-9">
                    <h4>" Tôi mong ước vạn vật ở thế giới này hòa hợp với nhau từ gia đình, nhà trường, xã hội cho đến
                        cây cỏ, muôn thú và thiên nhiên. Con người cần phải hiểu rõ bản thân mới có thể hòa hợp với thế
                        giới xung quanh."</h4>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-3 text-lg-center tablet-grid">
                    <img src="assets/images/client2.jpg" alt="" class="img-fluid" />
                    <div>
                        <h6 class="mb-0 mt-lg-3">Búp Bê</h6>
                        <!-- <h5 class="mt-1">- UI/UX Designer </h5> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonial -->

<!-- home page blog-->
<section class="w3l-blog py-5 bg-light">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-5">
                <h3>Góc giới thiệu</h3>
                <h5 class="mt-3">Giới thiệu bộ sách <b>Những chuyến phiêu lưu của mèo Tita</b></h5>
                <p class="mt-4"> 5 tập đầu tiên của bộ sách kể về cô mèo nhỏ Tita, Những chuyến phiêu lưu của mèo Tita
                    gồm 5 câu chuyện tiếp nối nhau kể về chuyến phiêu lưu của Tita, vốn là cô mèo mồ côi, may mắn gặp
                    được một bạn thiếu niên tốt bụng nhận nuôi dưỡng.
                    <br />
                    Với tính cách ưa khám phá, vui vẻ, hay giúp đỡ, Tita được cư dân nơi mình đang sống - môi trường
                    quốc tế đa văn hóa, gần gũi thiên nhiên - quý mến.
                    <br />
                    Khi bạn đọc nhí đồng hành cùng mèo Tita qua nét vẽ sống động, gần gũi của họa sĩ Lam trong chuyến
                    phiêu lưu đầy màu sắc ấy, các em cũng hiểu thêm về giá trị của tình bạn chân thành, lòng biết ơn đối
                    với những điều xung quanh và tầm quan trọng trong ý thức nâng cao sức khỏe thể chất, cùng việc nuôi
                    dưỡng tinh thần tích cực.
                    <br />
                    Tiếp cận bộ sách, phụ huynh có nhiều cơ hội để cùng giáo dục và chia sẻ tình thương với con mình,
                    thông qua những câu chuyện về sự vâng lời, lòng tự trọng, sự khiêm nhường.</p>
            </div>
            <div class="col-lg-7 mt-lg-0 mt-4">
                <div class="img-block">
                    <img src="public/assets/images/g1.jpg" class="img-fluid" alt="image" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page blog-->
@endsection