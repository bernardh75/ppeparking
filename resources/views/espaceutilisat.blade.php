
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="links">
                    <li><a href="https://laravel.com/docs">Réserver</a></li>            
                    <li><{!! link_to_action('UserController@edit', 'Mon compte', ['id' => Auth::User()->id, 'class' => 'btn btn-warning btn-block']) !!}</li>
                    
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

