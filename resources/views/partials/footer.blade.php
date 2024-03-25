<footer>
    <section class="footer-jumbo d-flex justify-content-around">
        <div class="left">
        <ul>
            <h3>DC COMICS</h3>
            <li>
                <a href="{{ route('characters')}}">Characters</a>
            </li>
            <li>
                <a href="{{ route('home')}}">Comics</a>
            </li>
            <li>
                <a href="{{ route('movies')}}">Movies</a>
            </li>
            <li>
                <a href="{{ route('tv')}}">TV</a>
            </li>
            <li>
                <a href="{{ route('games')}}">Games</a>
            </li>
            <li>
                <a href="{{ route('videos')}}">Videos</a>
            </li>
            <li>
                <a href="{{ route('news')}}">News</a>
            </li>
            <h3 class="my-2">SHOP</h3>
            <li>
                <a href="{{ route('shop')}}">Shop DC</a>
            </li>
            <li>
                <a href="{{ route('collectibles')}}">Shop DC Collectibles</a>
            </li>
        </ul>
        <ul>
            <h3>DC</h3>
            <li>
                <a href="#">Terms Of Use</a>
            </li>
            <li>
                <a href="#">Privacy policy (New)</a>
            </li>
            <li>
                <a href="#">Ad Choices</a>
            </li>
            <li>
                <a href="#">Advertising</a>
            </li>
            <li>
                <a href="#">Jobs</a>
            </li>
            <li>
                <a href="#">Subscriptions</a>
            </li>
            <li>
                <a href="#">Talent Workshops</a>
            </li>
            <li>
                <a href="#">CPSC Certificates</a>
            </li>
            <li>
                <a href="#">Ratings</a>
            </li>
            <li>
                <a href="{{ route('shop')}}">Shop Help</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
        </ul>
        <ul>
            <h3>SITES</h3>
            <li>
                <a href="#">DC</a>
            </li>
            <li>
                <a href="#">MAD Magazine</a>
            </li>
            <li>
                <a href="#">DC Kids</a>
            </li>
            <li>
                <a href="#">DC Universe</a>
            </li>
            <li>
                <a href="#">DC Power Visa</a>
            </li>
        </ul>
        </div>
        <div class="right">
            <div class="logo-footer">
                <img src="{{ Vite::asset('/resources/images/dc-logo-bg.png')}}" alt="logo">
            </div>
        </div>
    </section>
    <section class="social d-flex justify-content-around">
        <button>SIGN-UP NOW!</button>
        <div class="d-flex align-items-center gap-3">
            <h3>FOLLOW US</h3>
            <div>
                <img src="{{ Vite::asset('/resources/images/footer-facebook.png')}}" alt="facebook">
            </div>
            <div>
                <img src="{{ Vite::asset('/resources/images/footer-twitter.png')}}" alt="twitter">
            </div>
            <div>
                <img src="{{ Vite::asset('/resources/images/footer-youtube.png')}}" alt="youtube">
            </div>
            <div>
                <img src="{{ Vite::asset('/resources/images/footer-pinterest.png')}}" alt="pinterest">
            </div>
            <div>
                <img src="{{ Vite::asset('/resources/images/footer-periscope.png')}}" alt="periscope">
            </div>
        </div>
    </section>
</footer>