@extends('layouts.app')


@section('content')
    @include('espaceadminport')

    <h1>Gestion des utilisateurs</h1>

    <table>
        <tr>
                <td>Nom </td>
                <td>email </td>
                <td>Mot de passe </td>
                <td>Modifier </td>
                <td>Supprimer </td>
            </tr>
        @foreach($utilisateurs as $users)
        	<tr>
            	<td>{{ $users->name }} </td>
            	<td>{{ $users->email }} </td>
            	<td>{{ $users->password }} </td>
            </tr>
        @endforeach
    
	</table>
@endsection