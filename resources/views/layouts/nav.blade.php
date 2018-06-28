<div class="top-nav">
    <div class="row align-items-center">
        <div class="col-md-auto">
            <div class="logo">
                <img src="/image/logo.svg" alt="laravel logo">
            </div>
        </div>
        <div class="header-logo">
            <a class="active-color "  href="/">First Blog</a>
        </div>
        <div class="login">
            @if (Route::has('login'))
            @auth
                <a class="active-color" href="{{ url('/home') }}">{{auth()->user()->name}}</a>
            @else
                <a class="active-color" href="{{ route('login') }}">Sign in &nbsp;</a>
                <a class="active-color" href="{{ route('register') }}">Sign up</a>
            @endauth
            @endif
        </div>
    </div>
    <div class="row ">
        <ul class="top-nav_menu">
            <li>Technology</li>
            <li>Design</li>
            <li>Culture</li>
            <li>Business</li>
            <li>Politics</li>
            <li>Opinion</li>
            <li>Health</li>
            <li>Style</li>
            <li>Travel</li>
            <li>Science</li>
        </ul>
    </div>

</div>