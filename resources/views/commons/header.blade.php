<header class="sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a href="/">
                <img src="/img/1_Primary_logo_on_transparent_100x23.png" alt="">
            </a>
        </div>
{{--        <div>--}}
{{--            <a href="/search/">--}}
{{--                探す--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <a href="/posts/create">--}}
{{--                作る--}}
{{--            </a>--}}
{{--        </div>--}}
    <!-- Basic dropdown -->
{{--        <div class="dropdown">--}}
{{--            <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                メニュー--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                <a class="dropdown-item" href="/login">ログイン</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Basic dropdown -->
        @if (Auth::check())
            <!-- Basic dropdown -->
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        マイページ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
{{--                        <a class="dropdown-item" href="#">アカウント</a>--}}
{{--                        <a class="dropdown-item" href="#">自分の投稿</a>--}}
{{--                        <a class="dropdown-item" href="#">お気に入り</a>--}}
                        <a class="dropdown-item" href="/logout">ログアウト</a>
                    </div>
                </div>
                <!-- Basic dropdown -->
        @else
            <div>
                <a href="/login">
                    ログイン
                </a>
            </div>
        @endif
    </div>
</header>