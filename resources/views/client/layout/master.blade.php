
@include('client.layout.partails.head')

    <link rel="shortcut icon" href="images/favicon/favicon_48x48.ico">

    @include('client.layout.partails.css')
</head>

<body id="page-homepage" class=" refresh">

    <header id="zing-header" class="scrollfixed">
        @include('client.layout.partails.header-top')
    </header>
    @yield('content')



    <footer id="footer">
        @include('client.layout.partails.foot')


    </footer>

    <div class="your-review">
        <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSeympxBaDLeyg0JOSb68PWSUZqFrPpUNRk-FB07q5iPt7QemA/viewform?usp=sharing">
            <button class="button-review">
                Gửi review của bạn
            </button>
        </a>
    </div>
</body>
@include('client.layout.partails.footer')
<!-- Mirrored from zreview.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 07:57:51 GMT -->

</html>
