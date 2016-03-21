<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;
use Image;

use Request;



class UserController extends Controller {

	
	public function nieuw(userrequest $Request)
	{
		$input = request::all();
		var_dump($input);
		$familienaam 	= $input['familienaam'];
		$voornaam 		= $input['voornaam'];
		$email 			= $input['email'];
		$wachtwoord 	= $input['wachtwoord'];
		$straat 		= $input['straat'];
		$nummer 		= $input['nummer'];
		$postcode 		= $input['postcode'];
		$gemeente 		= $input['gemeente'];
		$land 			= $input['land'];
		$telefoon 		= $input['straat'];
		$profielfoto 	= $input['profielfoto'];
		$type			= 10;
		$actief 		= 0;

		$hashed_wachtwoord = md5($wachtwoord);

		$random	= rand().'_';
			$profielfoto_naam = $random . $_FILES['profielfoto']['name'];
			$target_path_cover = public_path().sprintf("/afbeeldingen/profielfotos/");
	
			$img = Image::make($profielfoto->getRealPath() );
			$img->resize(350, null, function ($constraint) 
						{
    						$constraint->aspectRatio();
						});
			$img->save($target_path_cover . $profielfoto_naam);
			
		$user = new User;
			$user->voornaam 		= $voornaam;
			$user->familienaam 		= $familienaam;
			$user->email 			= $email;
			$user->wachtwoord 		= $hashed_wachtwoord;
			$user->straat 			= $straat;
			$user->nummer			= $nummer;
			$user->postcode 		= $postcode;
			$user->gemeente 		= $gemeente;
			$user->land 			= $land;
			$user->telefoon 		= $telefoon;
			$user->profielfoto 		= $target_path_cover . $profielfoto_naam;
			$user->type 			= $type;
			$user->actief 			= $actief;

		$user->save();

		Auth::login($user);

		flash()->success('Welkom, u bent ingelogd.');
		return redirect('dashboard');
	}

	public function login()
	{
		$input = request::all();
		var_dump($input);
		$mail = $input['mail'];
		$wachtwoord = $input['wachtwoord'];
		$hashed_wachtwoord = md5($wachtwoord);
		$users = User::where('actief', '=', 0)->where('email', '=', $mail)->get();

		if (!isset($users[0])) 
		{
			flash()->error('Het e-mailadres en/of wachtwoord is niet correct. Probeer opnieuw');
			return redirect('login');
		}

		else
		{
			if ($users[0]['attributes']['wachtwoord'] != $hashed_wachtwoord)
			{
				flash()->error('Het e-mailadres en/of wachtwoord is niet correct. Probeer opnieuw');
				return redirect('login');
			}

			else
			{
				$id = $users[0];
				Auth::login($id);
				flash()->success('Welkom, u bent ingelogd.');
				return redirect('home');
			}
		}
	}

	public function logout()
	{
		$user = Auth::user();
		Auth::logout($user);
		flash()->success('U bent uitgelogd. Tot de volgende keer.');
		return redirect('login');
	}

}
