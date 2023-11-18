<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header class="wrapper" id="header">
        <div>
            <h1 class="site-title"><a href="{{ route('profile') }}"><img src="images/img/logo.svg"></a></h1>
        </div>
        <nav>
            <ul>
                <li>About</li>
                <li>Bicycle</li>
            </ul>
        </nav>
    </header>
    <main class="wrapper" id="main">
        <section id="mainvisual"><img src="images/img/mainvisual.jpg"></section>
        <section id="about">
            <h2 class="section-title"><a href="#about">About</a></h2>
            <img src="images/img/about.jpg">
            <h3 class="content-title">KAKERU MIYAICH</h3>
            <p class="content-body">テキストテキスト</p>
        </section>
        <section id="bicycle">
            <h2>Bicycle</h2>
            <div class="bicycle-content">
                <ul>
                    <li><img src="images/img/bicycle1.jpg"><h3>タイトルタイトル</h3><p>テキストテキスト</p></li>
                    <li><img src="images/img/bicycle2.jpg"><h3>タイトルタイトル</h3><p>テキストテキスト</p></li>
                    <li><img src="images/img/bicycle3.jpg"><h3>タイトルタイトル</h3><p>テキストテキスト</p></li>
                </ul>
            </div>
        </section>
    </main>
    <footer id="footer">
        <p></p>
    </footer>
</body>

</html>
