<?php

class AdminAuthController extends \BaseController {

	public function getLogin()
	{
		return View::make('admin.auth.login');
	}

	public function postLogin()
	{
		$data = Input::all();
		$validator = Validator::make($data, User::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
		{
			return Redirect::intended('admin/posts');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::route('admin.login');
	}
}