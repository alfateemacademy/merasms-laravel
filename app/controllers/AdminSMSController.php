<?php

class AdminSMSController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sms =  Sms::with('category')->get();

		return View::make('admin.sms.index')->with('sms', $sms);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['categories'] = Category::lists('title', 'id');
		return View::make('admin.sms.create', $data);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required',
			'category_id' => 'required',
			'sms_content' => 'required'
		]);

		if($validator->fails())
			return Redirect::back()->withInput()->withErrors($validator);

		/*SMS::create([
			'title' => Input::get('title'),
			'slug' => Str::slug(Input::get('title')),
			'category_id' => Input::get('category_id'),
			'sms_content' => Input::get('sms_content'),
			'sms_status' => 'ACTIVE'
		]);*/

		$input = Input::all();
		$input['slug'] = Str::slug(Input::get('title'));
		$input['sms_status'] = 'ACTIVE';
		Sms::create($input);

		return Redirect::route('admin..sms.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sms = Sms::find($id);
		//return $sms;
		$categories = Category::lists('title', 'id');

		return View::make('admin.sms.edit')->with('sms', $sms)
			->with('categories', $categories);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required',
			'category_id' => 'required',
			'sms_content' => 'required'
		]);

		if($validator->fails())
			return Redirect::back()->withInput()->withErrors($validator);

		$sms = Sms::find($id);

		$input = Input::all();
		$input['slug'] = Str::slug(Input::get('slug'));
		$sms->update($input);

		return Redirect::route('admin..sms.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sms = Sms::find($id);
		$sms->delete();

		return Redirect::route('admin..sms.index');
	}


}
