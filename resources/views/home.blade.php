@extends('templates.default')

@section ('content')
<div class="wrapper">
    <div class="bg-pic">
        
        <img src="{{asset('assets/default/img/home-bg.jpg')}}" data-src="#" data-src-retina="#" alt="" class="lazy">
            
        <div class="p-b-30 p-r-50 m-r-20 m-l-20 pull-bottom ai-logo">
            <img src="{{asset('assets/default/img/placeholders/ai-logo-lite.png')}}" alt="logo" data-src="#" data-src-retina="#" width="46" height="34">
            <p class="copyright">Copyright &copy; Fethr 2015. All Rights Reserved. <br>Created by Barry-Alan MacRae. The Art Institute of Pittsburgh - Online Student.</p>
        </div>
        
    </div>
</div>
@stop

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