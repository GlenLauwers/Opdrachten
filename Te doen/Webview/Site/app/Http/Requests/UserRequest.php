<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'voornaam' 		=> 	'required|min:3',
			'familienaam' 	=>	'required|min:3',
			'email'			=>	'required|email|unique:user,email',
			'wachtwoord'	=>	'required|confirmed',
			'voorwaarden'	=> 	'required',
			'postcode'		=> 	'numeric',
			'profielfoto'	=> 	'mimes:jpeg, png',
		];
	}

}
