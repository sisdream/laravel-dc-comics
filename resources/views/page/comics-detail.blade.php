@extends('layout.app')

@section('main-content')
<main>
    <span class="fumetti py-3 px-3">CURRENT SERIES</span>
    <div class="row">
        <h2 class="mt-5 text-uppercase text-light">{{$comic['title']}}</h2>
        <div class="d-flex my-3 gap-5">
            <div class="card-comic-img">
                <img src="{{$comic['thumb']}}" alt="fumetto">
            </div>
            <p class="text-light d-flex align-items-center">{{$comic['description']}}</p>
        </div>
        <div class="text-light d-flex gap-5 align-items-center justify-content-center" >
             <div>Price: {{$comic['price']}}</div>
             <div>Series: {{$comic['series']}}</div>
             <div>Sale Date: {{$comic['sale_date']}}</div>
             <div>Type: {{$comic['type']}}</div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-3">
        <button class="btn btn-primary rounded-0 custom-btn">
            <a class="text-light" href="{{route('comics.edit', $comic['id'])}}">Modifica</a>
        </button>
    </div>
</main>
@endsection
