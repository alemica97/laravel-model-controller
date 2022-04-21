@extends('layouts.app')

@section('pageTitle','Movies')

@section('mainContent')
    <div class="container">
        <div class="cards-wrapper">
            @foreach ($movies as $movie)
            {{-- @dump($movie->title) --}}
            <div class="card">
                <h1>{{ $movie->title }}</h1>
                <h4>{{ $movie->original_title }}</h4>
            </div>
            @endforeach
        </div>
    </div>
@endsection