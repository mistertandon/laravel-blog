@extends('layouts.static_pages')

@section('title', '| Home')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="style.css">
@endsection

<!-- "container" div starts here -->
@section('container')

<div class="row">

    <div class="col-md-12">

        <div class="jumbotron">
            <h2>Blog Tutorial based on Laravel 5.3</h2>
            <p class="lead">Thankyou for visiting, Keep visiting to watch stable version of the website.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8">

            @foreach($posts as $post)

            <div class="postContainer">

                <h2>{{$post->title}}</h2>

                <p>

                    {{substr($post->body, 0, 20)}}

                    @if(strlen($post->body) > 20)
                    ...
                    @endif
                </p>

                {!! Html::linkRoute('blog.single', 'Read More', array($post->slug), array('class'=>'btn btn-primary dropdown-toggle')) !!}

            </div>
            <hr>
            @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
            <div class="sideBar">
            </div>

        </div>
    </div>
</div>
<!-- "container" div ends -->
@endsection
