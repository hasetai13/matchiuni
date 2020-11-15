<!doctype html>
<html lang="ja">
<head>

    <!-- ▼Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ▲Required meta tags -->

    <!-- ▼SEO -->
    <title>MatchiUni</title>
    <meta name="description" content="MatchiUni（マチユニ）は日本初のコピユニ募集掲示板です！マチユニを使えば自分が踊りたいコピユニに参加したり、自分でメンバーを集めたりできます！">
    <!-- ▲SEO -->

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

    <!-- ▼css of slick -->
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
    <!-- ▲css of slick -->

    <!-- ▼js of slick -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./js/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- ▲js of slick -->

    <!-- ▼css of swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/css/swiper.min.css">
    <!-- ▲css of swiper -->
</head>
<body>

    @include('commons.header')

    <div>
        @yield('content')
    </div>

    @include('commons.footer')

    @yield('script')


    <!-- ▼JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ▲JQuery -->

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


</body>
</html>