
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 mt-5 mb-5 p-4" style="background-color: white";>
                <form method="post" action="/posts">
                    <!-- CSRF保護 -->
                    @csrf
                    <div class="form-group mb-4">
                        <label for="InputImagepath">画像パス</label>
                        <input type="text" class="form-control" name="image_path" id="InputTitle" aria-describedby="titleHelp" placeholder="BTSのコピユニメンバー募集！" value="testpath" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputTitle">タイトル</label>
                        <input type="text" class="form-control" name="title" id="InputTitle" aria-describedby="titleHelp" placeholder="BTSのコピユニメンバー募集！" required>
                        <small id="titleHelp" class="form-text text-muted">40文字以内でタイトルを入力。</small>
                    </div>
                        <div class="form-group mb-4">
                        <label for="InputContent">募集内容</label>
                        <input type="text" name="content" class="form-control" id="InputContent" placeholder="BTSのコピユニメンバー募集！" required>
{{--                        <textarea name="" id="InputContent" cols="30" rows="10"></textarea>--}}
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputCategory">カテゴリ</label>
                        <select name="category" id="" required>
                            <option value="">カテゴリを選択</option>
                            <option value="K-POP">K-POP</option>
                            <option value="J-POP">J-POP</option>
                            <option value="アニソン">アニソン</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputStatus">募集目的</label>
                        <select name="unit_status" id="" required>
                            <option value="">募集目的を選択</option>
                            <option value="new">新規ユニット作成</option>
                            <option value="add">追加メンバー募集</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputPrefecture">都道府県</label>
                        <select name="prefecture" id="" required>
                            <option value="">都道府県を選択</option>
                            <option value="tokyo">東京</option>
                            <option value="osaka">大阪</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputArea">活動場所</label>
                        <input type="text" name="area" class="form-control" id="InputArea" placeholder="新宿　スタジオ〇〇　月1回" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputGender">性別</label>
                        <select name="gender" id="" required>
                            <option value="">性別を選択</option>
                            <option value="female">女性</option>
                            <option value="male">男性</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputAge" required>募集年齢</label>
                        <select name="age" id="">
                            <option value="">募集年齢を選択</option>
                            <option value="10">10代</option>
                            <option value="20">20代</option>
                            <option value="30">30代以上</option>
                        </select>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary text-center">投稿する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection