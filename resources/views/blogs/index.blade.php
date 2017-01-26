@extends('layouts.blogs')

@section('title', "| Blog")

@section('container')
<div class="row">
    <div class="col-md-12">
        <h1>
            Blog
        </h1>
    </div>
</div>
@foreach($posts as $post)
<div class="row">
    <div class="col-md-12">
        <h3>
            {{$post->title}}
        </h3>
        <h5>
            Published at: {{date('d m, Y h:i:s', strtotime($post->created_at))}}   
        </h5>
        <p>
            {{substr($post->body, 0, 100)}} @if(strlen($post->body) > 100) ... @endif
        </p>

        @if(strlen($post->body) > 100)

        <div class="col-md-4 read-more-padding">
            {!! Html::linkRoute('blog.single', 'Read More', array($post->slug)) !!}
        </div>

        @endif

    </div>
</div>
@endforeach



<div class="row">
    <div class="col-md-12">
        {!! $posts->links() !!}
    </div>
</div>

@endsection