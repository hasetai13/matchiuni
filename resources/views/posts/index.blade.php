@extends('layouts.app')

@section('meta')
    <title>MatchiUni（マチユニ）| すぐに見つかるコピユニ掲示板</title>
    <meta name="description" content="マチユニでは全国のコピユニ募集情報をまとめて検索できます。K-POPはもちろんJ-POPやアニソンのコピユニも掲載。年齢や場所・グループで絞り込んで、あなたにぴったりのコピユニが見つけられます！">
@endsection

@section('content')


{{--    ▼ファーストビュー--}}
{{--    <div class="jumbotron jumbackground text-center" style="background-image: url('https://www.bannerkoubou.com/image/DJrghY86ITHHqhm1614015104_1614015185.png'); background-size: cover;  background-position:50% 65%; height: 360px">--}}
{{--        <h2 class="text-white display-4 font-weight-bold d-none d-md-block">みんなで踊れば、ステージはさらに楽しくなる</h2>--}}
{{--        <p class="text-white">イベント応募からコピユニ募集まで、<br>コピユニライフはすべてここだけで完結。</p>--}}
{{--    </div>--}}
<!-- Jumbotron -->
<div class="p-5 text-center text-white"; style="background-image: url('/img/637633961.jpg'); background-size: cover; background-position:50% 65%;">
    <h3 class="font-weight-bold">マチユニで簡単にコピユニを結成・参加！</h3>
    <div class="row mt-4 justify-content-center">
        <div class="col-12 col-md-3 mb-4">
            <a href="/posts/create"><button type="button" class="btn btn-danger btn-rounded  btn-block "> コピユニを結成する（無料） </button></a>
        </div>
        <ins><a href="/login" class="text-white">ログイン</a></ins>
    </div>
</div>

<!-- Jumbotron -->
{{--    ▲ファーストビュー--}}


