@extends('layouts.main')

@section('title', 'bicycle')

@section('content')
    <header id="header">
        <h1 id="site-title"><a href="{{ route('profile') }}"><img src="img/logo.svg"></a></h1>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#Bicycle"></a></li>
        </ul>
    </header>

    <main></main>
    <footer></footer>
@endsection
