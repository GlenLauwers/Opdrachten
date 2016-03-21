@extends('app')

@section('content')
	<div class="rij1_user rij1">
		<div class="col-md-12 row">
			@include('flash::message')
		</div>

		<h1>Gebruiker: {{Auth::user()->voornaam}} {{Auth::user()->familienaam}}</h1>
	</div>
@stop