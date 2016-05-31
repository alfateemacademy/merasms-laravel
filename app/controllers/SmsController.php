<?php

class SmsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @param $slug
	 * @return Response
	 */
	public function detail($slug)
	{
		$message = Sms::where('slug', $slug)->first();

		if(!$message)
			return App::abort(404); ///return Redirect::to('/');

		$message->increment('views');
		return View::make('front.sms.detail')
			->with('message', $message)
			->with('title', $message->title);
	}

}
