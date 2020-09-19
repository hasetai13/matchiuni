@extends('layouts.app')

@section('content')

<!--Main Navigation-->
<header>
    <div class="container">
        <div class="navbar-brand"><a href="/">MatchiUni</a></div>
        <div><a href="/">探す</a></div>
        <div><a href="/posts/create">投稿</a></div>
        <div><a href="/login">ログイン</a></div>
    </div>
</header>
<!--Main Navigation-->

    <!-- first view -->
    <div class="jumbotron jumbackground text-center" style="background-image: url('/img/637633961.jpg'); background-size: cover;  background-position:50% 65%;">
        <div class="container">
        <h2 class="text-white display-4 font-weight-bold d-none d-md-block">全国どこでも簡単に<br>コピユニを探せる・作れる</h2>
            <h3 class="text-white font-weight-bold d-block d-md-none">全国どこでも簡単にコピユニを探せる・作れる</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 mt-3">
                    <form class="card-sm">
                        <div class="row no-gutters align-items-center">
                            <!--end of col-->
                            <div class="col mr-1">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="グループ名・曲名で検索！">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-success" type="submit">検索</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
        </div>
    </div>

    <!-- ここにページ毎のコンテンツを書く -->
    <div class="container bg-color:">
        <!-- search -->
        <h2 class="mt-5 mb-4">条件を指定して検索</h2>
        <form action="index.html" method="post" class="mb-4">
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">エリア</label>
                <div class="col-8">
                    <select name="" class="form-control">
                        <option value="">エリアを選択してください</option>
                        <option value="">東京</option>
                        <option value="">大阪</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">性別</label>
                <div class="col-8">
                    <select name="" class="form-control">
                        <option value="">性別を選択してください</option>
                        <option value="">女性</option>
                        <option value="">男性</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">年齢</label>
                <div class="col-8">
                    <select name="" class="form-control">
                        <option value="">年齢を選択してください</option>
                        <option value="">10代</option>
                        <option value="">20代</option>
                        <option value="">30代以上</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <button type="submit" class="btn btn-primary col-6">この条件で検索</button>
            </div>

        </form>

        <!-- end of search -->

        <!-- contents -->
        <div class="row">
            <h2 class="mt-5 mb-4 col-8">新着のコピユニ</h2>
            <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">
                <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="mt-5 mb-4 col-8">BTSのコピユニ</h2>
            <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">
                <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="mt-5 mb-4 col-8">東京のコピユニ</h2>
            <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">
                <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card" style="">
                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BTSのコピユニメンバー募集！</h5>
                        <p class="card-text">大阪の梅田周辺でBTSのコピユニできるメンバー募集してます！今いるメンバーは全員初心者でダンスやったことない人でも気軽に参加できるグループだと思います！</p>
                        <a href="#" class="card-link">大阪</a>
                        <a href="#" class="card-link">追加募集</a>
                        <a href="#" class="card-link">女20～30代</a>
                    </div>
                </div>
            </div>
        </div>
{{--    end of container--}}
    </div>

    <!-- 追従ボタン -->
{{--    <button class="fixed_btn">募集</button>--}}

    <div class="fixed_btn">
        <a class="circle" href="#">
            <span>募集する</span>
        </a>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">MatchiUni（マチユニ）とは？</h5>
                    <p>MatchiUni（マチユニ）とは、誰でも簡単に使えるコピユニ募集掲示板です。</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <hr>

        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">投稿する!</a>
            </li>
        </ul>
        <!-- Call to action -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->




@endsection