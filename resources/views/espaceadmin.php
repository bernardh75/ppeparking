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
                    Parking M2L - Mode Administrateur
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Réserver</a>
                    <a href="https://laracasts.com">Consultation de la place</a>
                    <a href="https://laravel-news.com">Mon compte</a>
		    <a href="https://laravel-news.com">Administration</a>
<!--faire une liste déroulante -->
                    
                </div>
            </div>
        </div>
    </body>
</html>
