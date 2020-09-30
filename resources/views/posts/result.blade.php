
@extends('layouts.app')

@section('content')

    <div class="container mb-5">
        {{--        条件検索        --}}
        <div class="con-search mt-4">
            <div class="row">
                <div class="col-12">
                    <h5>条件を指定する</h5>
                </div>
            </div>
            <div class="select-option mt-2 mb-4">
                <div class="row mb-1">
                    <div class="col-4 d-flex align-items-center">
                        <h5>エリア</h5>
                    </div>
                    <div class="col-8">
                        <select class="custom-select" name="prefecture">
                            <option selected value="">エリアを選択</option>
                            <option value="tokyo">東京府</option>
                            <option value="osaka">大阪府</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 d-flex align-items-center">
                        <h5>キーワード</h5>
                    </div>
                    <div class="col-8">
                        <input class="form-control form-control-borderless" name="keyword" type="search" placeholder="グループ名・曲名で検索！">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-danger btn-block">この条件で検索する</button>
                </div>
            </div>
        </div>
        {{--        条件検索        --}}


        {{--        メインコンテンツ--}}
        <div class="row">
            <h5 class="mt-5 mb-4 col-8">検索結果</h5>
            <div class="mt-5 mb-4 col-4 text-right" style="position: relative;">
            </div>
        </div>

        {{--        SP表示--}}
        @if (count($posts) > 0)
            @foreach($posts as $post)
                <div class="row pb-2 sidecard">
                    <div class="col-4  img-hidden">
                        <img src="/img/63763396.jpg" alt="img" class="card-img-top img-fulied">
                    </div>
                    <div class="col-8">
                        <h6 class="sidecard-title">{{ $post -> title }}</h6>
                        <p class="sidecard-text">{{ $post -> content }}</p>
                        <a href="#" class="sidecard-link">{{ $post -> prefecture }}</a>
                        <a href="#" class="sidecard-link">{{ $post -> unit_status }}</a>
                        <a href="#" class="sidecard-link">{{ $post -> unit_status }}</a>
                        <a class="btn btn-danger btn-sm" href="/posts/{{ $post -> id }}" role="button">詳しく見る</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection