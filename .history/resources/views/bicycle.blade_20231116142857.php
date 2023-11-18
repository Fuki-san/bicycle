@extends('layouts.main')

@section('title', 'Bicycle')

@section('content')
    <body>
        <header>
            <h1></h1>
            <nav>
                <ul>
                    <li></li>
                    <li></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="mainvisual"></div>
            <section id="about"></section>
            @include('name')
        </main>
        <footer></footer>
    </body>
@endsection
