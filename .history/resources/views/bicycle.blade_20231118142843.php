@extends('layouts.main')

@section('title', 'bicycle')

@section('content')
    <header id="header">
        <h1 id="site-title"><a href="{{ route('profile') }}"><img src="img/logo.svg"></a></h1>
        <nav>
            <ul>
                <li><a href="#About">About</a></li>
                <li><a href="#Bicycle">Bicycle</a></li>
            </ul>
        </nav>
    </header>

    <main>
        
    </main>

    <footer id="footer">
        <p>&copy; 2023 Profile</p>
    </footer>

@endsection
