<header>
   <section class="dc-power"></section>
   <section class="nav-bar">
        <nav class="py-2">
            <div class="logo">
                <img src="{{ Vite::asset('/resources/images/dc-logo.png')}}" alt="logo">
            </div>
            <ul class="my-0">
                <li>
                    <a  @if(Route::currentRouteName() == 'characters') class="active" @endif href="{{ route('characters')}}">CHARACTERS</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'home') class="active" @endif href="{{ route('home')}}">COMICS</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'movies') class="active" @endif href="{{ route('movies')}}">MOVIES</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'tv') class="active" @endif href="{{ route('tv')}}">TV</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'games') class="active" @endif href="{{ route('games')}}">GAMES</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'collectibles') class="active" @endif href="{{ route('collectibles')}}">COLLECTIBLES</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'videos') class="active" @endif href="{{ route('videos')}}">VIDEOS</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'fans') class="active" @endif href="{{ route('fans')}}">FANS</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'news') class="active" @endif href="{{ route('news')}}">NEWS</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'shop') class="active" @endif href="{{ route('shop')}}">SHOP</a>
                    <i class="fa-solid fa-caret-down"></i>
                </li>
            </ul>
        </nav>
    </section>
    <section class="jumbotron">
        <img src="{{ Vite::asset('/resources/images/jumbotron.jpg')}}" alt="jumbotron">
    </section>
</header>