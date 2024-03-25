@extends('layout.app')



@section('main-content')
<main>
    <span class="fumetti py-2 px-3">CURRENT SERIES</span>
    <div class="row">
        <div class="comic w-25">
            <h2 class="mt-2 text-uppercase">{{$comic['title']}}</h2>
            <div class="card-img">
                <img src="{{$comic['thumb']}}" alt="fumetto">
            </div>
            <p>{{$comic['description']}}</p>

        </div>
    </div>
    <div class="d-flex justify-content-center my-3">
        <button class="btn btn-primary rounded-0 custom-btn">LOAD MORE</button>
    </div>
</main>
@endsection