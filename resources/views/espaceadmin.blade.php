@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="links">
                    <a href="https://laravel.com/docs">Réserver</a>             
                    <a href="https://laravel-news.com">Mon compte</a>

                    <a href="https://laravel.com/docs">Administration</a>             
                    
                    
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

