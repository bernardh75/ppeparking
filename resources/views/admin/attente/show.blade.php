@extends('admin.template')
@extends('layouts.app')


@section('content')
    @include('espaceadminport')
    <br>
    
    <div class="col-sm-offset-4 col-sm-4">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Numéro de place : @foreach ($places as $place)
                        @if(Auth::user()->id == $place->idutilisateurplace)
                        
                            {!! $place->id !!}
                        
                        @endif
                         @endforeach</h3>
            </div>
        </div>
    </div>
@endsection