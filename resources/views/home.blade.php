@extends('layouts.app')

@section('content')
    <h1 class="text-center">Film</h1>
    <div class="container">
        <div class="row g-3">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card text-white">
                        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h4>Titolo:{{ $movie->title }}</h4>
                            <h5>Titolo originale:{{ $movie->original_title }}</h5>
                            <p>Data di uscita:{{ $movie->date }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
