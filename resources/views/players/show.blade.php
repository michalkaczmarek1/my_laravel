@extends('master')
@section('content')

	<div class="video-show">
		<h2>{{ $player->name }}</h2>
		<p>{{ $player->description }}</p>
		<iframe width="680" height="480" src="{{ $player->embed }}?showinfo=0" frameborder="0"></iframe>
		<p>{{ $player->embed_desc }}</p>
		<div class="button-show-player">
			<a href="{{ action('PlayersController@edit', $player->id)}}" class="btn btn-success col-md-2">Edytuj</a>
			<a href="{{ action('PlayersController@index')}}" class="btn btn-primary col-md-2" id="button-show">Powrót</a><br>
		</div>
		<h4 id="info-name2">Dodał:&nbsp;{{ $player->user->name }}</h4>
	</div>

@stop