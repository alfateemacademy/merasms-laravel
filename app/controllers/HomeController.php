<?php

class HomeController extends BaseController {

	public function index()
	{
		$title = "Home";
		$latestSms = Sms::with('user', 'category')->orderBy('created_at', 'desc')->paginate(10);
		return View::make('front.home.index')
			->with('latestSms', $latestSms)
			->with('title', $title);
	}

}
