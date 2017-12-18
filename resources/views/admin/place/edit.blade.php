@extends('admin.template')
@extends('layouts.app')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Attribution d'une place</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::model($place, ['route' => ['place.update', $place->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('nomplace') ? 'has-error' : '' !!}">
						{!! Form::text('nomplace', null, ['class' => 'form-control', 'placeholder' => 'Nom de la place']) !!}
						{!! $errors->first('nomplace', '<small class="help-block">:message</small>') !!}
					</div>

					<div class="form-group {!! $errors->has('idutilisateur') ? 'has-error' : '' !!}">
					  	<select name="user" id="user" class="form-control">
					  		<option value="" selected="selected"></option>
						  	@foreach($users as $user)
						  		<option label="">{{ $user->id }}</option>
						  	@endforeach
						</select>
					  		
					</div>
						{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection