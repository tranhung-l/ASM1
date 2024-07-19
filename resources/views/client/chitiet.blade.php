@extends('client.layout.master')
@section('content')
    <div class="page-wrapper">

        <article article-id="1463248" article-url="" class="the-article layout-regular type-text  "
            topic-id="system-2001,company-3725,company-4009,seo-7111">
            <header class="the-article-header">

                <p class="the-article-category" id="zreview-parent-category"><a href="am-thuc.html" title="Ẩm thực"
                        class="parent_cate" id="zreview-parent-cate">{{ $tin->TenLT }}</a></p>

                <h1 class="the-article-title" id="title-review">{{ $tin->TieuDe }}</h1>
                <ul class="the-article-meta">
                    <li class="the-article-publish" id="time-review">{{ $tin->NgayDang }}</li>
                </ul>
            </header>
            <section class="main">
                <div class="the-article-body" id="content-review">
                    <div class="trix-content">
                        <div>{{ $tin->NoiDung }}.<br><br>
                        </div>
                        <div>{{ $tin->NoiDung }}.<br><br>
                        </div>
                        <div>{{ $tin->NoiDung }}...<br><br>
                        </div>
                        <div>{{ $tin->NoiDung }}.<br><br>
                        </div>
                        <div>{{ $tin->NoiDung }}.<br><br><strong>{{ $tin->TenLT }}</strong><br><br><action-text-attachment
                                {{-- sgid="eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaEpJamhuYVdRNkx5OTFibWwzWldKemFYUmxMMEZqZEdsMlpWTjBiM0poWjJVNk9rSnNiMkl2TVRRNVAyVjRjR2x5WlhOZmFXNEdPZ1pGVkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYXR0YWNoYWJsZSJ9fQ==--a90e9113135ca5e9d2947edbe67aa869e3499a72"
                                content-type="{{ $tin->img }}" filename="image.png" filesize="596690" width="559"
                                height="574" previewable="true" presentation="gallery">
                                <figure class="attachment attachment--preview attachment--png">
                                    <img class="post-actiontext-image"
                                        src="{{ $tin->img}}"
                                        alt=" {{ $tin->TieuDe }}">

                                    <figcaption class="attachment__caption">
                                    </figcaption>
                                </figure>
                            </action-text-attachment><br><br>{{ $tin->NoiDung }}.
                            <br><br><strong></strong><br><br><action-text-attachment
                                sgid="eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaEpJamhuYVdRNkx5OTFibWwzWldKemFYUmxMMEZqZEdsMlpWTjBiM0poWjJVNk9rSnNiMkl2TVRVd1AyVjRjR2x5WlhOZmFXNEdPZ1pGVkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYXR0YWNoYWJsZSJ9fQ==--13437cb5e35615d6351e98f837775e12b08d9b8f"
                                content-type="image/png"
                                url="https://uniweb-offical.s3.ap-southeast-1.amazonaws.com/jrale5x39syugbu4ed86cw0oq8oe"
                                filename="image.png" filesize="617747" width="561" height="697" previewable="true"
                                presentation="gallery">
                                <figure class="attachment attachment--preview attachment--png">
                                    <img class="post-actiontext-image"
                                        src="https://uniweb-offical.s3-ap-southeast-1.amazonaws.com/jrale5x39syugbu4ed86cw0oq8oe"
                                        alt=" Ẩm thực đường phố Sài Gòn - Bò kho, bột chiên, nem nướng">

                                    <figcaption class="attachment__caption">
                                    </figcaption>
                                </figure>
                            </action-text-attachment><br><br>Trong các món ngon của Sài Gòn thì Bột chiên có lẽ là món
                            ăn "đã mắt" nhất. Vì đây không phải là món chuẩn bị sẵn để khi khách gọi là dọn ra được
                            ngay, mà người đầu bếp phải làm liên tục mỗi khi khách yêu cầu. Xem chiên bộ như một màn
                            trình diễn thú vị, hai tay phải liên tục đảo những miếng bột trắng cắt vuông trên mặt chảo
                            gang phẳng tròn, đập tan cái trứng gà như một chất kết dính khéo léo các miếng bột thành một
                            khối, rồi thêm chút tỏi, cải xá bấu, hành lá xắt nhỏ... Một bữa tiệc trình diễn đủ làm hài
                            lòng bất cứ vị khách khó tính nào. <br><br><strong>Nem
                                nướng</strong><br><br><action-text-attachment
                                sgid="eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaEpJamhuYVdRNkx5OTFibWwzWldKemFYUmxMMEZqZEdsMlpWTjBiM0poWjJVNk9rSnNiMkl2TVRVeFAyVjRjR2x5WlhOZmFXNEdPZ1pGVkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYXR0YWNoYWJsZSJ9fQ==--a535d0f7e8317aa9e7c6e4fabedfd1498df91ca5"
                                content-type="image/png"
                                url="https://uniweb-offical.s3.ap-southeast-1.amazonaws.com/q8w9ypl6t4bo29tes47rsbd24jxb"
                                filename="image.png" filesize="334146" width="544" height="332" previewable="true"
                                presentation="gallery">
                                <figure class="attachment attachment--preview attachment--png">
                                    <img class="post-actiontext-image"
                                        src="https://uniweb-offical.s3-ap-southeast-1.amazonaws.com/q8w9ypl6t4bo29tes47rsbd24jxb"
                                        alt=" Ẩm thực đường phố Sài Gòn - Bò kho, bột chiên, nem nướng">

                                    <figcaption class="attachment__caption">
                                    </figcaption>
                                </figure>
                            </action-text-attachment><br><br>Xiên nem vàng ruộm, thơm phức vô cùng quen thuộc, dân dã và
                            giản dị được tạo nên từ những nguyên liệu đơn giản: Thịt lui, bánh tráng, rau sống và tương
                            chấm đi kèm đặc trưng tạo nên sức hút kỳ lạ, khiến bất kỳ ai một lần thưởng thức đều phải
                            nhớ mãi không quên. Đi trên đường phố Sài Gòn nhất là vào những chiều tối mát mẻ, bất kỳ ai
                            cũng sẽ bị hấp dẫn bởi mùi hương của nem nướng pha với mùi nước mắm thơm nồng, thật khó để
                            cưỡng lại được.<br><br><action-text-attachment
                                sgid="eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaEpJamhuYVdRNkx5OTFibWwzWldKemFYUmxMMEZqZEdsMlpWTjBiM0poWjJVNk9rSnNiMkl2TVRVeVAyVjRjR2x5WlhOZmFXNEdPZ1pGVkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYXR0YWNoYWJsZSJ9fQ==--b35d21565095bffe577e3e4e8ff31f02e23b04e2"
                                content-type="image/png"
                                url="https://uniweb-offical.s3.ap-southeast-1.amazonaws.com/6shuduw1ldr8x5jq581gt1nmr1zh"
                                filename="image.png" filesize="301589" width="547" height="337" previewable="true"
                                presentation="gallery">
                                <figure class="attachment attachment--preview attachment--png">
                                    <img class="post-actiontext-image"
                                        src="https://uniweb-offical.s3-ap-southeast-1.amazonaws.com/6shuduw1ldr8x5jq581gt1nmr1zh"
                                        alt=" Ẩm thực đường phố Sài Gòn - Bò kho, bột chiên, nem nướng">

                                    <figcaption class="attachment__caption">
                                    </figcaption>
                                </figure>
                            </action-text-attachment> </div>
                    </div>
                </div>
            </section>

        </article>

    </div>


    <div id="article-nextreads" class="" start-index="55">
        <div id="trending" class="page-wrapper">
            <section id="news-latest" class="section has-sidebar" data-count="59">
                <header class="section-title">
                    <h3>TIN LIÊN QUAN</h3>
                </header>

                <section class="section-content">
                    <div class="article-list listing-layout responsive infinite-load" id="news-reference">
                        <article zone-ad-name="" class="article-item znews-native type-text picked-featured">
                            <p class="article-thumbnail">
                                <a
                                    href="review-nh%c3%a0-h%c3%a0ng-%c4%91%e1%ba%a1t-m%e1%bb%99t-sao-michelin-%e1%bb%9f-s%c3%a0i-g%c3%b2n-c%c3%b3-g%c3%ac-h%e1%ba%a5p-d%e1%ba%abn-.html">
                                    <img src="/client/images/19/%e1%ba%a2nh_ch%e1%bb%a5p_M%c3%a0n_h%c3%acnh_2024-03-20_l%c3%bac_09.54.53.png"
                                        alt="Review nhà hàng đạt một sao Michelin ở Sài Gòn có gì hấp dẫn ?">
                                </a>
                            </p>
                            <header>
                                <p class="article-title">
                                    <a
                                        href="review-nh%c3%a0-h%c3%a0ng-%c4%91%e1%ba%a1t-m%e1%bb%99t-sao-michelin-%e1%bb%9f-s%c3%a0i-g%c3%b2n-c%c3%b3-g%c3%ac-h%e1%ba%a5p-d%e1%ba%abn-.html">Review
                                        nhà hàng đạt một sao Michelin ở Sài Gòn có gì hấp dẫn ?</a>
                                </p>
                                <p class="article-summary">Trong 4 nhà hàng đầu tiên được nhận một sao Michelin ở Việt
                                    Nam, Ănăn Saigon là nhà hàng Michelin ở Sài Gòn duy nhất.</p>

                                <ul class="article-related">
                                    <li class=" type-text"><a
                                            href="review-nh%c3%a0-h%c3%a0ng-%c4%91%e1%ba%a1t-m%e1%bb%99t-sao-michelin-%e1%bb%9f-s%c3%a0i-g%c3%b2n-c%c3%b3-g%c3%ac-h%e1%ba%a5p-d%e1%ba%abn-.html"
                                            title="Review nhà hàng đạt một sao Michelin ở Sài Gòn có gì hấp dẫn ?">Review
                                            nhà hàng đạt một sao Michelin ở Sài Gòn có gì hấp dẫn ?</a></li>
                                </ul>
                            </header>
                        </article>
                        <article zone-ad-name="" class="article-item znews-native type-text picked-featured">
                            <p class="article-thumbnail">
                                <a
                                    href="review-qu%c3%a1n-b%c3%ban-%c4%91%e1%ba%adu-36---ng%c3%b4-v%c4%83n-s%e1%bb%9f-%c4%91%c3%a0-n%e1%ba%b5ng---r%e1%ba%a5t-%c4%91%c3%a1ng-%c4%91%e1%bb%83-th%e1%bb%ad.html">
                                    <img src="/client/images/15/bundau.jpg"
                                        alt="Review quán bún đậu 36 - Ngô Văn Sở Đà Nẵng - rất đáng để thử">
                                </a>
                            </p>
                            <header>
                                <p class="article-title">
                                    <a
                                        href="review-qu%c3%a1n-b%c3%ban-%c4%91%e1%ba%adu-36---ng%c3%b4-v%c4%83n-s%e1%bb%9f-%c4%91%c3%a0-n%e1%ba%b5ng---r%e1%ba%a5t-%c4%91%c3%a1ng-%c4%91%e1%bb%83-th%e1%bb%ad.html">Review
                                        quán bún đậu 36 - Ngô Văn Sở Đà Nẵng - rất đáng để thử</a>
                                </p>
                                <p class="article-summary">Một ngày đẹp trời tôi vô tình ghé quán bún đậu tại địa chỉ
                                    36 Ngô Văn Sở Đà Nẵng cùng hội chị em cây khế. . Cả nhóm chúng tôi ngay lập tức đã
                                    bị hớp hồn khi lần đầu tiên đặt chân vào quán.</p>

                                <ul class="article-related">
                                    <li class=" type-text"><a
                                            href="review-qu%c3%a1n-b%c3%ban-%c4%91%e1%ba%adu-36---ng%c3%b4-v%c4%83n-s%e1%bb%9f-%c4%91%c3%a0-n%e1%ba%b5ng---r%e1%ba%a5t-%c4%91%c3%a1ng-%c4%91%e1%bb%83-th%e1%bb%ad.html"
                                            title="Review quán bún đậu 36 - Ngô Văn Sở Đà Nẵng - rất đáng để thử">Review
                                            quán bún đậu 36 - Ngô Văn Sở Đà Nẵng - rất đáng để thử</a></li>
                                </ul>
                            </header>
                        </article>
                    </div>
                    <aside class="section-sidebar">
                    </aside>
                </section>
            </section>
        </div> --}}
    {{-- </div> --}}
@endsection
