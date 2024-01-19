@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">New Comic</h1>

        <div class="row justify-content-between align-items-center">
            <div class="col-6">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    
                    <div class="m-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="m-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>

                    <div class="m-2">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="m-2">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="m-2">
                        <label for="sale_date" class="form-label">Peso</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="m-2">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                    <div class="m-2">
                        <label for="price" class="form-label">Prices</label>
                        <textarea class="form-control" id="price" rows="3" name="price"></textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Salva</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection