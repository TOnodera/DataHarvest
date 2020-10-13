<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
        </head>
<body>
    <header>
        <nav class="pc">
            <div class="flex flex-space-between">
                <div class="nav-item">
                    <a href="#">
                        <img src="../assets/image/logo.png" alt="data harvest" class="logo">
                    </a>
                </div>
                <div class="flex flex-space-between nav-item">
                    <a href="#">
                        <div class="items">
                            <div><i class="fas fa-sitemap fa-2x main-color"></i></div>
                            <p>サイトマップ</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="items">
                            <div><i class="fas fa-question-circle fa-2x main-color"></i></div>
                            <p>このサイトについて</p>
                        </div>
                    </a>
                    <a href="/contact">
                        <div class="items">
                            <div><i class="fas fa-envelope-square fa-2x main-color"></i></div>
                            <p>コンタクト</p>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        <nav class="sp"></nav>
    </header>
    <div class="contents">
        <div class="main-contents">
            <div class="main">
                <div class="contents-container">
                    <div class="side-bar">
                        <div class="items">
                            <a href="">
                                <h3><i class="far fa-donate main-color"></i>経済</h3>
                            </a>
                            <a href="">
                                <p class="item">カテゴリ</p>
                            </a>
                            <a href="">
                                <p class="item">カテゴリ</p>
                            </a>
                        </div>
                        <div class="items">
                            <a href="">
                                <h3><i class="far fa-heart main-color"></i>生活</h3>
                            </a>
                            <a href="">
                                <p class="item">カテゴリ</p>
                            </a>
                            <a href="">
                                <p class="item">カテゴリ</p>
                            </a>
                        </div>                        
                    </div>
                    <div class="contents">
                        @yield('contents')
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer>
        <div class="flex flex-space-between footer-contents">
            <div>
                <ul class="footer-link-ul">
                    <li><i class="fas fa-home main-color mr5"></i>ホーム</li>
                    <li><i class="fas fa-sitemap main-color mr5"></i>サイトマップ</li>
                    <li><i class="fas fa-envelope-square main-color mr5"></i>コンタクト</li>
                </ul>
            </div>
            <div>
                <div><img src="../assets/image/logo.png" alt=""></div>
            </div>
        </div>
        <p class="copyright">@copyright 2020</p>
    </footer>
    <script src="../js/app.js"></script>
</body>
</html>