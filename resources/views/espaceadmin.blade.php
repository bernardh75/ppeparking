@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="links">
                    <ul>
                        <li><a href="https://laravel.com/docs">Réserver</a></li>             
                        <li><a href="https://laravel-news.com">Mon compte</a></li>
                    
                        <li><a href="https://laravel-news.com">Administration</a>
                             <ul>
                                <li><a href="https://laravel.com/docs">Gestion Utilisateurs</a></li>
                                <li><a href="https://laravel.com/docs">Gestion Places</a></li>    
                                <li><a href="https://laravel.com/docs"> Gestion Liste d'attente</a></li>          
                                <li><a href="https://laravel.com/docs">Historique des réservations</a></li>      
                            </ul>
                         </li>
                   </ul>
                   
                    
                    
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

