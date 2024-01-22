@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit {{ $comic->title }} info</h1>

        <div class="row justify-content-between align-items-center">
            <div class="col-6">

                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
                @endif

                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="m-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
                    </div>

                    <div class="m-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"> {{old('title', $comic->description)}} </textarea>
                    </div>

                    <div class="m-2">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('title', $comic->thumb)}}">
                    </div>

                    <div class="m-2">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{old('title', $comic->series)}}">
                    </div>

                    <div class="m-2">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('title', $comic->sale_date)}}">
                    </div>

                    <div class="m-2">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{old('title', $comic->type)}}">
                    </div>

                    <div class="m-2">
                        <label for="type" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('title', $comic->price)}}">
                    </div>

                    <a class="btn btn-danger" href="{{ route('comics.index') }}">Back</a>
                    <button class="btn btn-success" type="submit">Save</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection