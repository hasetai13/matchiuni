
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 mt-5 mb-5 p-4" style="background-color: white";>
                <form>
                    <div class="form-group mb-4">
                        <label for="InputTitle">タイトル</label>
                        <input type="text" class="form-control" id="InputTitle" aria-describedby="titleHelp" placeholder="BTSのコピユニメンバー募集！">
                        <small id="titleHelp" class="form-text text-muted">40文字以内でタイトルを入力してください。</small>
                    </div>
                        <div class="form-group mb-4">
                        <label for="InputArea">募集内容</label>
                        <input type="text" class="form-control" id="InputContent" placeholder="BTSのコピユニメンバー募集！">
{{--                        <textarea name="" id="InputContent" cols="30" rows="10"></textarea>--}}
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputArea">カテゴリ</label>
                        <select name="" id="">
                            <option value="">K-POP</option>
                            <option value="">J-POP</option>
                            <option value="">アニソン</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputArea">募集目的</label>
                        <select name="" id="">
                            <option value="">新規ユニット作成</option>
                            <option value="">追加メンバー募集</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputArea">都道府県</label>
                        <select name="" id="">
                            <option value="">東京</option>
                            <option value="">大阪</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputArea">活動場所</label>
                        <input type="text" class="form-control" id="InputArea" placeholder="新宿　スタジオ〇〇　月1回">
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputGender">性別</label>
                        <select name="" id="">
                            <option value="">女性</option>
                            <option value="">男性</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputAge">募集年齢</label>
                        <select name="" id="">
                            <option value="">特に無し</option>
                            <option value="">10代</option>
                            <option value="">20代</option>
                            <option value="">30代以上</option>
                        </select>
                        <span>～</span>
                        <select name="" id="">
                            <option value="">特に無し</option>
                            <option value="">10代</option>
                            <option value="">20代</option>
                            <option value="">30代以上</option>
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