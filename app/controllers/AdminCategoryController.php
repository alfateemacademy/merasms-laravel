<?php

class AdminCategoryController extends \BaseController {

	/**
	 * AdminCategoryController constructor.
	 */
	public function __construct()
	{
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf', ['only' => ['store', 'update', 'destroy']]);
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['categories'] = Category::with('sms')->get();

		// return Category::with('sms')->get();

		return View::make('admin.category.index', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.category.create');

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
			'category_status' => 'required'
		]);

		if($validator->fails())
			return Redirect::back()->withErrors($validator)->withInput();

		$category = Category::create([
			'title' => Input::get('title'),
			'slug' => Str::slug( Input::get('title') ),
			'category_status' => Input::get('category_status')
		]);

		return Redirect::to('/admin/category');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "category  page";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['category'] = Category::find($id);
		return View::make('admin.category.edit', $data);

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
			'category_status' => 'required'
		]);

		if($validator->fails())
			return Redirect::back()->withErrors($validator)->withInput();

		$category = Category::find($id);

		if($category)
		{
			$category->update([
				'title' => Input::get('title'),
				'slug' => Str::slug( Input::get('title') ),
				'category_status' => Input::get('category_status')
			]);
			return Redirect::route('admin..category.index');
		}

		return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = Category::find($id);

		$category->delete();

		return Redirect::route('admin..category.index');

	}


}
