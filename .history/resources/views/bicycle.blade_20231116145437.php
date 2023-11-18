@extends('layouts.main')

@section('title', 'Bicycle')

@section('content')

    <body>
        <header id="header" class="wrapper">
            <h1 class="site-title"><a href="bicycle.blade.php"><img src="images/img/logo.svg" alt="Profile"></a></h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#bicycle">Bicycle</a></li>
                </ul>
            </nav>
        </header>

        <main>

            <div id="mainvisual"><img src="images/img/mainvisual.jpg"></div>

            <section id="about" class="wrapper">
                <h2 class="section-title">About</h2>
                <div class="content">
                    <img src="images/img/about.jpg">
                    <div class="text">
                        <h3 class="content-title">KAKERU MIYAICHI</h3>
                        <p>テキストテキストテキスト</p>
                    </div>
                </div>
            </section>
            
            <section id="bicycle">
                <h2>Bicycle</h2>
                <ul>
                    <li><img src="images/img/bicycle1.jpg">
                        <h3>タイトルタイトル</h3>
                        <p>テキストテキスト</p>
                    </li>
                    <li><img src="images/img/bicycle2.jpg">
                        <h3>タイトルタイトル</h3>
                        <p>テキストテキスト</p>
                    </li>
                    <li><img src="images/img/bicycle3.jpg">
                        <h3>タイトルタイトル</h3>
                        <p>テキストテキスト</p>
                    </li>
                </ul>
            </section>
        </main>
        <footer></footer>
    </body>
@endsection
