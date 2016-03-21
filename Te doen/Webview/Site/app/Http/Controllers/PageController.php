<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class PageController extends Controller
{
    public function dashboard()
    {
    	$title = 'Dashboard';

    	return view('pages.dashboard', compact('title'));
    }

    public function login()
    {
        if (Auth::user()) 
        {
            return redirect('home');
        }
        else
        {
        	$title = 'Login';

        	return view('pages.inloggen', compact('title'));
        }
    }

    public function register()
    {
        if (Auth::user()) 
        {
            return redirect('home');
        }
        else
        {

            $title = 'Registreren';

            return view('pages.registreren', compact('title'));
        }
    }

    public function user()
    {
        $title = 'Gebruiker';

        return view('pages.user', compact('title'));
    }

    public function wordpress()
    {
        $title = 'Wordpress';

        return view('pages.sites.wordpress', compact('title'));
    }

    public function joomla()
    {
        $title = 'Joomla';

        return view('pages.sites.joomla', compact('title'));
    }

    public function drupal()
    {
        $title = 'Drupal';

        return view('pages.sites.drupal', compact('title'));
    }

    public function statisch()
    {
        $title = 'Statisch';

        return view('pages.sites.statisch', compact('title'));
    }
}
