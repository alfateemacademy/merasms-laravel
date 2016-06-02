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
		$message = Sms::with('user')->where('slug', $slug)->first();

		if(!$message)
			return App::abort(404); ///return Redirect::to('/');

		$comments = Comment::with('user')->where('sms_id', $message->id)->where('comment_status', 'ACTIVE')
			->orderBy('created_at', 'DESC')->get();

		$message->increment('views');
		return View::make('front.sms.detail')
			->with('message', $message)
			->with('comments', $comments)
			->with('title', $message->title);
	}

}
