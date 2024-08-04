@extends('client.layout.master')
@section('content')
    <div class="page-wrapper">
        <section id="widget-ticker">
        </section>
        <section id="section-featured" class="section">
            <div class="section-content">

                <div data-content="newsfeatured" class="article-list" id="list-first">
                   @foreach($tinNew as $tin)
                    <article zone-ad-name="" class="article-item znews-native type-text picked-featured">
                        <p class="article-thumbnail">
                            <a
                                href="{{URL('/tin',[$tin->id])}}">
                                <img src="{{$tin->img}}"
                                    alt="{{$tin->TieuDe}}">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="{{URL('/tin',[$tin->id])}}">{{$tin->TieuDe}}</a>
                            </p>
                            <p class="article-summary">{{$tin->TomTat}}</p>

                            <ul class="article-related">
                                <li class=" type-text"><a
                                        href="{{URL('/tin',[$tin->id])}}"
                                        title="Review sản phẩm từ bã mía của Hunufa Compostable">{{$tin->TieuDe}}</a></li>
                            </ul>
                        </header>
                    </article>
                @endforeach
                    
                </div>
                <div data-content="newstrending" class="article-list listing-layout" id="list-second">
                    @foreach($tinLuotxem as $tin)
                    <article class="article-item type-text picked-trending short">
                        <p class="article-thumbnail">
                            <a
                                href="{{URL('/tin',[$tin->id])}}">

                                <img src="{{$tin ->img}}"
                                    alt="{{$tin ->TieuDe}}">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="{{URL('/tin',[$tin->id])}}">{{$tin ->TieuDe}}</a>
                            </p>
                            <p class="article-summary">{{$tin ->TomTat}}</p>

                        </header>
                    </article>
                    @endforeach

                </div>

            </div>
        </section>

        <!-- CAMPAIGN COUNTDOWN -->

        <section id="section-multimedia" class="section">
            <header class="section-title">
                <h3>NHÂN VẬT</h3>
            </header>
            <div class="section-content">

                <div class="article-list multimedia-layout" id="list-human">
                    <article class="article-item znews-native type-picture picked-multi short">
                        <p class="article-thumbnail">
                            <a
                                href="jin-tu%e1%ba%a5n-nam-l%c3%a0-ai---ti%e1%bb%83u-s%e1%bb%ad-ch%c3%a0ng-ca-s%c4%a9-nh%e1%ba%a1c-s%c4%a9-tr%e1%ba%bb-ch%e1%bb%a7-nh%c3%a2n-b%c3%a0i-h%c3%a1t-nh%c3%a2n-sinh-qu%c3%a1n.html">

                                <img src="/client/images/192/jin-tuan-nam-la-ai-nhan-sinh-quan-tieu-su.png"
                                    alt="Jin Tuấn Nam là ai? - Tiểu sử chàng ca sĩ, nhạc sĩ trẻ chủ nhân bài hát Nhân Sinh Quán">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="jin-tu%e1%ba%a5n-nam-l%c3%a0-ai---ti%e1%bb%83u-s%e1%bb%ad-ch%c3%a0ng-ca-s%c4%a9-nh%e1%ba%a1c-s%c4%a9-tr%e1%ba%bb-ch%e1%bb%a7-nh%c3%a2n-b%c3%a0i-h%c3%a1t-nh%c3%a2n-sinh-qu%c3%a1n.html">Jin
                                    Tuấn Nam là ai? - Tiểu sử chàng ca sĩ, nhạc sĩ trẻ chủ nhân bài hát Nhân Sinh
                                    Quán</a>
                            </p>
                            <p class="article-summary">Jin Tuấn Nam tên thật là Lưu Văn Hiển sinh ngày 16/08/1993 tại
                                Đồng Nai, hiện tại đang sinh sống và làm việc tại TP Biên Hòa. Theo như một số thông tin
                                trên mạng thì anh chỉ học tới lớp 10, do điều kiện gia đình không cho phép</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-picture picked-multi short">
                        <p class="article-thumbnail">
                            <a
                                href="h%e1%ba%b1ng-du-m%e1%bb%a5c-l%c3%a0-ai-chi%e1%ba%bfn-th%e1%ba%a7n-livestream-v%c3%a0-nghi-v%e1%ba%a5n-b%e1%bb%8b-ch%e1%bb%93ng-b%e1%ba%a1o-h%c3%a0nh.html">

                                <img src="/client/images/179/hang-du-muc-la-ai-review.png"
                                    alt="Hằng Du mục là ai? Chiến thần livestream và nghi vấn bị chồng bạo hành">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="h%e1%ba%b1ng-du-m%e1%bb%a5c-l%c3%a0-ai-chi%e1%ba%bfn-th%e1%ba%a7n-livestream-v%c3%a0-nghi-v%e1%ba%a5n-b%e1%bb%8b-ch%e1%bb%93ng-b%e1%ba%a1o-h%c3%a0nh.html">Hằng
                                    Du mục là ai? Chiến thần livestream và nghi vấn bị chồng bạo hành</a>
                            </p>
                            <p class="article-summary">Hằng du mục tên thật là Nguyễn Thị Thái Hằng sinh năm 1995 ở
                                tỉnh Cà Mau. Cô nổi lên trên cộng đồng mạng nhờ những video chia sẻ cuộc sống du mục,
                                lang thang trên khắp mọi miền đất nước Trung Quốc </p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-picture picked-multi short">
                        <p class="article-thumbnail">
                            <a
                                href="tr%e1%bb%8bnh-s%e1%ba%a3ng-l%c3%a0-ai---sao-hoa-ng%e1%bb%af-ng%c3%a3-ng%e1%bb%b1a-v%c3%ac-b%c3%aa-b%e1%bb%91i-%c4%91%e1%bb%9di-t%c6%b0.html">

                                <img src="/client/images/174/review-trinh-sang-scandal-be-boi-doi-tu-review.png"
                                    alt="Trịnh Sảng là ai - sao Hoa ngữ ngã ngựa vì bê bối đời tư">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="tr%e1%bb%8bnh-s%e1%ba%a3ng-l%c3%a0-ai---sao-hoa-ng%e1%bb%af-ng%c3%a3-ng%e1%bb%b1a-v%c3%ac-b%c3%aa-b%e1%bb%91i-%c4%91%e1%bb%9di-t%c6%b0.html">Trịnh
                                    Sảng là ai - sao Hoa ngữ ngã ngựa vì bê bối đời tư</a>
                            </p>
                            <p class="article-summary">Với gương mặt xinh đẹp, khả ái cùng diễn xuất tốt, cô trở thành
                                con cưng của đạo diễn Trung Quốc, cũng đồng thời là một gương mặt được săn đón từ các
                                thương hiệu nổi tiếng. Thế nhưng loạt scandal ập đến </p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-picture picked-multi short">
                        <p class="article-thumbnail">
                            <a
                                href="chi%e1%ba%bfn-nguy%e1%bb%85n-l%c3%a0-ai---ch%e1%bb%a7-th%c6%b0%c6%a1ng-hi%e1%bb%87u-1900-hair-salon-v%c3%a0-l%c3%b9m-x%c3%b9m-%c4%83n-ch%e1%ba%b7n-t%c3%b3c-c%e1%bb%a7a-b%e1%bb%87nh-nh%c3%a2n-ung-th%c6%b0.html">

                                <img src="/client/images/170/review-chien-nguyen-la-ai-lum-xum-toc-benh-nhan-ung-thu.png"
                                    alt="Chiến Nguyễn là ai? - chủ thương hiệu 1900 Hair Salon và lùm xùm ăn chặn tóc của bệnh nhân ung thư">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="chi%e1%ba%bfn-nguy%e1%bb%85n-l%c3%a0-ai---ch%e1%bb%a7-th%c6%b0%c6%a1ng-hi%e1%bb%87u-1900-hair-salon-v%c3%a0-l%c3%b9m-x%c3%b9m-%c4%83n-ch%e1%ba%b7n-t%c3%b3c-c%e1%bb%a7a-b%e1%bb%87nh-nh%c3%a2n-ung-th%c6%b0.html">Chiến
                                    Nguyễn là ai? - chủ thương hiệu 1900 Hair Salon và lùm xùm ăn chặn tóc của bệnh nhân
                                    ung thư</a>
                            </p>
                            <p class="article-summary">Ngày 13/6 trên một số fanpage người dùng mạng xã hội đã chia sẻ
                                thông tin 1900 Hair Salon giấu nhẹm tới hơn 700 bộ tóc hiến và chỉ trao cho khoảng 50
                                tóc cho bệnh nhân ung thư. </p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-picture picked-multi short">
                        <p class="article-thumbnail">
                            <a
                                href="chu-bin-l%c3%a0-ai---n%c4%83m-2024-%c4%91%e1%ba%a7y-tai-%c6%b0%c6%a1ng-c%e1%bb%a7a-ca-s%c4%a9-chu-bin---review.html">

                                <img src="/client/images/164/review-ca-si-chu-bin-la-ai.png"
                                    alt="Chu Bin là ai - Năm 2024 đầy tai ương của ca sĩ Chu Bin - Review">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="chu-bin-l%c3%a0-ai---n%c4%83m-2024-%c4%91%e1%ba%a7y-tai-%c6%b0%c6%a1ng-c%e1%bb%a7a-ca-s%c4%a9-chu-bin---review.html">Chu
                                    Bin là ai - Năm 2024 đầy tai ương của ca sĩ Chu Bin - Review</a>
                            </p>
                            <p class="article-summary">Là một ca sĩ chuyên hát ở phòng trà, quán bar, Chu Bin có sự
                                nghiệp không quá nổi bật như những người bạn cùng trang lứa. Thời gian gần đây công
                                chúng sốc nặng khi ca sĩ này liên quan đến sử dụng trái phép </p>
                        </header>
                    </article>
                </div>

            </div>
        </section>
    </div>
    <div class="page-wrapper">
        <section id="section-latest" class="section has-sidebar">
            <header class="section-title">
                <h3>DÀNH CHO BẠN</h3>
            </header>
            <section class="section-content">
                <div class="article-list listing-layout responsive unique" min-display="6" id="list-recommend">
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="%c4%91%e1%bb%8ba-ch%e1%bb%89-in-ly-gi%e1%ba%a5y-theo-y%c3%aau-c%e1%ba%a7u-uy-t%c3%adn-gi%c3%a1-r%e1%ba%bb---review-hunufa.html">

                                <img src="/client/images/211/ly-giay-hunufa-review-dich-vu-in.jpg"
                                    alt="Địa chỉ in ly giấy theo yêu cầu uy tín giá rẻ - Review Hunufa">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="%c4%91%e1%bb%8ba-ch%e1%bb%89-in-ly-gi%e1%ba%a5y-theo-y%c3%aau-c%e1%ba%a7u-uy-t%c3%adn-gi%c3%a1-r%e1%ba%bb---review-hunufa.html">Địa
                                    chỉ in ly giấy theo yêu cầu uy tín giá rẻ - Review Hunufa</a>
                            </p>
                            <p class="article-summary">Mình luôn tìm kiếm những cách thức hiệu quả để làm nổi bật
                                thương hiệu của mình mà không tốn quá nhiều chi phí. Một trong những phương pháp mình
                                tìm thấy là in ly giấy có logo và thiết kế riêng</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="d%e1%bb%8bch-v%e1%bb%a5-g%e1%bb%adi-h%c3%a0ng-qu%e1%bb%91c-t%e1%ba%bf-uy-t%c3%adn---review-nh%e1%ba%adt-minh-anh-logistics.html">

                                <img src="/client/images/210/review-nhat-minh-anh-logictics-gui-hang-di-nuoc-ngoai.jpg"
                                    alt="Dịch vụ gửi hàng quốc tế uy tín - Review Nhật Minh Anh Logistics">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="d%e1%bb%8bch-v%e1%bb%a5-g%e1%bb%adi-h%c3%a0ng-qu%e1%bb%91c-t%e1%ba%bf-uy-t%c3%adn---review-nh%e1%ba%adt-minh-anh-logistics.html">Dịch
                                    vụ gửi hàng quốc tế uy tín - Review Nhật Minh Anh Logistics</a>
                            </p>
                            <p class="article-summary">Gần đây, mình đã có cơ hội trải nghiệm dịch vụ gửi hàng từ Cần
                                Thơ đi Hàn Quốc của Nhật Minh Anh Logistic. Là người thường xuyên gửi hàng quốc tế cho
                                người thân, mình đã thử qua nhiều dịch vụ khác nhau và gặp vô số </p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-t%c3%a2m-uy%c3%aan-beauty---tr%e1%ba%a3i-nghi%e1%bb%87m-u%e1%bb%91n-mi-v%c3%a0-g%e1%bb%99i-%c4%91%e1%ba%a7u-d%c6%b0%e1%bb%a1ng-sinh-t%e1%ba%a1i-hu%e1%ba%bf.html">

                                <img src="/client/images/207/review_ta%cc%82m_uye%cc%82n_beauty_goi-dau-duong-sinh-noi-mi.png"
                                    alt="Review Tâm Uyên Beauty - Trải Nghiệm Uốn Mi và Gội Đầu Dưỡng Sinh tại Huế">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-t%c3%a2m-uy%c3%aan-beauty---tr%e1%ba%a3i-nghi%e1%bb%87m-u%e1%bb%91n-mi-v%c3%a0-g%e1%bb%99i-%c4%91%e1%ba%a7u-d%c6%b0%e1%bb%a1ng-sinh-t%e1%ba%a1i-hu%e1%ba%bf.html">Review
                                    Tâm Uyên Beauty - Trải Nghiệm Uốn Mi và Gội Đầu Dưỡng Sinh tại Huế</a>
                            </p>
                            <p class="article-summary">Trong chuyến du lịch cùng bạn bè lần này, mình đã có cơ hội khám
                                phá một dịch vụ làm đẹp đặc biệt tại Tâm Uyên Beauty, nơi mà mình được giới thiệu bởi
                                một người bạn thân thiết.</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="m%e1%bb%8di-%c4%91i%e1%bb%81u-b%e1%ba%a1n-c%e1%ba%a7n-bi%e1%ba%bft-v%e1%bb%81-m%c3%a0ng-pe-%c4%91%c3%b3ng-g%c3%b3i-t%c3%acm-hi%e1%bb%83u-%c6%b0u-%c4%91i%e1%bb%83m-v%c3%a0-%e1%bb%a9ng-d%e1%bb%a5ng.html">

                                <img src="/client/images/205/moi-dieu-can-biet-ve-mang-pe.png"
                                    alt="Mọi Điều Bạn Cần Biết Về Màng PE Đóng Gói: Tìm Hiểu Ưu Điểm Và Ứng Dụng">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="m%e1%bb%8di-%c4%91i%e1%bb%81u-b%e1%ba%a1n-c%e1%ba%a7n-bi%e1%ba%bft-v%e1%bb%81-m%c3%a0ng-pe-%c4%91%c3%b3ng-g%c3%b3i-t%c3%acm-hi%e1%bb%83u-%c6%b0u-%c4%91i%e1%bb%83m-v%c3%a0-%e1%bb%a9ng-d%e1%bb%a5ng.html">Mọi
                                    Điều Bạn Cần Biết Về Màng PE Đóng Gói: Tìm Hiểu Ưu Điểm Và Ứng Dụng</a>
                            </p>
                            <p class="article-summary">Màng PE đóng gói (Polyethylene) là một loại vật liệu nhựa phổ
                                biến, được sử dụng rộng rãi trong nhiều ngành công nghiệp và đời sống hàng ngày. Với
                                tính chất dẻo dai, bền bỉ và khả năng bảo vệ sản phẩm vượt trội</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-m%c3%a0ng-pe-zontape---%c4%91%e1%bb%8ba-ch%e1%bb%89-s%e1%ba%a3n-xu%e1%ba%a5t-m%c3%a0ng-pe-gi%c3%a1-t%e1%bb%91t-ch%e1%ba%a5t-l%c6%b0%e1%bb%a3ng.html">

                                <img src="/client/images/204/review-mang-pe-zontape.jpg"
                                    alt="Review màng PE Zontape - Địa chỉ sản xuất màng PE giá tốt, chất lượng">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-m%c3%a0ng-pe-zontape---%c4%91%e1%bb%8ba-ch%e1%bb%89-s%e1%ba%a3n-xu%e1%ba%a5t-m%c3%a0ng-pe-gi%c3%a1-t%e1%bb%91t-ch%e1%ba%a5t-l%c6%b0%e1%bb%a3ng.html">Review
                                    màng PE Zontape - Địa chỉ sản xuất màng PE giá tốt, chất lượng</a>
                            </p>
                            <p class="article-summary">Màng PE (Polyethylene) là loại màng nhựa mỏng, dẻo dai, được sản
                                xuất từ hạt nhựa PE nguyên sinh cao cấp. Các hạt nhựa này sẽ được làm nóng chảy ở nhiệt
                                độ thích hợp. Sau đó chúng được cho vào trong máy đùn</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-website-4ever-perfumes---%c4%91%e1%bb%8ba-ch%e1%bb%89-mua-n%c6%b0%e1%bb%9bc-hoa-authentic-uy-t%c3%adn-gi%c3%a1-t%e1%bb%91t.html">

                                <img src="/client/images/202/review-nuoc-hoa-4rever-perumes-authentic-chinh-h.png"
                                    alt="Review website 4everperfume - Địa chỉ mua nước hoa Authentic uy tín giá tốt">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-website-4ever-perfumes---%c4%91%e1%bb%8ba-ch%e1%bb%89-mua-n%c6%b0%e1%bb%9bc-hoa-authentic-uy-t%c3%adn-gi%c3%a1-t%e1%bb%91t.html">Review
                                    website 4everperfume - Địa chỉ mua nước hoa Authentic uy tín giá tốt</a>
                            </p>
                            <p class="article-summary">Mùi hương thơm quyến rũ từ những loại nước hoa cao cấp khiến bạn
                                mê mệt, đắm say? Bạn là một tín đồ của nước hoa cao cấp đến từ những thương hiệu nổi
                                tiếng? Chắc hẳn bạn rất mong muốn tìm được địa chỉ </p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a href="co-bao-nhieu-cau-thu-thi-dau-chinh-thuc-trong-mot-doi-bong.html">

                                <img src="/client/images/200/Screen_Shot_2024-07-11_at_15.17.48.png"
                                    alt="Có bao nhiêu cầu thủ thi đấu chính thức trong một đội bóng?">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="co-bao-nhieu-cau-thu-thi-dau-chinh-thuc-trong-mot-doi-bong.html">Có bao nhiêu
                                    cầu thủ thi đấu chính thức trong một đội bóng?</a>
                            </p>
                            <p class="article-summary">Xem bóng đá đã nhiều nhưng anh em vẫn chưa biết có bao nhiêu cầu
                                thủ thi đấu chính thức trong một đội bóng, nên đang tìm câu trả lời thì xem ngay bài
                                viết này. Bởi chúng tôi sẽ trả lời cho anh em biết chi tiết và chuẩn xác nhất.</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-viet-viet-tourism---kh%c3%a1m-ph%c3%a1-tour-m%c3%b9a-thu-b%e1%bb%9d-t%c3%a2y-hoa-k%e1%bb%b3.html">

                                <img src="/client/images/197/tour-du-lich-bo-tay-hoa-ky-2024-vietmytravel.jpg"
                                    alt="Review Viet Viet Tourism - Khám Phá Tour Mùa Thu Bờ Tây Hoa Kỳ">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-viet-viet-tourism---kh%c3%a1m-ph%c3%a1-tour-m%c3%b9a-thu-b%e1%bb%9d-t%c3%a2y-hoa-k%e1%bb%b3.html">Review
                                    Viet Viet Tourism - Khám Phá Tour Mùa Thu Bờ Tây Hoa Kỳ</a>
                            </p>
                            <p class="article-summary">Tour Mùa Thu Bờ Tây Hoa Kỳ của Viet Viet Tourism là một hành
                                trình đặc biệt, mang đến cho du khách cơ hội trải nghiệm vẻ đẹp quyến rũ của bờ tây nước
                                Mỹ vào mùa thu. Với lịch trình phong phú kéo dài 7 ngày 6 đêm</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="du-h%e1%bb%8dc-%c4%91%c3%a0i-loan---tr%e1%ba%a3i-nghi%e1%bb%87m-c%c3%b9ng-trung-t%c3%a2m-t%c6%b0-v%e1%ba%a5n-du-h%e1%bb%8dc-uoe.html">

                                <img src="/client/images/196/du-hoc-dai-loan-uoe.png"
                                    alt="Du học Đài Loan - Trải nghiệm cùng trung tâm tư vấn du học UOE">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="du-h%e1%bb%8dc-%c4%91%c3%a0i-loan---tr%e1%ba%a3i-nghi%e1%bb%87m-c%c3%b9ng-trung-t%c3%a2m-t%c6%b0-v%e1%ba%a5n-du-h%e1%bb%8dc-uoe.html">Du
                                    học Đài Loan - Trải nghiệm cùng trung tâm tư vấn du học UOE</a>
                            </p>
                            <p class="article-summary">Đã hơn hai năm kể từ khi mình quyết định đi du học, và suốt thời
                                gian qua, mọi thứ đã dần ổn định hơn. Hôm nay, khi nghĩ về hành trình du học của mình,
                                hình ảnh những ngày đầu tiên khi mình quyết định rời xa quê hương Việt Nam để đến Đài
                                Loan</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-soundpeats---tai-nghe-h%c3%a0ng-trung-qu%e1%bb%91c-x%e1%bb%8bn-x%c3%b2-d%c3%b9-gi%c3%a1-ch%e1%bb%89-b%e1%ba%b1ng-15-airpods.html">

                                <img src="/client/images/195/review-soundpeats-tai-nghe-trung-quoc.png"
                                    alt="Review SoundPEATS - Tai nghe hàng Trung Quốc xịn xò dù giá chỉ bằng 1/5 AirPods">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-soundpeats---tai-nghe-h%c3%a0ng-trung-qu%e1%bb%91c-x%e1%bb%8bn-x%c3%b2-d%c3%b9-gi%c3%a1-ch%e1%bb%89-b%e1%ba%b1ng-15-airpods.html">Review
                                    SoundPEATS - Tai nghe hàng Trung Quốc xịn xò dù giá chỉ bằng 1/5 AirPods</a>
                            </p>
                            <p class="article-summary">Nói qua về SoundPEATS thì đây là một hãng tai nghe xuất thân từ
                                Trung Quốc. Với những thiết kế, được giới mộ điệu tai nghe đánh giá là cao cấp và đẹp
                                mắt. Chất âm cực kì ngon trong tầm giá chỉ dưới 2 triệu,</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="d%e1%bb%8bch-v%e1%bb%a5-l%e1%ba%afp-%c4%91%e1%ba%b7ts%e1%bb%ada-ch%e1%bb%afa-gi%c3%a0n-ph%c6%a1i-th%c3%b4ng-minh-l%c6%b0%e1%bb%9bi-ban-c%c3%b4ng-tp-hcm-b%c3%acnh-d%c6%b0%c6%a1ng.html">

                                <img src="/client/images/194/lap-dat-sua-chua-gian-phoi-thong-minh-luoi-ban-cong-tp-hcm-binh-.jpg"
                                    alt="Dịch Vụ Lắp Đặt,Sửa Chữa Giàn Phơi Thông Minh Lưới Ban Công TP HCM, Bình Dương">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="d%e1%bb%8bch-v%e1%bb%a5-l%e1%ba%afp-%c4%91%e1%ba%b7ts%e1%bb%ada-ch%e1%bb%afa-gi%c3%a0n-ph%c6%a1i-th%c3%b4ng-minh-l%c6%b0%e1%bb%9bi-ban-c%c3%b4ng-tp-hcm-b%c3%acnh-d%c6%b0%c6%a1ng.html">Dịch
                                    Vụ Lắp Đặt,Sửa Chữa Giàn Phơi Thông Minh Lưới Ban Công TP HCM, Bình Dương</a>
                            </p>
                            <p class="article-summary">Có một cơ sở chuyên cung cấp dịch vụ lắp đặt, sửa chữa giàn phơi
                                thông minh, lưới ban công Bình Dương, TP Hồ Chí Minh được đánh giá rất cao về chất
                                lượng. Đó chính là cơ sở Giàn phơi thông minh Hoà Phát</p>
                        </header>
                    </article>
                    <article class="article-item  type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-c%c3%b4ng-ty-orient-software-development-%c4%91%c3%a0-n%e1%ba%b5ng---m%c3%b4i-tr%c6%b0%e1%bb%9dng-l%c3%a0m-vi%e1%bb%87c-tuy%e1%bb%87t-v%e1%bb%9di.html">

                                <img src="/client/images/193/TopDev-Orient2-PhamMaiHa-1652255397.jpg"
                                    alt="Review công ty Orient Software Development Đà Nẵng - Môi trường làm việc tuyệt vời">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-c%c3%b4ng-ty-orient-software-development-%c4%91%c3%a0-n%e1%ba%b5ng---m%c3%b4i-tr%c6%b0%e1%bb%9dng-l%c3%a0m-vi%e1%bb%87c-tuy%e1%bb%87t-v%e1%bb%9di.html">Review
                                    công ty Orient Software Development Đà Nẵng - Môi trường làm việc tuyệt vời</a>
                            </p>
                            <p class="article-summary">Mình gắn bó với Orient tính đến tháng 7 này là tròn ba năm, từ
                                thời công ty còn bên đường Nguyễn Hữu Thọ sau chuyển qua tòa nhà VNPT Đà Nẵng và đến
                                thời điểm bây giờ là đã có trụ sở riêng, nằm khang trang trên đường Nguyễn Cơ Thạch</p>
                        </header>
                    </article>
                </div>

                <aside class="section-sidebar">
                </aside>
            </section>
        </section>
    </div>

    <!--LIFESTYLE + MAYBEMISS-->
    <div class="page-wrapper">
        <section id="section-lifestyle" class="section">
            <header class="section-title">
                <h3>
                    <a href="sach.html" target="_self">Sách</a>
                </h3>
            </header>
            <div class="section-content ">
                <div class="article-list lifestyle-layout" data-content="newsfeatured" id="list-book">
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-tu%e1%bb%95i-th%c6%a1-d%e1%bb%af-d%e1%bb%99i---ph%c3%b9ng-qu%c3%a1n---ti%e1%bb%83u-thuy%e1%ba%bft-v%e1%bb%81-nh%e1%bb%afng-n%c4%83m-th%c3%a1ng-l%e1%bb%8bch-s%e1%bb%ad.html">

                                <img src="/client/images/208/review-tuoi-tho-du-doi-phung-quan.png"
                                    alt="Review tuổi thơ dữ dội - Phùng Quán - Tiểu thuyết về những năm tháng lịch sử">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-tu%e1%bb%95i-th%c6%a1-d%e1%bb%af-d%e1%bb%99i---ph%c3%b9ng-qu%c3%a1n---ti%e1%bb%83u-thuy%e1%ba%bft-v%e1%bb%81-nh%e1%bb%afng-n%c4%83m-th%c3%a1ng-l%e1%bb%8bch-s%e1%bb%ad.html">Review
                                    tuổi thơ dữ dội - Phùng Quán - Tiểu thuyết về những năm tháng lịch sử</a>
                            </p>
                            <p class="article-summary">Có lẽ đây nên là cuốn sách mà tất cả mọi người, trước hết là trẻ
                                nhỏ, sau đó là các bạn thanh thiếu niên, đọc trước cả khi các bạn ấy ngồi trên ghế nhà
                                trường và học về Lịch sử. </p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="s%c3%b3ng-%e1%bb%9f-%c4%91%c3%a1y-s%c3%b4ng---so-s%c3%a1nh-n%e1%bb%99i-dung-truy%e1%bb%87n-v%c3%a0-phim-kh%c3%a1c-g%c3%ac-nhau---review.html">

                                <img src="/client/images/157/5008610_chrome_2020-05-03_21-13-06.png"
                                    alt="Sóng ở đáy sông - So sánh nội dung truyện và phim khác gì nhau - Review">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="s%c3%b3ng-%e1%bb%9f-%c4%91%c3%a1y-s%c3%b4ng---so-s%c3%a1nh-n%e1%bb%99i-dung-truy%e1%bb%87n-v%c3%a0-phim-kh%c3%a1c-g%c3%ac-nhau---review.html">Sóng
                                    ở đáy sông - So sánh nội dung truyện và phim khác gì nhau - Review</a>
                            </p>
                            <p class="article-summary">Sóng ở đáy sông là bộ phim được đạo diễn Lê Đức Tiến chuyển thể
                                từ tiểu thuyết cùng tên của nhà văn Lê Lựu. Truyện kể về cuộc đời của nhân vật chính Núi
                                - từ một cậu học sinh thông minh, lanh lợi, giỏi dang dần dần bị cuộc đời xô đẩy</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-s%c3%a1t-nh%c3%a2n-%c4%91%e1%bb%93-t%e1%bb%83---t%e1%bb%95ng-h%e1%bb%a3p-truy%e1%bb%87n-trinh-th%c3%a1m-c%e1%bb%a7a-c%c3%a1c-nh%c3%a0-v%c4%83n-tr%e1%ba%bb-vi%e1%bb%87t-nam.html">

                                <img src="/client/images/121/review-sat-nhan-do-te.png"
                                    alt="Review sát nhân đồ tể - tổng hợp truyện trinh thám của các nhà văn trẻ Việt Nam">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-s%c3%a1t-nh%c3%a2n-%c4%91%e1%bb%93-t%e1%bb%83---t%e1%bb%95ng-h%e1%bb%a3p-truy%e1%bb%87n-trinh-th%c3%a1m-c%e1%bb%a7a-c%c3%a1c-nh%c3%a0-v%c4%83n-tr%e1%ba%bb-vi%e1%bb%87t-nam.html">Review
                                    sát nhân đồ tể - tổng hợp truyện trinh thám của các nhà văn trẻ Việt Nam</a>
                            </p>
                            <p class="article-summary">Cầm trên tay cuốn Sát Nhân Đồ Tể, tuyển tập truyện ngắn trinh
                                thám của các nhà văn trẻ Việt Nam chắc là tuyển tập đầu tiên của Việt Nam. Tuyển tập gồm
                                10 truyện của các tác giả Dương Quỳnh, Kim Tam Long, Duy Nguyễn, Vũ Khúc cùng các tác
                                giả</p>
                        </header>
                    </article>
                </div>

                <div class="article-list" data-content="newstrending" id="top-list-book">
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-t%c3%acnh-th%e1%ba%bf-hi%e1%bb%83m-ngh%c3%a8o---ti%e1%bb%83u-thuy%e1%ba%bft-m%c3%a0u-s%e1%ba%afc-ch%c3%adnh-tr%e1%bb%8b-c%e1%bb%a7a-louise-penny-v%c3%a0-hillary-clinton.html">

                                <img src="/client/images/81/tinh-the-hiem-ngheo-clinton.jpg"
                                    alt="Review tình thế hiểm nghèo - tiểu thuyết màu sắc chính trị của Louise Penny và Hillary Clinton">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-t%c3%acnh-th%e1%ba%bf-hi%e1%bb%83m-ngh%c3%a8o---ti%e1%bb%83u-thuy%e1%ba%bft-m%c3%a0u-s%e1%ba%afc-ch%c3%adnh-tr%e1%bb%8b-c%e1%bb%a7a-louise-penny-v%c3%a0-hillary-clinton.html">Review
                                    tình thế hiểm nghèo - tiểu thuyết màu sắc chính trị của Louise Penny và Hillary
                                    Clinton</a>
                            </p>
                            <p class="article-summary">Tình Thế Hiểm Nghèo đánh dấu lần đầu tiên cựu Ngoại trưởng
                                Hillary Clinton viết tiểu thuyết. Cuốn tiểu thuyết đầu tay hợp tác cùng cây bút trinh
                                thám Louise Penny. Một tác phẩm thriller chính trị, một thể loại khá mới mẻ </p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-s%c3%a1ch---m%c3%b9i-h%c6%b0%c6%a1ng---ti%e1%bb%83u-thuy%e1%ba%bft-c%e1%bb%a7a-patrick-suskind.html">

                                <img src="/client/images/71/mui-huong-chuyen-mot-ke-giet-nguoi-review.jpg"
                                    alt="Review sách - Mùi hương - Tiểu thuyết của Patrick Suskind">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-s%c3%a1ch---m%c3%b9i-h%c6%b0%c6%a1ng---ti%e1%bb%83u-thuy%e1%ba%bft-c%e1%bb%a7a-patrick-suskind.html">Review
                                    sách - Mùi hương - Tiểu thuyết của Patrick Suskind</a>
                            </p>
                            <p class="article-summary">Jean-Baptiste Grenouille, một kẻ sinh ra trong bẩn thỉu, dơ dáy,
                                nhơ nhớp hệt như Paris. Review sách Mùi hương tiểu thuyết của Patrick Suskind.</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-tuy%e1%bb%83n-t%e1%ba%adp-trinh-th%c3%a1m-con-m%c3%a8o-%c4%91en-c%e1%bb%a7a-edgar-allan-poe.html">

                                <img src="/client/images/63/The-black-cat-Con-meo-den.jpg"
                                    alt="Review tuyển tập trinh thám Con mèo đen của Edgar Allan Poe">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-tuy%e1%bb%83n-t%e1%ba%adp-trinh-th%c3%a1m-con-m%c3%a8o-%c4%91en-c%e1%bb%a7a-edgar-allan-poe.html">Review
                                    tuyển tập trinh thám Con mèo đen của Edgar Allan Poe</a>
                            </p>
                            <p class="article-summary">Đợt vừa rồi mình đi hội sách Đà Nẵng và săn được cuốn Con mèo
                                đen của Edgar Allan Poe. Tuy nhiên phải rất cố gắng thì cuối cùng mới đọc xong tuyển tập
                                này. Sách khó đọc một phần vì câu cú lủng củng quá, một phần lớn nữa</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-h%e1%bb%99i-s%c3%a1ch-%c4%91%c3%a0-n%e1%ba%b5ng-buffet-59k---mua-s%c3%a1ch-%c4%91%c6%b0%e1%bb%a3c-t%e1%ba%b7ng-v%c3%a0ng.html">

                                <img src="/client/images/60/hoi-sahc-buffet-da-nang-59k.jpg"
                                    alt="Review Hội sách Đà Nẵng buffet 59k - Mua sách được tặng vàng">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-h%e1%bb%99i-s%c3%a1ch-%c4%91%c3%a0-n%e1%ba%b5ng-buffet-59k---mua-s%c3%a1ch-%c4%91%c6%b0%e1%bb%a3c-t%e1%ba%b7ng-v%c3%a0ng.html">Review
                                    Hội sách Đà Nẵng buffet 59k - Mua sách được tặng vàng</a>
                            </p>
                            <p class="article-summary">Vậy là hội sách buffet 59k ở Đà Nẵng đã chính thức diễn ra ngày
                                đầu tiên. Qua bao nhiêu ngày háo hức chờ đợi thì cuối cùng mình cũng được tham gia trải
                                nghiệm ngày hội sách đông vui nhất từ trước đến giờ, tổ chức tại</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-m%e1%bb%99t-ng%c3%a0y-r%e1%bb%93i-th%c3%b4i---nh%e1%bb%afng-c%c3%a2u-chuy%e1%bb%87n-t%c3%acnh-bu%e1%bb%93n---nguy%e1%bb%85n-th%e1%bb%8b-ho%c3%a0ng.html">

                                <img src="/client/images/58/mot-ngay-roi-thoi.jpg"
                                    alt="Review Một ngày rồi thôi - Những câu chuyện tình buồn - Nguyễn Thị Hoàng">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-m%e1%bb%99t-ng%c3%a0y-r%e1%bb%93i-th%c3%b4i---nh%e1%bb%afng-c%c3%a2u-chuy%e1%bb%87n-t%c3%acnh-bu%e1%bb%93n---nguy%e1%bb%85n-th%e1%bb%8b-ho%c3%a0ng.html">Review
                                    Một ngày rồi thôi - Những câu chuyện tình buồn - Nguyễn Thị Hoàng</a>
                            </p>
                            <p class="article-summary">Từ khi mẹ bỏ nhà đi không rõ lý do, cuộc sống của gia đình ông
                                Vĩnh Hoài cùng bốn người con chìm trong những ngày dài u uất, buồn bã. Nỗi thương nhớ
                                giày vò ông Vĩnh Hoài từng ngày, lan sang cả hai cô con gái thứ 2 và thứ 3 trong nhà</p>
                        </header>
                    </article>
                </div>

            </div>
        </section>
    </div>
    <div class="page-wrapper">
        <section id="section-lifestyle" class="section">
            <header class="section-title">
                <h3>
                    <a href="phim.html" target="_blank">Phim</a>
                </h3>
            </header>
            <div class="section-content ">
                <div class="article-list lifestyle-layout" data-content="newsfeatured" id="list-film">
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-c%c3%a1c-nh%c3%a2n-v%e1%ba%adt-v%c3%a0-d%c3%a0n-di%e1%bb%85n-vi%c3%aan-trong-c%e1%bb%adu-long-th%c3%a0nh-tr%e1%ba%a1i---ai-%e1%ba%a5n-t%c6%b0%e1%bb%a3ng-nh%e1%ba%a5t.html">

                                <img src="/client/images/189/co-thien-lac-phim-cuu-long-thanh-trai.jpg"
                                    alt="Review các nhân vật và dàn diễn viên trong Cửu Long Thành Trại - Ai ấn tượng nhất?">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-c%c3%a1c-nh%c3%a2n-v%e1%ba%adt-v%c3%a0-d%c3%a0n-di%e1%bb%85n-vi%c3%aan-trong-c%e1%bb%adu-long-th%c3%a0nh-tr%e1%ba%a1i---ai-%e1%ba%a5n-t%c6%b0%e1%bb%a3ng-nh%e1%ba%a5t.html">Review
                                    các nhân vật và dàn diễn viên trong Cửu Long Thành Trại - Ai ấn tượng nhất?</a>
                            </p>
                            <p class="article-summary">Cửu Long Thành Trại là bộ phim đang được bàn tán rầm rộ trên
                                mạng xã hội thời gian gần đây với kỳ vọng sẽ vực dậy dòng phim xã hội đen Hongkong đã
                                từng làm mưa làm gió một thời. Không chỉ có những cảnh đánh đấm cực kỳ đẹp mắt</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-ch%e1%bb%9d-ng%c6%b0%e1%bb%9di-n%c6%a1i-ph%c3%a1o-hoa-r%e1%bb%b1c-r%e1%bb%a1---b%e1%bb%99-phim-v%e1%bb%81-t%c3%acnh-y%c3%aau-%c4%91%e1%bb%93ng-gi%e1%bb%9bi-x%e1%bb%a9-%c4%91%c3%a0i-loan.html">

                                <img src="/client/images/183/review-cho-nguoi-noi-phao-hoa-ruc-ro.jpg"
                                    alt="Review Chờ người nơi pháo hoa rực rỡ - Bộ phim về tình yêu đồng giới xứ Đài Loan">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-ch%e1%bb%9d-ng%c6%b0%e1%bb%9di-n%c6%a1i-ph%c3%a1o-hoa-r%e1%bb%b1c-r%e1%bb%a1---b%e1%bb%99-phim-v%e1%bb%81-t%c3%acnh-y%c3%aau-%c4%91%e1%bb%93ng-gi%e1%bb%9bi-x%e1%bb%a9-%c4%91%c3%a0i-loan.html">Review
                                    Chờ người nơi pháo hoa rực rỡ - Bộ phim về tình yêu đồng giới xứ Đài Loan</a>
                            </p>
                            <p class="article-summary">Khai thác từ đề tài tình yêu trong phim, Chờ người nơi pháo hoa
                                rực rỡ không chỉ là một tình yêu đồng giới đơn thuần. Nó còn là bản tình ca đẹp về khát
                                vọng tình yêu vượt qua mọi định kiến, soi mói của đời người</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="-review-phim-mission-impossible-8-nhi%e1%bb%87m-v%e1%bb%a5-b%e1%ba%a5t-kh%e1%ba%a3-thi---bom-t%e1%ba%a5n-h%c3%a0nh-%c4%91%e1%bb%99ng-hollywood.html">

                                <img src="/client/images/176/nhiem-vu-bat-kha-thi-8-nghiep-bao-phan-2-poster.jpg"
                                    alt=" Review phim Mission: Impossible 8 (Nhiệm vụ bất khả thi) - Bom tấn hành động Hollywood">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="-review-phim-mission-impossible-8-nhi%e1%bb%87m-v%e1%bb%a5-b%e1%ba%a5t-kh%e1%ba%a3-thi---bom-t%e1%ba%a5n-h%c3%a0nh-%c4%91%e1%bb%99ng-hollywood.html">
                                    Review phim Mission: Impossible 8 (Nhiệm vụ bất khả thi) - Bom tấn hành động
                                    Hollywood</a>
                            </p>
                            <p class="article-summary">Nhiệm vụ bất khả thi 8 là phần cuối cùng của thương hiệu phim
                                này, với sự góp mặt của tài tử Hollywood Tom Cruise, Hayley Atwell, Vanessa Kirby, bộ
                                phim dự báo sẽ tạo ra cơn địa chấn khi càn quét các phòng vé vào thời gian sắp tớ</p>
                        </header>
                    </article>
                </div>

                <div class="article-list" data-content="newstrending" id="top-list-film">
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-n%e1%bb%8dc-%c4%91%e1%bb%99c---phim-kinh-d%e1%bb%8b-%c4%91%e1%bb%81-t%c3%a0i-sinh-v%e1%ba%adt-k%e1%bb%b3-b%c3%ad.html">

                                <img src="/client/images/175/review-phim-noc-doc-noi-dung.jpg"
                                    alt="Review Nọc độc - Phim kinh dị đề tài sinh vật kỳ bí">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-n%e1%bb%8dc-%c4%91%e1%bb%99c---phim-kinh-d%e1%bb%8b-%c4%91%e1%bb%81-t%c3%a0i-sinh-v%e1%ba%adt-k%e1%bb%b3-b%c3%ad.html">Review
                                    Nọc độc - Phim kinh dị đề tài sinh vật kỳ bí</a>
                            </p>
                            <p class="article-summary">Với nội dung không quá mới mẻ song Nọc độc vẫn thu hút người xem
                                bởi rất nhiều các tình huống kịch tính, diễn xuất ổn định của dàn diễn viên thực lực. Có
                                thể nói đây là một tác phẩm điện ảnh đáng xem trong hè này.</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-n%e1%ba%bfu-g%e1%ba%b7p-em-l%e1%ba%a1i-tr%c3%aan-ng%e1%bb%8dn-%c4%91%e1%bb%93i-hoa-n%e1%bb%9f---b%e1%bb%99-phim-t%c3%acnh-c%e1%ba%a3m-%c4%91%e1%ba%abm-n%c6%b0%e1%bb%9bc-m%e1%ba%aft.html">

                                <img src="/client/images/172/review-neu-gap-lai-em-tren-ngon-doi-hoa-no.png"
                                    alt="Review Nếu gặp em lại trên ngọn đồi hoa nở - bộ phim tình cảm đẫm nước mắt">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-n%e1%ba%bfu-g%e1%ba%b7p-em-l%e1%ba%a1i-tr%c3%aan-ng%e1%bb%8dn-%c4%91%e1%bb%93i-hoa-n%e1%bb%9f---b%e1%bb%99-phim-t%c3%acnh-c%e1%ba%a3m-%c4%91%e1%ba%abm-n%c6%b0%e1%bb%9bc-m%e1%ba%aft.html">Review
                                    Nếu gặp em lại trên ngọn đồi hoa nở - bộ phim tình cảm đẫm nước mắt</a>
                            </p>
                            <p class="article-summary">Nếu gặp lại em trên ngọn đồi hoa nở là bộ phim lãng mạn về đề
                                tài tình yêu nổi tiếng ở Nhật Bản. Phim đã khởi chiếu ở Nhật Bản từ tháng 12/2023 và
                                doanh thu cho đến thời điểm hiện tại vẫn chưa hạ nhiệt</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-nh%e1%bb%afng-g%c3%a3-trai-h%c6%b0-4-bad-boys-4-ch%c6%a1i-hay-b%e1%bb%8b-x%c6%a1i---phim-h%c3%a0nh-%c4%91%e1%bb%99ng-h%c3%a0i-h%c6%b0%e1%bb%9bc-vui-nh%e1%bb%99n.html">

                                <img src="/client/images/155/review-nhung-ga-tra-hu-4.jpg"
                                    alt="Review Những gã trai hư 4 (Bad boys 4): Chơi hay bị xơi - phim hành động hài hước vui nhộn">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-nh%e1%bb%afng-g%c3%a3-trai-h%c6%b0-4-bad-boys-4-ch%c6%a1i-hay-b%e1%bb%8b-x%c6%a1i---phim-h%c3%a0nh-%c4%91%e1%bb%99ng-h%c3%a0i-h%c6%b0%e1%bb%9bc-vui-nh%e1%bb%99n.html">Review
                                    Những gã trai hư 4 (Bad boys 4): Chơi hay bị xơi - phim hành động hài hước vui
                                    nhộn</a>
                            </p>
                            <p class="article-summary"> Tiếp nối với thành công của 3 phần phim trước đó, với nội dung
                                kịch tính, hấp dẫn và vui nhộn, Những gã trai hư 4 hứa hẹn sẽ mang đến những giây phút
                                thư giãn thật thoải mái và thú vị cho khán giả.</p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-m%c3%b3ng-vu%e1%bb%91t---phim-vi%e1%bb%87t-%c4%91%e1%bb%81-t%c3%a0i-qu%c3%a1i-th%c3%ba-%e1%ba%a5n-t%c6%b0%e1%bb%a3ng.html">

                                <img src="/client/images/151/640x396-mv.jpg"
                                    alt="Review Móng vuốt - phim Việt đề tài quái thú ấn tượng">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-m%c3%b3ng-vu%e1%bb%91t---phim-vi%e1%bb%87t-%c4%91%e1%bb%81-t%c3%a0i-qu%c3%a1i-th%c3%ba-%e1%ba%a5n-t%c6%b0%e1%bb%a3ng.html">Review
                                    Móng vuốt - phim Việt đề tài quái thú ấn tượng</a>
                            </p>
                            <p class="article-summary">Phim xoay quanh nhóm bạn gồm có 7 người tham gia buổi dã ngoại ở
                                trong rừng sâu. Mục đích ban đầu của chuyến đi là để cứu vãn tình bạn tổ chức đúng vào
                                tháng sinh nhật chung của cả nhóm. Cuộc vui hoá ác mộng khi cả nhóm chạm trán </p>
                        </header>
                    </article>
                    <article class="article-item znews-native type-text">
                        <p class="article-thumbnail">
                            <a
                                href="review-phim-m%c3%b9a-h%c3%a8-%c4%91%e1%ba%b9p-nh%e1%ba%a5t---phim-t%c3%acnh-c%e1%ba%a3m-h%e1%bb%8dc-%c4%91%c6%b0%e1%bb%9dng-%c4%91%c3%a1ng-xem.html">

                                <img src="/client/images/149/phim-Mua-He-Dep-Nhat-1024x731.jpg"
                                    alt="Review phim Mùa hè đẹp nhất - phim tình cảm học đường đáng xem">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="review-phim-m%c3%b9a-h%c3%a8-%c4%91%e1%ba%b9p-nh%e1%ba%a5t---phim-t%c3%acnh-c%e1%ba%a3m-h%e1%bb%8dc-%c4%91%c6%b0%e1%bb%9dng-%c4%91%c3%a1ng-xem.html">Review
                                    phim Mùa hè đẹp nhất - phim tình cảm học đường đáng xem</a>
                            </p>
                            <p class="article-summary">Đường đua phim Việt tháng 6 này tiếp tục có sự góp mặt của một
                                số bộ phim tâm lý, hài tình cảm trong đó đáng lưu ý là bộ phim mang tên Mùa hè đẹp nhất.
                                Phim có sự tham gia của dàn diễn viên trẻ, đẹp cùng người dẫn dắt tài ba</p>
                        </header>
                    </article>
                </div>
            </div>
        </section>
    </div>
@endsection
