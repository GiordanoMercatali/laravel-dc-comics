@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <img class="w-25" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        <hr>
        <p>{{ $comic->description }}</p>

        <ul>
            <li>
                Series: {{ $comic->series }}
            </li>
            <li>
               Price: {{ $comic->price }}
            </li>
            <li>
                Sale Date: {{ $comic->sale_date }}
            </li>
            <li>
                Type: {{ $comic->type }}
            </li>
        </ul>
        <a class="btn btn-danger" href="{{ route('comics.index') }}">Back</a>
    </div>    
@endsection