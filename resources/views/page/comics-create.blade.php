@extends('layout.app')

@section('main-content')
    <section>
        <div class="container">
            <h1 class="text-light text-center">Crea nuovo fumetto</h1>
            <form action="{{ route('comics.store')}}" method="POST">
                @csrf 
                <div class="col-6">
                    <label for="title" class="form-label text-light">Title</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="col-6">
                    <label for="description" class="form-label text-light">Description</label>
                    <input class="form-control" type="text" id="description" name="description">
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label text-light">Thumbnail</label>
                    <input class="form-control" type="text" id="thumb" name="thumb">
                </div>
                <div class="col-6">
                    <label for="price" class="form-label text-light">Price</label>
                    <input class="form-control" type="text" id="price" name="price">
                </div>
                <div class="col-6">
                    <label for="series" class="form-label text-light">Series</label>
                    <input class="form-control" type="text" id="series" name="series">
                </div>
                <div class="col-6">
                    <label for="sale_date" class="form-label text-light">Sale Date</label>
                    <input class="form-control" type="date" id="sale_date" name="sale_date">
                </div>
                <div class="col-6">
                    <label for="type" class="form-label text-light">Type</label>
                    <input class="form-control" type="text" id="type" name="type">
                </div>
                <div class="col-3 my-5">
                    <button class="btn btn-success">Invia</button>
                </div>
            </form>
       
        </div>
    </section>
@endsection

