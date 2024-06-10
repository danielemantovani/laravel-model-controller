@extends('layouts.app')

@section('content')
    <h1 class="text-center">Film</h1>
    <div class="container">
        <div class="row-col-3">
            <div class="col-3">
                @foreach ($movies as $movie)
                    <div class="card">
                        <img src="{{$movie->image}}" alt="{{$movie->title}}">
                        <div class="card-body">
                            <h4>Titolo:{{$movie->title}}</h4>
                            <h5>Titolo originale:{{$movie->original_title}}</h5>
                            <p>Data di uscita:{{$movie->date}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
