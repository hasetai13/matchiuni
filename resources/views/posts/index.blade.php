@extends('layouts.app')

@section('content')

{{--    ファーストビュー--}}
    <div class="jumbotron jumbackground text-center" style="background-image: url('/img/637633961.jpg'); background-size: cover;  background-position:50% 65%;">
        <div class="container">
            <h2 class="text-white display-4 font-weight-bold d-none d-md-block">日本初のコピユニ掲示板サイト</h2>
            <h3 class="text-white font-weight-bold d-block d-md-none">日本初のコピユニ掲示板サイト</h3>
            <h5 class="text-white">あなたが踊りたいコピユニが集まる・見つかる</h5>
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
    </div>
{{--    キャッチコピー--}}


{{--    メインコンテンツ--}}
    <div class="container mt-5 mb-5">
        {{--    キーワード検索--}}
        <div class="row justify-content-center">
            <div class="col-12">
                <h5>「グループ・曲名」からコピユニを探す</h5>
                <form class="card-sm" action="/search/" method="get">
{{--                    <div class="row no-gutters align-items-center d-none d-md-flex">--}}
{{--                        <div class="col mr-1">--}}
{{--                            <input class="form-control form-control-lg form-control-borderless" name="keyword" type="search" placeholder="グループ名・曲名で検索！">--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <button class="btn btn-success" type="submit">検索</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row no-gutters align-items-center d-md-none">
                        <div class="col mr-1">
                            <input class="form-control form-control-borderless" name="keyword" type="search" placeholder="グループ名・曲名で検索！">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-success" type="submit">検索</button>
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
                    <h5>条件から探す</h5>
                </div>
            </div>
            <form action="/search/" method="get">
                <div class="select-option mt-2 mb-4">
                    <div class="row mb-1">
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <h5>エリア</h5>
                        </div>
                        <div class="col-9">
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
                        <button type="submit" class="btn btn-primary btn-block">この条件で検索する</button>
                    </div>
                </div>
            </form>
        </div>
        {{--    条件検索--}}


        {{--    投稿コンテンツ--}}
        <div class="row">
            <h5 class="mt-5 mb-4 col-8">新着のコピユニ</h5>
            <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">
                <p style="position: absolute; right: 10px; bottom: -20px;"><a href="">もっと見る</a></p>
            </div>
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


        {{--        SP表示--}}
            @if (count($posts) > 0)
                @foreach($posts as $post)
                    <div class="row pb-2 d-md-none sidecard">
                            <div class="col-4  img-hidden">
                                <img src="img/63763396.jpg" alt="img" class="card-img-top img-fulied">
                            </div>
                            <div class="col-8">
                                <h6 class="sidecard-title">{{ $post -> title }}</h6>
                                <p class="sidecard-text">{{ $post -> content }}</p>
                                <a href="#" class="sidecard-link">{{ $post -> prefecture }}</a>
                                <a href="#" class="sidecard-link">{{ $post -> unit_status }}</a>
                                <a href="#" class="sidecard-link">{{ $post -> unit_status }}</a>
                            </div>
                    </div>
                @endforeach
            @endif
    </div>
{{--    メインコンテンツ--}}


    <div class="fixed_btn">
        <a class="circle" href="/posts/create">
            <span>募集する</span>
        </a>
    </div>

@endsection