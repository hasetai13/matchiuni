<!doctype html>
<html lang="ja">
<head>

    <!-- ▼Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ▲Required meta tags -->

    <!-- ▼SEO -->
    @yield('meta')
    <!-- ▲SEO -->

    <!-- ▼OGP共通設定 -->
    <!-- ※基本共通設定 -->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:site_name" content="MatchiUni" />
    <!-- ※Twitter共通設定 -->
    <meta content='summary_large_image' name='twitter:card'/>
    @yield('ogp')

    <!-- ▼Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- ▲Bootstrap core CSS -->

    <!-- ▼Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- ▲Material Design Bootstrap -->

    <!-- ▼styles CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- ▲styles CSS -->

    <!-- ▼Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- ▲Font Awesome -->

    <!-- ▼Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- ▲Google Fonts -->

    <!-- ▼jpn.CSS -->
    <link rel="stylesheet" href="/css/jpn.min.css">
    <!-- ▲jpn.CSS -->

    <!-- ▼JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ▲JQuery -->

    <!-- ▼css of swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/css/swiper.min.css">
    <!-- ▲css of swiper -->
</head>
<body>

    <!-- ▼header -->
    @include('commons.header')
    <!-- ▲header -->

    <!-- ▼main content -->
    @yield('content')
    <!-- ▲main content -->

    <!-- ▼footer -->
    @include('commons.footer')
    <!-- ▲footer -->

    <!-- ▼style -->
    @yield('style')
    <!-- ▲style -->

    <!-- ▼javasctipt  -->
    @yield('script')
    <!-- ▲javasctipt  -->


    <!-- ▼Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- ▲Bootstrap tooltips -->

    <!-- ▼Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- ▲Bootstrap core JavaScript -->

    <!-- ▼MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- ▲MDB core JavaScript -->

    <!-- ▼js of swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js"></script>
    <!-- ▲js of swiper -->

    <!-- ▼original javasctipt -->
    @yield('script')
    <!-- ▲original javasctipt -->

</body>
</html>