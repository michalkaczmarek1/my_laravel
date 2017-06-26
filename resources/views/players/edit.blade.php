@extends('master')
@section('content')

	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="card">
	            <div class="edit col-md-12">

	            <h2>Edytuj wpis</h2>
	            <!-- Formularz -->
	            
	            		{!! Form::model($player, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['PlayersController@update', $player->id]]) !!}

	                       @include('players.form_errors')
	                       @include('players.form', ['buttonText'=>'Zapisz zmiany'])
	                       
	                    {!! Form::close() !!}
	            </div>
	        </div>
	    </div>
	</div>

@stop
