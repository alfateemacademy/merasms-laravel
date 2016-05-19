@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        SMS
        <small>Listing</small>
    </h1>
@endsection

@section('breadcrumb')
    <li class="active">
        SMS
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
                        @if(count($sms))
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>SMS Title</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Added at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sms as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->category->title }}</td>
                                        <td>{{ $message->title }}</td>
                                        <td>{{ $message->views }}</td>
                                        <td>
                                            @if($message->sms_status == 'ACTIVE')
                                                <a href="{{ route('admin..sms.status', $message->id) }}"
                                                   class="btn btn-success btn-xs btn-status-update">{{ $message->sms_status }}</a>
                                            @else
                                                <a href="{{ route('admin..sms.status', $message->id) }}"
                                                   class="btn btn-danger btn-xs btn-status-update">{{ $message->sms_status }}</a>
                                            @endif
                                        </td>
                                        <td>{{ $message->created_at }}</td>
                                        <td>
                                            <form method="post"
                                                  action="{{ route('admin..sms.destroy', $message->id) }}">
                                                <input type="hidden" name="_method" value="delete">
                                                <a href="{{ route('admin..sms.edit', $message->id)  }}"
                                                   class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i></a>
                                                <button type="submit"
                                                        class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-info">
                                No record(s) found. <br>
                                <a href="{{ route('admin..sms.create') }}">click here to add new sms</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection

@section('footer.scripts')
    <script>
        $(document).ready(function () {
            $(".btn-status-update").on('click', function (e) {
                e.preventDefault();

                var href = $(this).attr('href');
                var self = $(this);
                $.get(href, function (response) {
                    self.html(response.newstatus);

                    if (response.newstatus == 'ACTIVE') {
                        self.removeClass('btn-danger').addClass('btn-success')
                    }
                    else {
                        self.removeClass('btn-success').addClass('btn-danger')
                    }

                });
            });
        });
    </script>
@endsection