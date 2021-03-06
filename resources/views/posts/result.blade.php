
@extends('layouts.app')

@section('meta')
    <title>@if($request->keyword){{ $request->keyword }}@else全国@endif @if($request->prefecture){{ $request->prefecture }}@endifのコピユニ募集 | コピユニ掲示板 | マチユニ</title>
    <meta name="description" content="マチユニで「@if($request->keyword){{ $request->keyword }}@else全国@endif @if($request->prefecture){{ $request->prefecture }} @endif」のコピユニの検索結果を見る">
@endsection

@section('content')
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                {{--        条件検索        --}}
                <nav class="mt-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">トップ</a></li>
                        <li class="breadcrumb-item"><a href="#">全国のコピユニ</a></li>
                    </ol>
                </nav>

                <div class="con-search mt-4">
                    <div class="row">
                        <div class="col-12">
                            <h5>条件を指定する</h5>
                        </div>
                    </div>
                    <div class="select-option mt-2 mb-4">
                        <form action="/search/" method="get">
                            <div class="row mb-1">
                                <div class="col-4 d-flex align-items-center">
                                    <h5>都道府県</h5>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" name="prefecture">
                                        <option value="" selected>都道府県を選択</option>
                                        @foreach($prefs as $pref)
                                            <option value="{{ $pref }}" @if($request->prefecture == $pref ) selected @endif >{{ $pref }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4 d-flex align-items-center">
                                    <h5>年齢</h5>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" name="age">
                                        <option value="" selected>年齢を選択</option>
                                        @foreach($ages as $age)
                                            <option value="{{ $age }}" @if($request->age == $age ) selected @endif >{{ $age . '代' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4 d-flex align-items-center">
                                    <h5>性別</h5>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" name="gender">
                                        <option value="" selected>性別を選択</option>
                                        @foreach($genders as $gender)
                                            <option value="{{ $gender }}" @if($request->gender == $gender ) selected @endif >{{ $gender }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4 d-flex align-items-center">
                                    <h5>キーワード</h5>
                                </div>
                                <div class="col-8">
                                    <input class="form-control form-control-borderless" name="keyword" type="search" placeholder="グループ名・曲名で検索！" value="{{ $request->keyword }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger btn-block">この条件で検索する</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--        条件検索        --}}
                {{--        メインコンテンツ--}}
                <div class="row">
                    <h5 class="mt-3 mb-3 col-12 col-md-8">「@if($request->keyword){{ $request->keyword }}@else全国@endif」@if($request->prefecture)- {{ $request->prefecture }} @endif のコピユニ</h5>
                </div>
                {{--        メインコンテンツ--}}
                {{--        SP表示--}}
                @if (count($posts) > 0)
                    @foreach($posts as $post)
                        <a href="/posts/{{ $post -> id }}">
                            <div class="row pb-2 sidecard">
                                <div class="col-4 col-md-2  img-hidden">
                                    <img src="{{ \Config::get('app.mediaPATH') }}uploads/{{ $post -> image_path }}" alt="img" class="card-img-top" style="object-fit: cover;">
                                </div>
                                <div class="col-8 col-md-10">
                                    <h6 class="sidecard-title">{{ $post -> title }}</h6>
                                    <div class="sidecard-body position-absolute" style="">
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
                <div class="row">
                    <h5 class="mt-5 mb-3 col-12 col-md-8">他の人はこんな検索をしています</h5>
                </div>
            </div>
        </div>
    </div>

@endsection