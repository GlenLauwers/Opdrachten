@extends('app')

@section('content')
	<div class="rij1 rij1_login row">
		<div class="col-md-12">
      <h1>Inloggen</h1>
    </div>

    <div class="col-md-12 row">
      @include('flash::message')
    </div>

    <div class="col-md-6">
		  {!!  Form::open(array('url' => 'login', 'class' => 'login', 'name' =>'login')) !!}
        <h3>Bestaande klanten</h3>
        
        <label for="mail">E-mailadres:</label>
          <input type="text" name="mail" id="mail">

        <label for="wachtwoord">Wachtwoord:</label>
          <input type="password" name="wachtwoord" id="wachtwoord">

        <input type="submit" name="inloggen" value="Inloggen" id="inloggen">
      {!!  Form::close() !!}
    </div>

    <div class="col-md-6">
      <h3>Nieuwe leden</h3>
      <a href="{{ url('/register') }}">Ga verder om je te registreren</a>
    </div>
	</div>
@stop