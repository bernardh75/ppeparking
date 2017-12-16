@extends('layouts.app')


@section('content')
    @include('espaceadminport')

    <h1>Gestion des places</h1>

    <table>
        <tr>
                <td>Numéro de place </td>
                <td>Attribution </td>
                <td>Modifier </td>
                <td>Supprimer </td>
            </tr>
        @foreach($places as $places)
        	<tr>
            	<td>{{ $places->id }} </td>
            	<td>{{ $places->nomplace }} </td>
            </tr>
        @endforeach
    
	</table>
@endsection