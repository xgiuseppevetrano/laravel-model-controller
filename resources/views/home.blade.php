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
                        <a href="{{route('movie', $movie['id'])}}">
                            <img style="height: 300px;" src="{{asset($movie['image'])}}" alt="{{$movie['title']}}">
                        </a>
                    </div>
                @endforeach
        </div>
    </main>
@endsection