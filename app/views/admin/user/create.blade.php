@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        User
        <small>Create</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="/admin/users">Users</a>
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
                    <h3 class="panel-title">Add New User</h3>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'admin..user.store', 'method' => 'POST'])  }}

                        <div class="form-group {{ ($errors->has('name')) ? 'has-error' : null  }}">
                            <label for="" class="control-label">Name</label>
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        </div>

                    <div class="form-group {{ ($errors->has('email')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Email</label>
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="form-group {{ ($errors->has('password')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Password</label>
                        {{ Form::password('password', ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection