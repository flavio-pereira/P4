<?php

class UsersController extends BaseController {

	/**
	*
	*/
	public function __construct() {

        $this->beforeFilter('guest', array('only' => array('getLogin','getSignup')));

    }


    /**
	* Show the new user signup form
	* @return View
	*/
	public function getSignup() {

		return View::make('layouts.signup');

	}

	/**
	* Process the new user signup
	* @return Redirect
	*/
	public function postSignup() {

		# Step 1) Define the rules
		$rules = array(
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6'
		);

		# Step 2)
		$validator = Validator::make(Input::all(), $rules);

		# Step 3
		if($validator->fails()) {

			return Redirect::to('/signup')
				->with('message', 'Sign up failed; please fix the errors listed below.')
				->withInput()
				->withErrors($validator);
		}

		$user = new User;
		$user->email    = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		try {
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/signup')
				->with('message', 'Sign up failed; please try again.')
				->withInput();
		}

		# Log in
		Auth::login($user);

		return Redirect::to('/')->with('message', 'Welcome to Claudia Recipes!');

	}

	/**
	* Display the login form
	* @return View
	*/
	public function getLogin() {

		return View::make('layouts.login');

	}

	/**
	* Process the login form
	* @return View
	*/
	public function postLogin() {

		$credentials = Input::only('email', 'password');

		if (Auth::attempt($credentials, $remember = true)) {
			return Redirect::intended('/')->with('message', 'Welcome Back!');
		}
		else {
			return Redirect::to('/login')
				->with('message', 'Log in failed; please try again.')
				->withInput();
		}

		return Redirect::to('layouts.login');

	}


	/**
	* Logout
	* @return Redirect
	*/
	public function getLogout() {

		# Log out
		Auth::logout();

		# Send them to the homepage
		return Redirect::to('/');

	}

}