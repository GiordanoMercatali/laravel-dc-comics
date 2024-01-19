@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Comics</h1>
        <div class="text-end">
          <a class="btn btn-primary" href="{{ route('comics.create') }}">Create comic</a>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Sale date</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>
                      <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Info</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection