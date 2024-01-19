@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit {{ $comic->title }} info</h1>

        <div class="row justify-content-between align-items-center">
            <div class="col-6">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="m-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                    </div>

                    <div class="m-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description" value="{{$comic->description}}"></textarea>
                    </div>

                    <div class="m-2">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                    </div>

                    <div class="m-2">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                    </div>

                    <div class="m-2">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                    </div>

                    <div class="m-2">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                    </div>

                    <div class="m-2">
                        <label for="type" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                    </div>

                    <a class="btn btn-danger" href="{{ route('comics.index') }}">Back</a>
                    <button class="btn btn-success" type="submit">Save</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection