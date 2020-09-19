<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>マチユニ</title>
</head>
<body>
<header>
    <h2><a href="/">投稿フォーム</a></a></h2>
    <nav>
        <ul>
            <li>エリア</li>
            <li>検索</li>
            <li><a href="/create">投稿</a></li>
            <li><a href="/login">ログイン</a></li>
        </ul>
    </nav>
</header>
<div class="PostFomr">
    <form method="POST" action="/posts">
        <!-- CSRF保護 -->
        @csrf
        <select name="category" id="">
            <option value="K-POP">K-POP</option>
            <option value="J-POP">J-POP</option>
        </select>
        <input type="text" name="image_path" placeholder="画像パス" required value="testpath">
        <input type="text" name="title" placeholder="タイトル" required>
        <input type="text" name="content" placeholder="本文" required>
        <select name="unit_status" id="">
            <option value="1">新規募集</option>
            <option value="2">メンバー追加</option>
        </select>
        <input type="text" name="prefecture" placeholder="東京・大阪" required>
        <input type="text" name="area" placeholder="新宿・梅田" required>
        <select name="gender" id="">
            <option value="1">女性</option>
            <option value="2">男性</option>
            <option value="3">混合</option>
        </select>
        <input type="text" name="age" placeholder="20代～30代" required>
        <input type="submit" value="投稿">
    </form>

</div>
<footer>
    <p>Heelturn.llc</p>
</footer>


</body>
</html>