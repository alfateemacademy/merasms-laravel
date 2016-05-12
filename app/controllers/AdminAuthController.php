<?php

class AdminAuthController extends \BaseController {

    /**
     * AdminAuthController constructor.
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', ['only' => ['postLogin']]);
    }

    public function getLogin()
    {
        return View::make('admin.auth.login');
    }

    public function postLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return Redirect::intended('/admin/sms');
        }

        return Redirect::back()->withInput()->withErrors(['invalid' => 'Invalid email and/or password.']);
    }

    public function getLogout()
    {
        Auth::logout();

        return Redirect::route('admin.auth.login');
    }

}
