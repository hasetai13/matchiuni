
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7  mb-5 p-4" style="background-color: white";>
                <div class="col-12">
                    <h3 class="text-center">{{ $post -> title }}</h3>
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