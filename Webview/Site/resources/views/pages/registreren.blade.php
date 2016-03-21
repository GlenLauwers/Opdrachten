@extends('app')

@section('content')
	<div class="rij1_register rij1 row">
		<h1>Registreren</h1>
		<p>Vul het onderstaande formulier in om u te registreren.</p>

    @include('flash::message')

    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

		{!!  Form::open(array('url' => 'register', 'enctype' => 'multipart/form-data', 'class' => 'registreren', 'name' =>'Registreren')) !!}
      <div class="col-md-6 row">
        <div class="col-md-6">
          <label for="familienaam">Naam*:</label>
            <input type="text" name="familienaam" id="familienaam" value="{{ old('familienaam') }}">
        </div>

        <div class="col-md-6">
          <label for="voornaam">Voornaam*:</label>
            <input type="text" name="voornaam" id="voornaam" value="{{ old('voornaam') }}">
        </div>

        <div class="col-md-12">
          <label for="email">E-mailadres*:</label>
            <input type="text" name="email" id="mail" value="{{ old('email') }}">
        </div>
  		
        <div class="col-md-12">
          <label for="wachtwoord">Wachtwoord*:</label>
            <input type="password" name="wachtwoord" id="wachtwoord">
        </div>

        <div class="col-md-12">
          <label for="wachtwoord_confirmation">Wachtwoord bevestigen*:</label>
            <input type="password" name="wachtwoord_confirmation" id="_confirmation"> 
        </div>      
      </div>

      <div class="col-md-6 row">
        <div class="col-md-9">
          <label for="straat">Straat:</label>
            <input type="text" name="straat" id="straat" value="{{ old('straat') }}">
        </div>

        <div class="col-md-3">
          <label for="nummer">Nummer:</label>
            <input type="text" name="nummer" id="nummer" value="{{ old('nummer') }}">
        </div>

        <div class="col-md-3">
          <label for="postcode">Postcode:</label>
            <input type="text" name="postcode" id="postcode" value="{{ old('postcode') }}">
        </div>

        <div class="col-md-9">
          <label for="gemeente">Gemeente:</label>
            <input type="text" name="gemeente" id="gemeente" value="{{ old('gemeente') }}">
        </div>

        <div class="col-md-9">
          <label for="land">Land:</label>
            <input type="text" name="land" id="land" value="{{ old('land') }}">
        </div>

        <div class="col-md-3">
          <label for="telefoon">Telefoon:</label>
            <input type="text" name="telefoon" id="telefoon" value="{{ old('telefoon') }}">
        </div>

        <div class="col-md-12">
          <label for="profielfoto">Profielfoto:</label>
            <input type="file" name="profielfoto" id="profielfoto" value="{{ old('profielfoto') }}">
        </div>
      </div>

      <div class="col-md-12">    
        <label><input type="checkbox" value="1" name="voorwaarden" id="voorwaarden">Ja, ik ga akkoord met de <a href="{{ asset('/voorwaarden') }}" target="_blank">voorwaarden</a></label>
      
        <p>Velden met een * zijn verplicht.</p>
      
        <input type="submit" value="Registreren" name="registreren" id="registreren">
      </div>
    {!!  Form::close() !!}
    </div>
@stop