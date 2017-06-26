@extends('master')
@section('content')

	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="card">
	            <div class="create-player col-md-12">

	            <h2>Dodaj zawodnika</h2>
	            <!-- Formularz -->
	            		
	            		{!! Form::open(['url'=>'players','class'=>'form-horizontal']) !!}
	                       
	                       @include('players.form_errors')
	                       @include('players.form', ['buttonText'=>'Dodaj artykuł'])

	                    {!! Form::close() !!}
	            </div>
	        </div>
	    </div>
	</div>

@stop
