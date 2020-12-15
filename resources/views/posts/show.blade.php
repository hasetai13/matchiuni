@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7  mb-5 p-4">
                <h5 class="text-center">{{ $post -> title }}</h5>
                <div class="row justify-content-center mt-3 mb-3">
                    <img src="/uploads/{{ $post -> image_path }}" alt="img" class="card-img-top col-6" style="object-fit: cover;">
                </div>
                <table class="table table-sm table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">都道府県</th>
                        <td>{{ $post -> prefecture }}</td>
                    </tr>
                    <tr>
                        <th scope="row">活動場所</th>
                        <td>{{ $post -> area }}</td>
                    </tr>
                    <tr>
                        <th scope="row">性別</th>
                        <td>{{ $post -> gender }}</td>
                    </tr>
                    <tr>
                        <th scope="row">年齢</th>
                        <td>{{ $post -> age }}代</td>
                    </tr>
                    </tbody>
                </table>
                <p>{!! nl2br($post -> content) !!}</p>
            </div>
        </div>

{{--        <div class="row mb-4">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <a href="/search"><span class="font-weight-bold">＞</span> 検索結果に戻る</a>--}}
{{--            </div>--}}
{{--        </div>--}}


        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <h4>関連するコピユニ</h4>
                <div class="swiper-container container pt-1 pr-1 pl-1 pb-1">
                    <div class="swiper-wrapper">
                        @if (count($posts) > 0)
                            @foreach($posts as $post)
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="/posts/{{ $post -> id }}">
                                                <div class="card">
                                                    <img class="card-img-top" style="object-fit: cover;" src="/uploads/{{ $post -> image_path }}" alt="Card image cap">
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
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
        th{
            background-color: #FF7171;
            color: white;
        }
    </style>
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
                        slidesPerView: 3.2,
                    }
                }
            });
        });
    </script>
@endsection