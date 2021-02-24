
@extends('layouts.app')

@section('meta')
    <title>投稿| MatchiUni（マチユニ）</title>
    <meta name="description" content="マチユニでは全国のコピユニ募集情報をまとめて検索できます。K-POPはもちろんJ-POPやアニソンのコピユニも掲載。年齢や場所・グループで絞り込んで、あなたにぴったりのコピユニが見つけられます！">
    <meta name="robots" content="noindex" />
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 p-4">
                <form action="/posts" method="post" enctype="multipart/form-data">
                    <!-- CSRF保護 -->
                    @csrf
                    {{-- エラーメッセージ --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li>文字数を超えている項目があります</li>
                            </ul>
                        </div>
                    @endif
                    <div class="mt-2 mb-4">
                        <div class="row mb-1">
                            <div class="col-12">
                                <label class="form-label" for="customFile">画像を選択してください</label>
                                <input type="file" class="form-control" id="customFile" />
                                <div class="form-group">
                                    <label for="InputTitle">タイトル/本文<span>*</span></label>
                                    <input type="text" class="form-control" name="title" id="InputTitle" aria-describedby="titleHelp" placeholder="BTSのコピユニメンバー募集！" required>
                                    <small id="titleHelp" class="form-text text-muted">40文字以内でタイトルを入力。現在の文字数：<span class="ShowCntTitle">0</span>文字</small>
                                    <textarea class="form-control mt-2" name="content" id="InputContent" rows="5" required></textarea>
                                    <small id="titleHelp" class="form-text text-muted">191文字以内で本文を入力。現在の文字数：<span class="ShowCntContent">0</span>文字</small>
                                </div>
                                <div class="form-group">
                                    <label for="InputTitle">都道府県<span>*</span></label>
                                    <select class="form-select" name="prefecture" required>
                                        <option value="" selected>都道府県を選択</option>
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>
                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県">神奈川県</option>
                                        <option value="新潟県">新潟県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="長野県">長野県</option>
                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>
                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県">和歌山県</option>
                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>
                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>
                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県">鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="InputTitle">活動場所/頻度<span>*</span></label>
                                    <input type="text" class="form-control" name="area" id="InputArea" aria-describedby="titleHelp" placeholder="梅田BLOCK 週1回" required>
                                    <small id="titleHelp" class="form-text text-muted">20文字以内で本文を入力。現在の文字数：<span class="ShowCntArea">0</span>文字</small>
                                </div>
                                <div class="form-group">
                                    <label for="InputTitle">性別<span>*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="女性" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            女性
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="男性">
                                        <label class="form-check-label" for="exampleRadios2">
                                            男性
                                        </label>
                                    </div>
                                    <small id="titleHelp" class="form-text text-muted">募集するメンバーの性別を選択</small>
                                </div>
                                <div class="form-group">
                                    <label for="InputTitle">年齢<span>*</span></label>
                                    <select class="form-select" name="age" required>
                                        <option selected value="">年齢を選択</option>
                                        <option value="10">10代</option>
                                        <option value="20">20代</option>
                                        <option value="30">30代以上</option>
                                    </select>
                                    <small id="titleHelp" class="form-text text-muted">募集するメンバーの年齢を選択</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">コピユニを募集する</button>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a href="/">＞トップに戻る</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.parent().parent().next(':text').val(label);
        });

        $('#InputTitle').keyup(function() {
            let cnt = $(this).val().length;
            $('.ShowCntTitle').text(cnt);
        });
        $('#InputContent').keyup(function() {
            let cnt = $(this).val().length;
            $('.ShowCntContent').text(cnt);
        });
        $('#InputArea').keyup(function() {
            let cnt = $(this).val().length;
            $('.ShowCntArea').text(cnt);
        });
    </script>
@endsection