@extends('master')
@section('content')

@if(Session::has('teams_created'))
	<div class="alert alert-success">
		{{ Session::get('teams_created') }}
	</div>
@endif

	@foreach($teams as $team)

	<div class="col-md-lg-1">
		<div class="video">
			<a href="{{ url('teams', $team->id) }}"><h3>{{ $team->name }}</h3></a>
			<p>{{ str_limit($team->description, $limit=250) }}</p>
			<iframe width="410" height="280" src="{{ $team->embed }}?showinfo=0" frameborder="0"></iframe>
			<p>{{ str_limit($team->embed_desc, $limit=100) }}</p>
			<p id="add-date-team">Data dodania:&nbsp;{{ $team->created_at }}</p>
			<p id="edit-date-team">Data aktualizacji:&nbsp;{{ $team->updated_at }}</p>
			<h4 id="name-team">Dodał:&nbsp;{{ $team->user->name }}</h4>
		</div>
	</div>

	@endforeach

@stop