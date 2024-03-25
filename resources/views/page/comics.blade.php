@extends('layout.app')

@section('main-content')
<main>
    <span class="fumetti py-2 px-3">CURRENT SERIES</span>
    <div class="row pt-3 gx-3 gy-3 row-cols-6">
        @foreach($comics as $comic)
            <div class="comic">
                <div class="card-img">
                    <img src="{{$comic['thumb']}}" alt="fumetto">
                </div>
                <h3 class="mt-2 text-uppercase">{{$comic['title']}}</h3>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center my-3">
        <button class="btn btn-primary rounded-0 custom-btn">LOAD MORE</button>
    </div>
</main>
<div class="quick-links">
    <ul class="d-flex justify-content-between">
        <li class="quick-link">
            <div class="link-img">
                <img src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png')}}" alt="digital comics">
            </div>
            <div class="quick-link-text">
                <p class="mb-0">DIGITAL COMICS</p>
            </div>
        </li>
        <li class="quick-link">
            <div class="link-img">
                <img src="{{ Vite::asset('/resources/images/buy-comics-merchandise.png')}}" alt="merchandise">
            </div>
            <div class="quick-link-text">
                <p class="mb-0">DC MERCHANDISE</p>
            </div>
        </li>
        <li class="quick-link">
            <div class="link-img">
                <img src="{{ Vite::asset('/resources/images/buy-comics-subscriptions.png')}}" alt="subscriptions">
            </div>
            <div class="quick-link-text">
                <p class="mb-0">SUBSCRIPTIONS</p>
            </div>
        </li>
        <li class="quick-link">
            <div class="link-img">
                <img src="{{ Vite::asset('/resources/images/buy-comics-shop-locator.png')}}" alt="locator">
            </div>
            <div class="quick-link-text">
                <p class="mb-0">COMICS SHOP LOCATOR</p>
            </div>
        </li>
        <li class="quick-link">
            <div class="link-img">
                <img class="link-svg" src="{{ Vite::asset('/resources/images/buy-dc-power-visa.svg')}}" alt="power visa">
            </div>
            <div class="quick-link-text">
                <p class="mb-0">DC POWER VISA</p>
            </div>
        </li>
    </ul>
    {{ $comics->links('pagination::bootstrap-5') }}
</div>
@endsection
