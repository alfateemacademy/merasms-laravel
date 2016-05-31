@extends('front.layouts.master')

@section('title', 'Sms Page')

@section('content')
    <h2>{{ $message->title }}</h2>
    <div class="article-info">Posted on <time datetime="2013-05-14">{{ date("d M, Y", strtotime($message->created_at)) }}</time> by <a href="#" rel="author">{{ $message->user->name }}</a> Posted in <a href="#">{{ $message->category->title }}</a></div>
    <div>Views: {{$message->views}}</div>
    <p>{{ $message->sms_content }}</p>

    <hr>

    <article>
        <h3>No Comment(s)</h3>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object img-thumbnail" src="_assets/images/ayzeetech.jpg" alt="..." title="..." width="64" height="64">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Ayaz Ahmed Mast</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>

        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object img-thumbnail" src="_assets/images/webwizo.jpg" alt="..." title="..." width="64" height="64">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Asif Iqbal</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>


        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Website:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Website:</label>
                <textarea class="form-control" rows="8"></textarea>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </article>
@endsection