@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        Users
        <small>Listing</small>
    </h1>
@endsection

@section('breadcrumb')
    <li class="active">
        Users
    </li>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> SMS</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if(count($users))
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Added at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->user_status }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <form method="post" action="{{ route('admin..user.destroy', $user->id) }}">
                                                <input type="hidden" name="_method" value="delete">
                                                <a href="{{ route('admin..user.edit', $user->id)  }}"
                                                   class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i></a>
                                                <button type="submit"
                                                        class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-info">
                                No record(s) found. <br>
                                <a href="{{ route('admin..user.create') }}">click here to add new user</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection