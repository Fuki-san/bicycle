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
            <h1><a href="{{ route('profile') }}"><img src="images/img/logo.svg"></a></h1>
        </div>
        <nav>
            <ul>
                <li>About</li>
                <li>Bicycle</li>
            </ul>
        </nav>
    </header>
    <main class="wrapper" id="main">
        <div><img src="images/img/mainvisual.jpg" alt=""></div>
    </main>
    <footer id="footer">
        <p></p>
    </footer>
</body>

</html>
