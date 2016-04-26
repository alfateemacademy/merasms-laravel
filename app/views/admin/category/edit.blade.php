@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        Categories
        <small>Edit</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="/admin/category">Categories</a>
    </li>
    <li class="active">
        Edit
    </li>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Category</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="{{ route('admin..category.update', $category->id) }}">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input type="hidden" name="_method" value="PUT">
                            <div class="form-group {{ ($errors->has('title')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}">
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        </div>

                        <div class="form-group {{ ($errors->has('category_status')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Status</label>
                            <select name="category_status" id="category_status" class="form-control">
                                <option value="">- Select Category -</option>
                                <option value="ACTIVE" {{ ($category->category_status == 'ACTIVE') ? 'selected=selected' : null }}>Active</option>
                                <option value="DEACTIVE" {{ ($category->category_status == 'DEACTIVE') ? 'selected=selected' : null }}>Deactive</option>
                            </select>
                            <span class="help-block">{{ $errors->first('category_status') }}</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Edit Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection