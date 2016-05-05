@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        SMS
        <small>Create</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="/admin/sms">SMS</a>
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
                    <h3 class="panel-title">Add New SMS</h3>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'admin..sms.store', 'method' => 'POST'])  }}

                    <div class="form-group {{ ($errors->has('category_id')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Select Category</label>
                        {{ Form::select('category_id', ['' => '- Select Category -'] + $categories, null, ['class' => 'form-control']) }}
                        {{--<select name="category_id" id="category_id" class="form-control">
                            <option value="">- Select Category -</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>--}}
                        <span class="help-block">{{ $errors->first('category_id') }}</span>
                    </div>

                        <div class="form-group {{ ($errors->has('title')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Title</label>
                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        </div>

                    <div class="form-group {{ ($errors->has('sms_content')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Message</label>
                        {{ Form::textarea('sms_content', null, ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('sms_content') }}</span>
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add SMS</button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection