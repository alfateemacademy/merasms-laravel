@extends('front.layouts.master')

@section('title', 'Sms Page')

@section('content')
    <h2>{{ $message->title }}</h2>
    <div class="article-info">Posted on <time datetime="2013-05-14">{{ date("d M, Y", strtotime($message->created_at)) }}</time> by <a href="#" rel="author">{{ $message->user->name }}</a> Posted in <a href="#">{{ $message->category->title }}</a></div>
    <div>Views: {{$message->views}}</div>
    <p>{{ $message->sms_content }}</p>

    <hr>

    <article>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <h3>{{ count($comments) }} Comment(s)</h3>
        @foreach($comments as $comment)
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object img-thumbnail" src="http://lorempixel.com/64/64/people/" alt="..." title="..." width="64" height="64">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">{{ $comment->user->name }}</h4>
                {{ $comment->comment_content }}

                <div>
                    {{ Form::open(['route' => ['comment.like', $comment->id], 'method' => 'post']) }}
                    <button class="btn btn-link"><i class="glyphicon glyphicon-thumbs-up"></i> </button> {{ $comment->likes }}
                    {{ Form::close(); }}
                </div>
            </div>
        </div>
        @endforeach

            @if(Auth::check())
                <hr>
        {{ Form::open(['route' => 'comment.store', 'method' => 'post']) }}
        <input type="hidden" name="sms_id" value="{{ $message->id }}">
            <div class="form-group">
                <label>Comment:</label>
                <textarea name="comment_content" class="form-control" rows="8"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        {{ Form::close() }}
                @else
                <div>
                    For comment posting, please do login by <a href="/admin/auth/login">clicking here</a>
                </div>
                @endif
    </article>
@endsection