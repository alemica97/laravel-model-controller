@extends('layouts.app')

@section('pageTitle','Movies')

@section('mainContent')

    <main>
        <div class="container">
            <div class="cards-wrapper">
                @foreach ($movies as $movie)
                {{-- @dump($movie->title) --}}
                <div class="card">
                    <h1>{{ $movie->title }}</h1>
                    <h4>{{ $movie->original_title }}</h4>
                    <div class="info">
                        <span class="nationality">{{ $movie->nationality }}</span>
                        <span class="date">{{ $movie->date }}</span>
                        <span class="vote">{{ $movie->vote }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    
@endsection