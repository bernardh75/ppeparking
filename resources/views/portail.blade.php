<?php

include '/var/www/html/Parking/resources/views/entete.html';

?>
<html>
<body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Parking M2L
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Connexion</a>
                    <a href="https://laracasts.com">Inscription</a>
                    <a href="https://laravel-news.com">Mode admin</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
