@extends('app')

@section('title', '?ManuTech')

@include('nav')

@section('content')
    <div class="container">
        @foreach($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection
