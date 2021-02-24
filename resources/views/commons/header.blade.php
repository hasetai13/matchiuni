{{--<header class="sticky-top">--}}
{{--    <div class="container">--}}
{{--        <div class="navbar-brand">--}}
{{--            <a href="/">--}}
{{--                <img src="/img/1_Primary_logo_on_transparent_100x23.png" alt="">--}}
{{--            </a>--}}
{{--        </div>--}}
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
{{--    <!-- Basic dropdown -->--}}
{{--        <div class="dropdown">--}}
{{--            <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                メニュー--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                <a class="dropdown-item" href="/login">ログイン</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Basic dropdown -->--}}
{{--        @if (Auth::check())--}}
{{--            <!-- Basic dropdown -->--}}
{{--                <div class="dropdown">--}}
{{--                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        マイページ--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                        <a class="dropdown-item" href="#">アカウント</a>--}}
{{--                        <a class="dropdown-item" href="#">自分の投稿</a>--}}
{{--                        <a class="dropdown-item" href="#">お気に入り</a>--}}
{{--                        <a class="dropdown-item" href="/logout">ログアウト</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Basic dropdown -->--}}
{{--        @else--}}
{{--            <div>--}}
{{--                <a href="/login">--}}
{{--                    ログイン--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--</header>--}}



<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="/">
                <img
                        src="/img/1_Primary_logo_on_transparent_100x23.png"
                        height="20"
                        alt=""
                        loading="lazy"
                        style="margin-top: 2px;"
                />
            </a>
        </div>
        <!-- Left elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
{{--            <li class="nav-item me-3 me-lg-1">--}}
{{--                <a class="nav-link d-sm-flex align-items-sm-center" href="#">--}}
{{--                    <img--}}
{{--                            src="https://mdbootstrap.com/img/new/avatars/1.jpg"--}}
{{--                            class="rounded-circle"--}}
{{--                            height="22"--}}
{{--                            alt=""--}}
{{--                            loading="lazy"--}}
{{--                    />--}}
{{--                    <strong class="d-none d-sm-block ms-1">John</strong>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item me-4 me-lg-1 text-center">
                <a
                        class="nav-link d-flex flex-column"
                        href="/search"
                >
                    <i class="fas fa-search fa-lg"></i>
                    <span class="" style="padding-top:0.3rem; font-size: 0.3rem"> 検索</span>
                </a>
            </li>
            <li class="nav-item me-4 me-lg-1 text-center">
                <a
                        class="nav-link d-flex flex-column"
                        href="/posts/create"
                >
                    <i class="fas fa-pen fa-lg"></i>
                    <span class="" style="padding-top:0.3rem; font-size: 0.3rem"> 投稿</span>
                </a>
            </li>
            <li class="nav-item me-1 me-lg-1 text-center">
                <a
                        class="nav-link d-flex flex-column"
                        href="/posts/create"
                >
                    <i class="fas fa-sign-in-alt fa-lg"></i>
                    <span class="" style="padding-top:0.3rem; font-size: 0.3rem"> ログイン</span>
                </a>
            </li>
        </ul>
        <!-- Right elements -->
    </div>
</nav>
<!-- Navbar -->