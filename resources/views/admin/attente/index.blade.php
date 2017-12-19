@extends('admin.template')
@extends('layouts.app')


@section('content')
    @include('espaceadminport')
    <br>
    
    <div class="col-sm-offset-4 col-sm-4">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        @if (Auth::user()->Droitsadmin == 1)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">File d'attente</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id de l'utilisateur</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attentes as $attente)
                        <tr>
                            <td>{!! $attente->id !!}</td>
                            <td>{!! $attente->idutilisateurattente !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['attente.destroy', $attente->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur de la file ?\')']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        {!! $links !!}
    </div>
@endsection
