@extends('master')
@section('content')

	<div class="video-show">
		<h2>{{ $team->name }}</h2>
		<p>{{ $team->description }}</p>
		<iframe width="680" height="480" src="{{ $team->embed }}?showinfo=0" frameborder="0"></iframe>
		<p>{{ $team->embed_desc }}</p>
		<div class="button-show">
			<a href="{{ action('TeamsController@edit', $team->id)}}" class="btn btn-success col-md-2">Edytuj</a><br>
			<a href="{{ action('TeamsController@index')}}" class="btn btn-primary col-md-2" id="button-edit">Powrót</a><br>
		</div>
		<h4 id="info-name">Dodał:&nbsp;{{ $team->user->name }}</h4>
	</div>

@stop

