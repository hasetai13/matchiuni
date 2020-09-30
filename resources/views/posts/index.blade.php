@extends('layouts.app')

@section('content')

{{--    ファーストビュー--}}
    <div class="jumbotron jumbackground text-center" style="background-image: url('/img/637633961.jpg'); background-size: cover;  background-position:50% 65%;">
        <div class="container">
            <h2 class="text-white display-4 font-weight-bold d-none d-md-block">日本初のコピユニ掲示板サイト</h2>
            <h4 class="text-white font-weight-bold d-block d-md-none">日本初のコピユニ掲示板サイト</h4>
            <h5 class="text-white">あなたが踊りたいコピユニが集まる・見つかる！</h5>
        </div>
    </div>
{{--    ファーストビュー--}}


{{--    キャッチコピー--}}
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h3 class="font-weight-bold">MatchiUni(マチユニ)で簡単にコピユニを結成・参加！</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3">
                <button type="submit" class="btn btn-danger btn-block">参加する</button>
            </div>
            <div class="col-6 col-md-3">
                <button type="submit" class="btn btn-danger btn-block">結成する</button>
            </div>
        </div>
    </div>
{{--    キャッチコピー--}}



<div class="autoplay">
    <div><img src="img/osaka.jpg"></div>
    <div><img src="img/osaka.jpg"></div>
    <div><img src="img/osaka.jpg"></div>
    <div><img src="img/osaka.jpg"></div>
    <div><img src="img/osaka.jpg"></div>
    <div><img src="img/osaka.jpg"></div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script type="text/javascript">
    $('.autoplay').slick();
</script>



{{--    メインコンテンツ--}}
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{--    キーワード検索--}}
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span>「グループ・曲名」からコピユニを探す</h5>
                        <form class="card-sm" action="/search/" method="get">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-1">
                                    <input class="form-control form-control-borderless" name="keyword" type="search" placeholder="グループ名・曲名で検索！">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-danger" type="submit">検索</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--    キーワード検索--}}

                {{--    条件検索--}}
                <div class="con-search mt-5">
                    <div class="row">
                        <div class="col-12">
                            <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> 条件から探す</h5>
                        </div>
                    </div>
                    <form action="/search/" method="get">
                        <div class="select-option mt-2 mb-4">
                            <div class="row mb-1">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <h5><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-3.148 0-6 2.553-6 5.702 0 4.682 4.783 5.177 6 12.298 1.217-7.121 6-7.616 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 16l-6.707-2.427-5.293 2.427-5.581-2.427-6.419 2.427 4-9 3.96-1.584c.38.516.741 1.08 1.061 1.729l-3.523 1.41-1.725 3.88 2.672-1.01 1.506-2.687-.635 3.044 4.189 1.789.495-2.021.465 2.024 4.15-1.89-.618-3.033 1.572 2.896 2.732.989-1.739-3.978-3.581-1.415c.319-.65.681-1.215 1.062-1.731l4.021 1.588 3.936 9z"/></svg></span> エリア</h5>
                                </div>
                                <div class="col-8">
                                    <select class="custom-select" name="prefecture">
                                        <option selected value="">エリアを選択</option>
                                        <option value="tokyo">東京府</option>
                                        <option value="osaka">大阪府</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger btn-block">この条件で検索する</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{--    エリア検索--}}
{{--                <div class="row">--}}
{{--                    <h5 class="mt-5 mb-4 col-8">エリア別で探す</h5>--}}
{{--                    <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">--}}
{{--                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="areacard">--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p class="">東京都</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="areacard">--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p>大阪府</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                {{--    エリア検索--}}




                {{--    投稿コンテンツ--}}
                <div class="row">
                    <h5 class="mt-5 mb-4 col-8"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 9.229c.234-1.12 1.547-6.229 5.382-6.229 2.22 0 4.618 1.551 4.618 5.003 0 3.907-3.627 8.47-10 12.629-6.373-4.159-10-8.722-10-12.629 0-3.484 2.369-5.005 4.577-5.005 3.923 0 5.145 5.126 5.423 6.231zm-12-1.226c0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-7.962-9.648-9.028-12-3.737-2.338-5.262-12-4.27-12 3.737z"/></svg></span> 新着のコピユニ</h5>
{{--                    <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">--}}
{{--                        <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>--}}
{{--                    </div>--}}
                </div>
                {{--        PC表示--}}
                <div class="row mb-5 d-none d-md-flex">
                    @if (count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="col-12 col-md-3 mb-4">
                                <div class="card" style="">
                                    <img class="card-img-top" src="img/63763396.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post -> title }}</h5>
                                        <p class="card-text">{{ $post -> content }}</p>
                                        <a href="#" class="card-link">{{ $post -> prefecture }}</a>
                                        <a href="#" class="card-link">{{ $post -> unit_status }}</a>
                                        <a href="#" class="card-link">{{ $post -> unit_status }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{--        PC表示--}}


                {{--        SP表示--}}
                @if (count($posts) > 0)
                    @foreach($posts as $post)
                        <div class="row pb-2 d-md-none sidecard">
                            <a href="/posts/{{ $post -> id }}" style="color: black;">
                                {{--                            <div class="col-4  img-hidden">--}}
                                {{--                                <img src="img/63763396.jpg" alt="img" class="card-img-top img-fulied">--}}
                                {{--                            </div>--}}
                                <div class="col-12">
                                    <h6 class="sidecard-title">{{ $post -> title }}</h6>
                                    <p>{{ $post -> content }}</p>
                                    {{--                                <a href="#" class="sidecard-link">{{ $post -> prefecture }}</a>--}}
                                    {{--                                <a href="#" class="sidecard-link">{{ $post -> unit_status }}</a>--}}
                                    {{--                                <a href="#" class="sidecard-link">{{ $post -> unit_status }}</a>--}}
                                    {{--                                <a href="/posts/{{ $post -> id }}"><button class="btn btn-rounded btn-default btn-sm">気になる!</button></a>--}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif


                <div class="row mt-3 justify-content-center">
                    <div class="col-7">
                        <a href="/search/"><button type="button" class="btn btn-danger  btn-block">もっと見る</button></a>
                    </div>
                </div>





{{--                <div class="seachbyIdol">--}}
{{--                    <div class="row">--}}
{{--                        <h5 class="mt-5 mb-4 col-8">アイドル別で探す</h5>--}}
{{--                        <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">--}}
{{--                            <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p class="">東京都</p>--}}
{{--                        </div>--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p>大阪府</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row mt-4">--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p class="">東京都</p>--}}
{{--                        </div>--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p>大阪府</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row mt-4">--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p class="">東京都</p>--}}
{{--                        </div>--}}
{{--                        <div class="img col-3">--}}
{{--                            <img src="/img/osaka.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-3 text-center">--}}
{{--                            <p>大阪府</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}






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
                        <h4 class="mt-5 mb-4 col-12">MatchiUni（マチユニ）でできること</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5>①コピユニを結成する！</h5>
                            <p>マチユニにコピユニ募集を掲載することで興味を持った人からコメントが貰える！</p>
                        </div>
                        <div class="col-12 mt-4">
                            <h5>②コピユニを参加する！</h5>
                            <p>興味のあるコピユニがあれば気軽にコメントを送って参加しよう！</p>
                        </div>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        <div class="col-12 col-md-6">
                            <a href="/posts/create"><button type="button" class="btn btn-danger  btn-block">＋コピユニを作る！</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    メインコンテンツ--}}


@endsection