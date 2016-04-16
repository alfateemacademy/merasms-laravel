@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        Categories
        <small>Create</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="/admin/category">Categories</a>
    </li>
    <li class="active">
        Add New
    </li>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Category</h3>
                </div>
                <div class="panel-body">
                    <form action="">
                        <div class="form-group"><label for="">First name</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>

                        <div class="form-group"><label for="">Last Name</label><input type="text" name="" id=""
                                                                                       class="form-control"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection