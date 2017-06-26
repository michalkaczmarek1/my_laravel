@extends('master')
@section('content')

@if(Session::has('player_created'))
	<div class="alert alert-success">
		{{ Session::get('player_created') }}
	</div>
@endif

	@foreach($players as $player)
	
		<div class="video">
			<a href="{{ url('players', $player->id) }}"><h3>{{ $player->name }}</h3></a>
			<p>{{ str_limit($player->description, $limit=250) }}</p>
			<iframe width="410" height="280" src="{{ $player->embed }}?showinfo=0" frameborder="0"></iframe>
			<p>{{ str_limit($player->embed_desc, $limit=100) }}</p>
			<p id="add-date-player">Data dodania:&nbsp;{{ $player->created_at }}</p>
			<p id="edit-date-player">Data aktualizacji:&nbsp;{{ $player->updated_at }}</p>
			<h4 id="name-player">Dodał:&nbsp;{{ $player->user->name }}</h4>
		</div>

	@endforeach

@stop