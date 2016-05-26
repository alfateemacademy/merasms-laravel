@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        Categories
        <small>Listing</small>
    </h1>
@endsection

@section('breadcrumb')
    <li class="active">
        Categories
    </li>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> Categories</h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        @if(count($categories))
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                                <th>Category Slug</th>
                                <th>SMS #</th>
                                <th>Added at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td> {{ count($category->sms) }} </td>
                                    <td>{{ $category->category_status }}</td>
                                    <td>
                                        <form method="post" action="{{ route('admin..category.destroy', $category->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="delete">
                                            <a href="{{ route('admin..category.edit', $category->id)  }}"
                                               class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i></a>
                                            <button type="submit"
                                                    class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            {{ $categories->links() }}
                        @else
                            <div class="alert alert-info">
                                No record(s) found. <br>
                                <a href="{{ route('admin..category.create') }}">click here to add new category</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection