<header class="sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a href="/">
                <img src="/img/1_Primary_logo_on_transparent_100x23.png" alt="">
            </a>
        </div>
        <div>
            <a href="/search/">
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg>--}}
                探す
            </a>
        </div>
        <div>
            <a href="/posts/create">
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.363 8.464l1.433 1.431-12.67 12.669-7.125 1.436 1.439-7.127 12.665-12.668 1.431 1.431-12.255 12.224-.726 3.584 3.584-.723 12.224-12.257zm-.056-8.464l-2.815 2.817 5.691 5.692 2.817-2.821-5.693-5.688zm-12.318 18.718l11.313-11.316-.705-.707-11.313 11.314.705.709z"/></svg>--}}
                作る
            </a>
        </div>
        @if (Auth::check())
            <!-- Basic dropdown -->
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        マイページ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
{{--                        <a class="dropdown-item" href="#">アカウント</a>--}}
                        <a class="dropdown-item" href="#">自分の投稿</a>
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