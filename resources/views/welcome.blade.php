<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                @if (Route::has('login'))

                <div class="title m-b-md">
                    NEWS UPDATE
                </div>
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">NU</a>
                        <a href="{{ url('/profile') }}">Profile</a>
                        <a href="{{ url('/post') }}">Add Post</a>
                        <a href="{{ url('/category') }}">Category</a>
                        <a href="{{ url('/timeline') }}">Timeline</a>
                        <a href="{{ url('/contact_us') }}">Contact us</a>
                        <a href="{{ url('/download') }}">Download</a>
                        <a href="{{ url('/settings') }}">Settings</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <div class="mt-5 text_style alert" role="alert">
                            {{ Auth::user()->name }} is now logged in!
                        </div>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </body>
</html>
