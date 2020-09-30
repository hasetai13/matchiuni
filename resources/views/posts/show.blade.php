
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 mt-5 mb-5 p-4" style="background-color: white";>
                <h2 class="text-center">{{ $post -> title }}</h2>
                <div class="col-12">
                    <img class="card-img-top" src="/img/63763396.jpg" alt="Card image cap">
                </div>
                <div class="col-12">
                    <table class="table table-sm table-bordered">
                        <tbody>
                        <tr>
                            <th scope="row">カテゴリ</th>
                            <td>{{ $post -> category }}</td>
                        </tr>
                        <tr>
                            <th scope="row">都道府県</th>
                            <td>{{ $post -> prefecture }}</td>
                        </tr>
                        <tr>
                            <th scope="row">活動場所</th>
                            <td>{{ $post -> area }}</td>
                        </tr>
                        <tr>
                            <th scope="row">募集目的</th>
                            <td>{{ $post -> unit_status }}</td>
                        </tr>
                        <tr>
                            <th scope="row">性別</th>
                            <td>{{ $post -> gender }}</td>
                        </tr>
                        <tr>
                            <th scope="row">年齢</th>
                            <td>{{ $post -> age }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <p>{{ $post -> content }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection