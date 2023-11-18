@extends('layouts.main')

@section('title', 'Bicycle')

@section('content')
    <body>
        <header>
            <h1><img src="images/img/logo.svg"></h1>
            <nav>
                <ul>
                    <li>About</li>
                    <li>Bycycle</li>
                </ul>
            </nav>
        </header>
        <main>
            <div id="mainvisual"><img src="images/img/mainvisual.jpg"></div>
            <section id="about">
                <h2>About</h2>
                <div>
                    <img src="images/img/about.jpg">
                    <h3>KAKERU MIYAICHI</h3>
                    <p>テキストテキストテキスト</p>
                </div>
            </section>
            <section id="bicycle">
                <h2>Bicycle</h2>
                <ul>
                    <li><img src="images/img/bicycle1.jpg"><h3>タイトルタイトル</h3><p>テキストテキスト</p></li>
                    <li><img src="images/img/bicycle1.jpg"><h3>タイトルタイトル</h3><p>テキストテキスト</p></li>
                    <li><img src="images/img/bicycle1.jpg"><h3>タイトルタイトル</h3><p>テキストテキスト</p></li>
                </ul>
            </section>
        </main>
        <footer></footer>
    </body>
@endsection
