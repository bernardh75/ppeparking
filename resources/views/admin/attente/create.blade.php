@extends('admin.template')
@extends('layouts.app')

@section('contenu')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Confirmation de réservation</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::open(['route' => 'attente.store', 'class' => 'form-horizontal panel']) !!}	
					<div class="form-group {!! $errors->has('idutilisateur') ? 'has-error' : '' !!}">
					  	<select name="user" id="user" class="form-control" style="display:none;">					  		
						  		<option label="" >{{ $user = Auth::user()->id }}</option>
						</select>
					</div>
					<div> Voulez vous résevrer une place de parking ? </div>
					{!! Form::submit('Confirmer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection