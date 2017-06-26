@extends('master')
@section('content')

	<div class="row">

        <div class="col-md-12">
			@foreach($teams as $team)

				<div class="video-index">
				<h3>Ostatnia dodana drużyna</h3>
					<a href="{{ url('teams', $team->id) }}"><h3>{{ $team->name }}</h3></a>
					<p>{{ str_limit($team->description, $Limit=365) }}</p>
					<iframe width="410" height="280" src="{{ $team->embed }}?showinfo=0" frameborder="0"></iframe>
					<p>{{ str_limit($team->embed_desc, $limit=150) }}</p>
					<p id="add-date-team-index">Data dodania:&nbsp;{{ $team->created_at }}</p>
					<p id="edit-date-team-index">Data aktualizacji:&nbsp;{{ $team->updated_at }}</p>
					<h4 id="name-team-index">Dodał:&nbsp;{{ $team->user->name }}</h4>
				</div>
					
			@endforeach

			@foreach($players as $player)

				<div class="video-index" id="video-index">
				<h3>Ostatni dodany zawodnik</h3>
					<a href="{{ url('players', $player->id) }}"><h3>{{ $player->name }}</h3></a>
					<p>{{ str_limit($player->description, $limit=365) }}</p>
					<iframe width="410" height="280" src="{{ $player->embed }}?showinfo=0" frameborder="0"></iframe>
					<p>{{ str_limit($player->embed_desc, $limit=150) }}</p>
					<p id="add-date-player-index">Data dodania:&nbsp;{{ $player->created_at }}</p>
					<p id="edit-date-player-index">Data aktualizacji:&nbsp;{{ $player->updated_at }}</p>
					<h4 id="name-player-index">Dodał:&nbsp;{{ $player->user->name }}</h4>
				</div>
					
			@endforeach
		</div>
	</div>

@stop
