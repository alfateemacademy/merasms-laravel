<?php

class CommentController extends \BaseController {
	/**
	 * CommentController constructor.
	 */
	public function __construct()
	{
		$this->beforeFilter('auth', ['only' => ['store']]);
		$this->beforeFilter('csrf', ['only' => ['store']]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Comment::create([
			'user_id' => Auth::user()->id,
			'sms_id' => Input::get('sms_id'),
			'comment_content' => Input::get('comment_content')
		]);

		return Redirect::back()->with('success', 'Comment successfully added, it will appear after moderation.');
	}

	public function like($commentId)
	{
		$comment = Comment::find($commentId);
		$comment->increment('likes');

		return Redirect::back();

	}


}
