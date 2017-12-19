@extends('admin.template')
@extends('layouts.app')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Fiche place</div>
			<div class="panel-body"> 
				<p>Nom : {{ $place->nomplace }}</p>
				<p>Occupation (ID personne) : id-{{ $place->idutilisateurplace }}</p>
			</div>
		</div>				
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection