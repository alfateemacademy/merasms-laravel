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
                    {{ Form::open(['route' => 'admin..category.store', 'method' => 'POST'])  }}
                            <div class="form-group {{ ($errors->has('title')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Title</label>
                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        </div>

                        <div class="form-group {{ ($errors->has('category_status')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Status</label>
                            {{ Form::select('category_status', ['' => '- Select Category -', 'ACTIVE' => 'Active', 'DEACTIVE' => 'Deactive'], null, ['class' => 'form-control']) }}
                            <span class="help-block">{{ $errors->first('category_status') }}</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection