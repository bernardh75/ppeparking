
@extends('admin.template')
@extends('layouts.app')

@section('contenu')
    @include('espaceadminport')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des places</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Occupation</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($places as $place)
                        <tr>
                            <td>{!! $place->id !!}</td>
                            <td class="text-primary"><strong>{!! $place->nomplace !!}</strong></td>
                            <td>{!! $place->idutilisateurplace !!}</td>
                            <td>{!! link_to_route('place.show', 'Voir', [$place->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                            <td>{!! link_to_route('place.edit', 'Modifier', [$place->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['place.destroy', $place->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette place ?\')']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! link_to_route('place.create', 'Ajouter une place', [], ['class' => 'btn btn-info pull-right']) !!}
        {!! $links !!}
    </div>
@endsection
