@extends('layout.base')

@section('title')
    Movies
@endsection

@section('page-content')
    <main>
        <div class="container">
            <h1>I film del momento</h1>
                @foreach ($movies as $movie)
                    <div>
                        <img style="height: 300px;" src="{{asset($movie['image'])}}" alt="{{$movie['title']}}">
                        <h2>Titolo: {{$movie['title']}}</h2>
                        <h4>Titolo originale: {{$movie['original_title']}}</h4>
                        <span>Nazionalità: {{$movie['nationality']}}</span> <br>
                        <span>Data uscita: {{$movie['date']}}</span> <br>
                        <span>Voto: {{$movie['vote']}}</span>
                        <hr>
                    </div>
                @endforeach
        </div>
    </main>
@endsection