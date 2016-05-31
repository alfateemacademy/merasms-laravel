@extends('front.layouts.master')

@section('title', 'Home')

@section('content')

    @foreach($latestSms as $message)
    <h2>{{ $message->title }}</h2>
    <div class="article-info">Posted on <time datetime="2013-05-14">{{ date("d M, Y", strtotime($message->created_at)) }}</time> by <a href="#" rel="author">{{ $message->user->name }}</a> Posted in <a href="#">{{ $message->category->title }}</a></div>

    <p>{{ $message->sms_content }}</p>
    <a href="{{ route('sms.detail', $message->slug) }}" class="button">Read more</a><br><br>

    <hr>
    @endforeach

    {{ $latestSms->links() }}
@endsection