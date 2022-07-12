@extends('layout.base')

@section('title')
    Movie
@endsection

@section('page-content')
    <main>
        <div class="container">
            <h1>Film selezionato</h1>
            <div>
                <img style="height: 300px;" src="{{asset($movie['image'])}}" alt="{{$movie['title']}}">
                <h2>Titolo: {{$movie['title']}}</h2>
                <h4>Titolo originale: {{$movie['original_title']}}</h4>
                <span>Nazionalità: {{$movie['nationality']}}</span> <br>
                <span>Data uscita: {{$movie['date']}}</span> <br>
                <span>Voto: {{$movie['vote']}}</span>
            </div>
        </div>
    </main>
@endsection