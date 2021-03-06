@extends('admin.template')
@extends('layouts.app')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Fiche d'utilisateur</div>
			<div class="panel-body"> 
				<p>Nom : {{ $user->name }}</p>
				<p>Email : {{ $user->email }}</p>
				<p>Mot de Passe : {{ $user->password }}</p>
				@if($user->Droitsadmin == 1)
					Administrateur
				@endif
				<p>Place occupée : {{ $user->idplaceutil }}</p>
				<p>Rang Liste d'attente : {{ $user->rangplaceattenteutil }}
			</div>
		</div>				
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection