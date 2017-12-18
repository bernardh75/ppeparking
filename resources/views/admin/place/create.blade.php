@extends('admin.template')
@extends('layouts.app')

@section('contenu')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Création d'une place</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::open(['route' => 'place.store', 'class' => 'form-horizontal panel']) !!}	
					<div class="form-group {!! $errors->has('nomplace') ? 'has-error' : '' !!}">
						{!! Form::text('nomplace', null, ['class' => 'form-control', 'placeholder' => 'Nom de la place']) !!}
						{!! $errors->first('nomplace', '<small class="help-block">:message</small>') !!}
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