@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Comics</h1>
        <div class="text-end">
          <a class="btn btn-primary" href="{{ route('comics.create') }}">Add comic</a>
        </div>

        <ul>
            @foreach ($comics as $comic)
            <li>
                <span>{{$comic->id}}</span>
                <span>{{$comic->title}}</span>
                <span>{{$comic->series}}</span>
                <span>{{$comic->price}}</span>
                <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
            </li>
            @endforeach
        </ul>
        
    </div>
@endsection