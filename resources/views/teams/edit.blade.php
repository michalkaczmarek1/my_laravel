@extends('master')
@section('content')

	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="card">
	            <div class="edit col-md-12">

	            <h2>Edytuj wpis</h2>
	            <!-- Formularz -->

	            		{!! Form::model($team, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['TeamsController@update', $team->id]]) !!}

	                      @include('teams.form_errors');
	                      @include('teams.form', ['buttonText'=>'Zapisz zmiany']);

	                    {!! Form::close() !!}
	            </div>
	        </div>
	    </div>
	</div>

@stop
