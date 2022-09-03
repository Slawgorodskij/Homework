@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="performance">
            <h1 class="performance__title">{{$title}}</h1>
        </div>

        <div class="container">
            <p>При заходе на страницу создан был кеш.</p>
            <a class="button " href="{{route('two_page')}}">
                <span class="transition-button__text">Для перехода к просмотру созданного кеша </span>
            </a>
        </div>

    </main>

@endsection
