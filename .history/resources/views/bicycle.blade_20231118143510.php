@extends('layouts.main')

@section('title', 'bicycle')

@section('content')
    <header id="header">
        <h1 id="site-title"><a href="{{ route('profile') }}"><img src="img/logo.svg"></a></h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#bicycle">Bicycle</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="mainvisual" class="wrapper">
            <img src="img/mainvisual.jpg">
        </div>

        <section id="about" class="wrapper">
            <h2 id="about">About</h2>
            <div class="content">
                <img src="img/about.jpg">
                <div class="text">
                    <h3 class="content-title">KAKERU MIYACHI</h3>
                    <p>テキストテキスト</p>
                </div>
            </div>
        </section>

        <section id="bicycle" class="wrapper">
            <ul>
                <li><img src="img/bicycle1.jpg"><h3 class="content-title">タイトルタイトル</h3><p>テキストテキスト</p></li>
                <li><img src="img/bicycle1.jpg"><h3 class="content-title">タイトルタイトル</h3><p>テキストテキスト</p></li>
                <li><img src="img/bicycle1.jpg"><h3 class="content-title">タイトルタイトル</h3><p>テキストテキスト</p></li>
                
            </ul>
        </section>

    </main>

    <footer id="footer">
        <p>&copy; 2023 Profile</p>
    </footer>

@endsection
