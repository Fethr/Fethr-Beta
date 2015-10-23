<div class="nav-container bg-white" role="navigation">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{asset('assets/default/img/placeholders/logo-color.png')}}" alt="logo" data-src="#" data-src-retina="#" width="150" height="60">
            </a>
        </div>
        <p class="p-t-35 bold">A Social Network for Web Developers &amp; Designers.</p>
        <p class="p-t-10 justify">Fethr is an online platform that allows users to share information relating to Web Development &amp; Web Design. The smooth elegant and clean design will bring a friendly user experience. Enjoy updating profile content, sharing posts, adding friends, and liking post that are most relevant to the user.</p>
        <p class="justify">An beta testing online web app built using Laravel, Homestead, Bootstrap, PHP, HTML, CSS, and much view site resources below.!</p>
        <div class="">
            @if (Auth::check())
                <ul class="">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friends</a></li>
                </ul>
                <form class="" role="search" action="{{ route('search.results') }}">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Find People">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            @endif
            <ul class="">
                @if (Auth::check())
                    <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a></li>
                    <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>
                    <li><a href="{{ route('auth.signout') }}">Sign Out</a></li>
                @else
                    <li><a href="{{ route('auth.signup') }}">Register</a></li>
                    <li><a href="{{ route('auth.signin') }}">Login</a></li>
                @endif
            </ul>
        </div>
        @include('templates.partials.alerts')
    </div>
</div>

<!-- <div class="login-container bg-white">
                <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30">
                    <img src="{{asset('assets/default/img/placeholders/logo-color.png')}}" alt="logo" data-src="#" data-src-retina="#" width="150" height="60">
                    <p class="p-t-35 bold">A Social Network for Web Developers &amp; Designers.</p>
                    <p class="p-t-10 justify">Fethr is an online platform that allows users to share information relating to Web Development &amp; Web Design. The smooth elegant and clean design will bring a friendly user experience. Enjoy updating profile content, sharing posts, adding friends, and liking post that are most relevant to the user.</p>
                    <p class="justify">An beta testing online web app built using Laravel, Homestead, Bootstrap, PHP, HTML, CSS, and much view site resources below.!</p>
                    <div class="m-t-50">
                        <a href="{{ route('auth.signin') }}">
                            <button class="btn btn-default">Login</button>
                        </a>
                        <a href="{{ route('auth.signup') }}">
                            <button class="btn btn-default">Register</button>
                        </a>
                    </div>
                </div>
            </div> -->

 <!--<div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Fethr</a>
        </div>
        <div class="collapse navbar-collapse">
            @if (Auth::check())
                <ul class="nav navbar-nav">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friends</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Find People">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            @endif
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a></li>
                    <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>
                    <li><a href="{{ route('auth.signout') }}">Sign Out</a></li>
                @else
                    <li><a href="{{ route('auth.signup') }}">Register</a></li>
                    <li><a href="{{ route('auth.signin') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>-->