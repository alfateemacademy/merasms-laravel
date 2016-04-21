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

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Category</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="/admin/category">
                            <div class="form-group {{ ($errors->has('title')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ Input::old('title') }}">
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        </div>

                        <div class="form-group {{ ($errors->has('category_status')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Status</label>
                            <select name="category_status" id="category_status" class="form-control">
                                <option value="">- Select Category -</option>
                                <option value="ACTIVE" {{ (Input::old('category_status') == 'ACTIVE') ? 'selected=selected' : null }}>Active</option>
                                <option value="DEACTIVE" {{ (Input::old('category_status') == 'DEACTIVE') ? 'selected=selecteds' : null }}>Deactive</option>
                            </select>
                            <span class="help-block">{{ $errors->first('category_status') }}</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection