@extends('master')
@section('content')

	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
            <div class="create-team col-md-12">


            <h2>Dodaj drużynę</h2>
            <!-- Formularz -->
            	
            		{!! Form::open(['url'=>'teams','class'=>'form-horizontal']) !!}
            		
                       @include('teams.form_errors');
                       @include('teams.form', ['buttonText'=>'Dodaj artykuł']);

                    {!! Form::close() !!}
            </div>
        </div>
	</div>

@stop
