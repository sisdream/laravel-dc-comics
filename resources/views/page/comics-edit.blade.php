@extends('layout.app')

@section('main-content')
    <section>
        <div class="container">
            <h1 class="text-light text-center">Modifica fumetto</h1>
            <form action="{{ route('comics.update', $comic)}}" method="POST">
                @csrf 
                @method('PATCH')
                <div class="col-6">
                    <label for="title" class="form-label text-light">Title</label>
                    <input value="{{$comic['title']}}" class="form-control" type="text" id="title" name="title">
                </div>
                <div class="col-6">
                    <label for="description" class="form-label text-light">Description</label>
                    <input value="{{$comic['description']}}" class="form-control" type="text" id="description" name="description">
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label text-light">Thumbnail</label>
                    <input value="{{$comic['thumb']}}" class="form-control" type="text" id="thumb" name="thumb">
                </div>
                <div class="col-6">
                    <label for="price" class="form-label text-light">Price</label>
                    <input value="{{$comic['price']}}" class="form-control" type="text" id="price" name="price">
                </div>
                <div class="col-6">
                    <label for="series" class="form-label text-light">Series</label>
                    <input value="{{$comic['series']}}" class="form-control" type="text" id="series" name="series">
                </div>
                <div class="col-6">
                    <label for="sale_date" class="form-label text-light">Sale Date</label>
                    <input value="{{$comic['sale_date']}}" class="form-control" type="date" id="sale_date" name="sale_date">
                </div>
                <div class="col-6">
                    <label for="type" class="form-label text-light">Type</label>
                    <input value="{{$comic['type']}}" class="form-control" type="text" id="type" name="type">
                </div>
                <div class="col-3 my-5">
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
            </form>
        </div>
    </section>
@endsection
