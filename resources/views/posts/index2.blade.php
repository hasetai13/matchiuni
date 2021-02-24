@extends('layouts.app')

@section('meta')
    <title>MatchiUni（マチユニ）| すぐに見つかるコピユニ掲示板</title>
    <meta name="description" content="マチユニでは全国のコピユニ募集情報をまとめて検索できます。K-POPはもちろんJ-POPやアニソンのコピユニも掲載。年齢や場所・グループで絞り込んで、あなたにぴったりのコピユニが見つけられます！">
@endsection

@section('content')

<div
        class="p-5 text-center bg-image"
        style="
          background-image: url('https://www.kpopmonster.jp/wp-content/uploads/2019/12/bts06.jpg');
        /*　background-image: url('/img/1_Primary_logo_on_transparent_100x23.png');*/
          height: 300px;
        "
>
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="text-white col-8">
                <h4 class="mb-4">みんなで踊ればステージはさらに楽しくなる</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <button type="button" class="btn btn-info btn-block" data-mdb-ripple-color="#ffffff">TWITTER </button>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">

            <div class="row mb-5">
                <h5 class="mb-3 col-">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg>
                    </span> 現在募集中のイベント
                </h5>
                <span>現在募集中のイベントはありません。</span>
            </div>


            <div class="row">
                <h5 class="mb-4 col-9">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg>
                    </span> 新着のコピユニ募集
                </h5>
            </div>

            @if (count($posts) > 0)
                @foreach($posts as $post)
                    <a href="/posts/{{ $post -> id }}">
                        <div class="row pb-2 sidecard">
                            <div class="col-4 col-md-2  img-hidden">
                                <img src="{{ \Config::get('app.mediaPATH') }}uploads/{{ $post -> image_path }}" alt="img" class="card-img-top" style="object-fit: cover;">
                            </div>
                            <div class="col-8 col-md-10">
                                <h6 class="sidecard-title">{{ $post -> title }}</h6>
                                <div class="sidecard-body position-absolute" style="bottom: 0px;">
                                    <ul>
                                        <li>{{ $post -> prefecture }}</li>
                                        <li>{{ $post -> gender }}</li>
                                        <li>{{ $post -> age }}代</li>
                                        <span>{{ $post -> updated_at->format('Y/m/d') }}</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif

            <div class="row mt-4">
                <div class="col-12">
                    <button type="button" class="btn btn-danger btn-rounded  btn-block " data-mdb-ripple-color="#ffffff"> ＋もっと見る </button>
                </div>
            </div>
            {{--    ▲カード　最近投稿されたコピユニ--}}



            {{--    ▼見出し　最近投稿されたコピユニ--}}
            <div class="row">
                <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> グループから探す</h5>
                <div class="mt-5 mb-4 col-3 text-right" style="position: relative;">
                    <p style="position: absolute; right: 10px; bottom: -20px;"><a href="/search">もっと見る</a></p>
                </div>
            </div>
            {{--    ▲見出し　最近投稿されたコピユニ--}}

            {{--    ▼カード　最近投稿されたコピユニ--}}
            <div class="group-section pt-1 pb-1">
                <div class="row">
                    <div class="col-6">
                        <div class="row position-relative">
                            <div class="col-7">
                                <div class="card">
                                    <img class="card-img-top" src="/img/bts.png" alt="Card image cap" style="height:auto;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-static">
                                <span>BTS</span>
                                <a href="/search/?keyword=BTS" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row position-relative">
                            <div class="col-7">
                                <div class="card">
                                    <img class="card-img-top" src="/img/twice.png" alt="Card image cap" style="height:auto;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-static">
                                <span>TWICE</span>
                                <a href="/search/?keyword=TWICE" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="row position-relative">
                            <div class="col-7">
                                <div class="card">
                                    <img class="card-img-top" src="/img/seventeen.png" alt="Card image cap" style="height:auto;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-static">
                                <span>SEVENTEEN</span>
                                <a href="/search/?keyword=SEVENTEEN" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row position-relative">
                            <div class="col-7">
                                <div class="card">
                                    <img class="card-img-top" src="/img/blackpink.png" alt="Card image cap" style="height:auto;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-static">
                                <span>BLACKPINK</span>
                                <a href="/search/?keyword=BLACKPINK" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row position-relative">
                            <div class="col-7">
                                <div class="card">
                                    <img class="card-img-top" src="/img/redvelvet.png" alt="Card image cap" style="height:auto;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-static">
                                <span>REDVELVET</span>
                                <a href="/search/?keyword=REDVELVET" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row position-relative">
                            <div class="col-7">
                                <div class="card">
                                    <img class="card-img-top" src="/img/exo.png" alt="Card image cap" style="height:auto;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-static">
                                <span>EXO</span>
                                <a href="/search/?keyword=EXO" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .swiper-container.flex -->
            {{--    ▲カード　最近投稿されたコピユニ--}}

            <div class="row">
                <h5 class="mt-5 mb-4 col-9"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> お知らせ</h5>
                <span>新着のお知らせはありません。</span>
            </div>

            {{--    ▼サービス説明--}}
            <div class="explain">
                <div class="row">
                    <h4 class="mt-5 mb-4 col-12">MatchiUni（マチユニ）とは？</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>MatchiUni（マチユニ）とは、日本初のコピユニ募集掲示板です！
                            K-POP・J-POP・アニソンなど様々なジャンルのコピユニを募集できます！</p>
                    </div>
                </div>

                <div class="row">
                    <h4 class="mt-5 mb-4 col-12">MatchiUni（マチユニ）でできることは？</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>①コピユニを結成する！</h5>
                        <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>
                    </div>
                    <div class="col-12 mt-4">
                        <h5>②コピユニに参加する！</h5>
                        <p>興味のあるコピユニがあれば気軽にコメントを送って参加しよう！</p>
                    </div>
                </div>

                <div class="row mt-4 justify-content-center">
                    <div class="col-12 col-md-6">
                        <a href="/posts/create"><button type="button" class="btn btn-danger  btn-block">＋コピユニを作る！</button></a>
                    </div>
                </div>
            </div>
            {{--    ▲サービス説明--}}
        </div>
    </div>
</div>

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
                        slidesPerView: 4,
                    }
                }
            });
        });
    </script>
@endsection