{{--    ▼キャッチコピー--}}
{{--    <div class="container text-center mt-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <h3 class="font-weight-bold">MatchiUni(マチユニ)で簡単にコピユニを結成・参加！</h3>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mt-2 justify-content-center">--}}
{{--            <div class="col-6 col-md-3">--}}
{{--                <a href="/search"><button type="submit" class="btn btn-danger btn-block">コピユニを探す</button></a>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md-3">--}}
{{--                <a href="/posts/create"><button type="submit" class="btn btn-danger btn-block">コピユニを作る</button></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    ▲キャッチコピー--}}


{{--    ▼メインコンテンツ--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">

                {{--    ▼キーワード検索--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span>「グループ・曲名」からコピユニを探す</h5>--}}
{{--                        <form class="card-sm" action="/search/" method="get">--}}
{{--                            <div class="row no-gutters align-items-center">--}}
{{--                                <div class="col mr-1">--}}
{{--                                    <input class="form-control form-control-borderless" name="keyword" type="search" placeholder="グループ名・曲名で検索！">--}}
{{--                                </div>--}}
{{--                                <div class="col-auto">--}}
{{--                                    <button class="btn btn-danger" type="submit">検索</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
                {{--    ▲キーワード検索--}}

                {{--    ▼条件検索--}}
{{--                <div class="con-search mt-5">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> 条件から探す</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <form action="/search/" method="get">--}}
{{--                        <div class="select-option mt-2 mb-4">--}}
{{--                            <div class="row mb-1">--}}
{{--                                <div class="col-5 d-flex align-items-center">--}}
{{--                                    <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-3.148 0-6 2.553-6 5.702 0 4.682 4.783 5.177 6 12.298 1.217-7.121 6-7.616 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 16l-6.707-2.427-5.293 2.427-5.581-2.427-6.419 2.427 4-9 3.96-1.584c.38.516.741 1.08 1.061 1.729l-3.523 1.41-1.725 3.88 2.672-1.01 1.506-2.687-.635 3.044 4.189 1.789.495-2.021.465 2.024 4.15-1.89-.618-3.033 1.572 2.896 2.732.989-1.739-3.978-3.581-1.415c.319-.65.681-1.215 1.062-1.731l4.021 1.588 3.936 9z"/></svg></span> 都道府県</h5>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <select class="form-select" name="prefecture">--}}
{{--                                        <option value="" selected>都道府県を選択</option>--}}
{{--                                        <option value="北海道">北海道</option>--}}
{{--                                        <option value="青森県">青森県</option>--}}
{{--                                        <option value="岩手県">岩手県</option>--}}
{{--                                        <option value="宮城県">宮城県</option>--}}
{{--                                        <option value="秋田県">秋田県</option>--}}
{{--                                        <option value="山形県">山形県</option>--}}
{{--                                        <option value="福島県">福島県</option>--}}
{{--                                        <option value="茨城県">茨城県</option>--}}
{{--                                        <option value="栃木県">栃木県</option>--}}
{{--                                        <option value="群馬県">群馬県</option>--}}
{{--                                        <option value="埼玉県">埼玉県</option>--}}
{{--                                        <option value="千葉県">千葉県</option>--}}
{{--                                        <option value="東京都">東京都</option>--}}
{{--                                        <option value="神奈川県">神奈川県</option>--}}
{{--                                        <option value="新潟県">新潟県</option>--}}
{{--                                        <option value="富山県">富山県</option>--}}
{{--                                        <option value="石川県">石川県</option>--}}
{{--                                        <option value="福井県">福井県</option>--}}
{{--                                        <option value="山梨県">山梨県</option>--}}
{{--                                        <option value="長野県">長野県</option>--}}
{{--                                        <option value="岐阜県">岐阜県</option>--}}
{{--                                        <option value="静岡県">静岡県</option>--}}
{{--                                        <option value="愛知県">愛知県</option>--}}
{{--                                        <option value="三重県">三重県</option>--}}
{{--                                        <option value="滋賀県">滋賀県</option>--}}
{{--                                        <option value="京都府">京都府</option>--}}
{{--                                        <option value="大阪府">大阪府</option>--}}
{{--                                        <option value="兵庫県">兵庫県</option>--}}
{{--                                        <option value="奈良県">奈良県</option>--}}
{{--                                        <option value="和歌山県">和歌山県</option>--}}
{{--                                        <option value="鳥取県">鳥取県</option>--}}
{{--                                        <option value="島根県">島根県</option>--}}
{{--                                        <option value="岡山県">岡山県</option>--}}
{{--                                        <option value="広島県">広島県</option>--}}
{{--                                        <option value="山口県">山口県</option>--}}
{{--                                        <option value="徳島県">徳島県</option>--}}
{{--                                        <option value="香川県">香川県</option>--}}
{{--                                        <option value="愛媛県">愛媛県</option>--}}
{{--                                        <option value="高知県">高知県</option>--}}
{{--                                        <option value="福岡県">福岡県</option>--}}
{{--                                        <option value="佐賀県">佐賀県</option>--}}
{{--                                        <option value="長崎県">長崎県</option>--}}
{{--                                        <option value="熊本県">熊本県</option>--}}
{{--                                        <option value="大分県">大分県</option>--}}
{{--                                        <option value="宮崎県">宮崎県</option>--}}
{{--                                        <option value="鹿児島県">鹿児島県</option>--}}
{{--                                        <option value="沖縄県">沖縄県</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-1">--}}
{{--                                <div class="col-5 d-flex align-items-center">--}}
{{--                                    <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/></svg></span> 年齢</h5>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <select class="form-select" name="age">--}}
{{--                                        <option selected value="">年齢を選択</option>--}}
{{--                                        <option value="10">10代</option>--}}
{{--                                        <option value="20">20代</option>--}}
{{--                                        <option value="30">30代</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mb-1">--}}
{{--                                <div class="col-5 d-flex align-items-center">--}}
{{--                                    <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 0v2h2.586l-2.113 2.113c-.981-.698-2.177-1.113-3.473-1.113-2.22 0-4.144 1.216-5.18 3.009-3.229.096-5.82 2.738-5.82 5.991 0 2.973 2.164 5.433 5 5.91v2.09h-3v2h3v2h2v-2h3v-2h-3v-2.09c1.791-.301 3.294-1.403 4.167-2.918 3.235-.09 5.833-2.735 5.833-5.992 0-1.296-.415-2.492-1.113-3.473l2.113-2.113v2.586h2v-6h-6zm-3 13c-1.944 0-3.564-1.396-3.923-3.236-.66-.333-1.365-.346-2.033-.066.266 2.293 1.827 4.181 3.931 4.938-.729.831-1.784 1.364-2.975 1.364-2.206 0-4-1.794-4-4s1.794-4 4-4c1.937 0 3.555 1.384 3.921 3.214.679.35 1.309.383 2.033.077-.27-2.293-1.837-4.179-3.943-4.931.732-.83 1.797-1.36 2.989-1.36 2.206 0 4 1.794 4 4s-1.794 4-4 4z"/></svg></span> 性別</h5>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <select class="form-select" name="gender">--}}
{{--                                        <option selected value="">性別を選択</option>--}}
{{--                                        <option value="女性">女性</option>--}}
{{--                                        <option value="男性">男性</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <button type="submit" class="btn btn-danger btn-block">この条件で検索する</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                {{--    ▲条件検索--}}

                <div class="explain">
                    <div class="row">
                        <h4 class="mt-3 mb-4 col-12 heading">MatchiUni（マチユニ）とは？</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>MatchiUni（マチユニ）とは、日本初のコピユニ募集掲示板です！
                                K-POP・J-POP・アニソンなど様々なジャンルのコピユニを募集できます！</p>
                        </div>
                    </div>

                    <div class="row">
                        <h4 class="mt-4 mb-4 col-12 heading">MatchiUni（マチユニ）でできること</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="list207">
                                <ol>
                                    <li>
                                        <h5>イベントに応募する！</h5>
                                    </li>
                                    <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>
                                    <li>
                                        <h5>コピユニを結成する！</h5>
                                    </li>
                                    <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>
                                    <li>
                                        <h5>コピユニに参加する！</h5>
                                    </li>
                                    <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>
                                </ol>
                            </div>
                        </div>
{{--                        <div class="col-12">--}}
{{--                            <h5>①イベントに応募する！</h5>--}}
{{--                            <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 mt-4">--}}
{{--                            <h5>②コピユニを結成する！</h5>--}}
{{--                            <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 mt-4">--}}
{{--                            <h5>③コピユニに参加する！</h5>--}}
{{--                            <p>興味のあるコピユニがあれば気軽にコメントを送って参加しよう！</p>--}}
{{--                        </div>--}}
                    </div>
                </div>


                <div class="row mt-4">
                    <h5 class="heading">イベント情報</h5>
                    <span>現在募集中のイベントはありません。</span>
                </div>


                {{--    ▼見出し　最近投稿されたコピユニ--}}
                <div class="row">
{{--                    <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> 新着の募集</h5>--}}
                    <h5 class="mt-5 mb-4 col-9">新着の募集</h5>
                    <div class="mt-5 mb-4 col-3 text-right position-relative">
                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                    </div>
                </div>
                {{--    ▲見出し　最近投稿されたコピユニ--}}



                {{--    ▼カード　最近投稿されたコピユニ--}}
                <div class="swiper-container container pt-1 pr-1 pl-1 pb-1">
                    <div class="swiper-wrapper">
                        @if (count($posts) > 0)
                            @foreach($posts as $post)
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="/posts/{{ $post -> id }}">
                                                <div class="card">
                                                    <img class="card-img-top" style="object-fit: cover;" src="{{ \Config::get('app.mediaPATH') }}uploads/{{ $post -> image_path }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-title">{{ $post -> title }}</p>
                                                        <ul class="card-lists">
                                                            <li class="card-list">{{ $post -> prefecture }}</li>
                                                            <li class="card-list">{{ $post -> age . '代' }}</li>
                                                            <li class="card-list">{{ $post -> gender }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>


                {{--    ▼見出し　最近投稿されたコピユニ--}}
                <div class="row">
{{--                    <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> 20代の募集</h5>--}}
                    <h5 class="mt-5 mb-4 col-9">20代の募集</h5>
                    <div class="mt-5 mb-4 col-3 text-right position-relative">
                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                    </div>
                </div>
                {{--    ▲見出し　最近投稿されたコピユニ--}}



                {{--    ▼カード　最近投稿されたコピユニ--}}
                <div class="swiper-container container pt-1 pr-1 pl-1 pb-1">
                    <div class="swiper-wrapper">
                        @if (count($posts) > 0)
                            @foreach($posts as $post)
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="/posts/{{ $post -> id }}">
                                                <div class="card">
                                                    <img class="card-img-top" style="object-fit: cover;" src="{{ \Config::get('app.mediaPATH') }}uploads/{{ $post -> image_path }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-title">{{ $post -> title }}</p>
                                                        <ul class="card-lists">
                                                            <li class="card-list">{{ $post -> prefecture }}</li>
                                                            <li class="card-list">{{ $post -> age . '代' }}</li>
                                                            <li class="card-list">{{ $post -> gender }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>



                <div class="row">
{{--                    <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> エリアから探す</h5>--}}
                    <h5 class="mt-5 mb-4 col-9 heading">エリアから探す</h5>
                    <div class="mt-5 mb-4 col-3 text-right" style="position: relative;">
                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                    </div>
                </div>

                <div class="group-section pt-1 pb-1">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/tokyo.jpg" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>BTS</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/tokyo.jpg" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>TWICE</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .swiper-container.flex -->

                <div class="row">
                    <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> BTSのコピユニ</h5>
                    <div class="mt-5 mb-4 col-3 text-right" style="position: relative;">
                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                    </div>
                </div>

                @if (count($posts_bts) > 0)
                    @foreach($posts_bts as $post_bts)
                        <a href="/posts/{{ $post_bts -> id }}">
                            <div class="row pb-2 sidecard">
                                <div class="col-4 col-md-2  img-hidden">
                                    <img src="{{ \Config::get('app.mediaPATH') }}uploads/{{ $post_bts -> image_path }}" alt="img" class="card-img-top" style="object-fit: cover;">
                                </div>
                                <div class="col-8 col-md-10">
                                    <h6 class="sidecard-title">{{ $post_bts -> title }}</h6>
                                    <div class="sidecard-body position-absolute">
                                        <ul>
                                            <li>{{ $post_bts -> prefecture }}</li>
                                            <li>{{ $post_bts -> gender }}</li>
                                            <li>{{ $post_bts -> age }}代</li>
                                            <span>{{ $post_bts -> updated_at->format('Y/m/d') }}</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

                <div class="row mt-4 justify-content-center">
                    <div class="col-12 col-md-6">
                        <a href="/search/?keyword=BTS"><button type="button" class="btn btn-danger btn-rounded  btn-block">＋もっと見る</button></a>
                    </div>
                </div>

                <div class="row">
                    <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> TWICEのコピユニ</h5>
                    <div class="mt-5 mb-4 col-3 text-right" style="position: relative;">
                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                    </div>
                </div>

                @if (count($posts_twice) > 0)
                    @foreach($posts_twice as $post_twice)
                        <a href="/posts/{{ $post_twice -> id }}">
                            <div class="row pb-2 sidecard">
                                <div class="col-4 col-md-2  img-hidden">
                                    <img src="{{ \Config::get('app.mediaPATH') }}uploads/{{ $post_twice -> image_path }}" alt="img" class="card-img-top" style="object-fit: cover;">
                                </div>
                                <div class="col-8 col-md-10">
                                    <h6 class="sidecard-title">{{ $post_twice -> title }}</h6>
                                    <div class="sidecard-body position-absolute">
                                        <ul>
                                            <li>{{ $post_twice -> prefecture }}</li>
                                            <li>{{ $post_twice -> gender }}</li>
                                            <li>{{ $post_twice -> age }}代</li>
                                            <span>{{ $post_twice -> updated_at->format('Y/m/d') }}</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

                <div class="row mt-4 justify-content-center">
                    <div class="col-12 col-md-6">
                        <a href="/search/?keyword=TWICE"><button type="button" class="btn btn-danger btn-rounded  btn-block">＋もっと見る</button></a>
                    </div>
                </div>

                <div class="row">
{{--                    <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> グループから探す</h5>--}}
                    <h5 class="mt-5 mb-4 col-9 heading">グループから探す</h5>
                    <div class="mt-5 mb-4 col-3 text-right" style="position: relative;">
                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                    </div>
                </div>

                <div class="group-section pt-1 pb-1">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/bts.png" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>BTS</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/twice.png" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>TWICE</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/seventeen.png" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>SEVENTEEN</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/blackpink.png" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>BLACKPINK</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/redvelvet.png" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>REDVELVET</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row d-flex position-relative">
                                <div class="col-7">
                                    <img class="card-img-top rounded" src="/img/exo.png" alt="Card image cap" style="height:auto;">
                                </div>
                                <div class="col-5 d-flex align-items-center position-static">
                                    <a href="/search/?keyword=BTS" class="stretched-link"><span>EXO</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .swiper-container.flex -->

                <div class="explain">
                    <div class="row">
                        <h4 class="mt-5 mb-4 col-12 heading">MatchiUni（マチユニ）とは？</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>MatchiUni（マチユニ）とは、日本初のコピユニ募集掲示板です！
                                K-POP・J-POP・アニソンなど様々なジャンルのコピユニを募集できます！</p>
                        </div>
                        <a class="twitter-timeline" data-lang="ja" data-height="400" href="https://twitter.com/babbyface15?ref_src=twsrc%5Etfw">Tweets by babbyface15</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    ▲メインコンテンツ--}}

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            let swiper= new Swiper('.swiper-container', {
                slidesPerView: 2.3,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    767: {
                        slidesPerView: 4.3,
                    }
                }
            });
        });
    </script>
@endsection