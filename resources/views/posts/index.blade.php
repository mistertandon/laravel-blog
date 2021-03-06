@extends('layouts.posts')

@section('title', '| All Posts')

@section('container')

<div class="row">

    <div class="col-md-10">
        <h2>All Posts</h2>
    </div>
    <div class="col-md-2">
        <a href="{{route('posts.create')}}" class="btn btn-primary btn-block add-post-heading">Add Post</a>
    </div>
    <div class="col-md-12">
        <hr>
        <hr>
    </div>    

</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        {{ substr($post->body, 0, 30) }}
                        @if( strlen($post->body) > 30 )
                        ...
                        @endif
                    </td>
                    <td>{{ date('d M Y h:i:s', strtotime($post->created_at)) }}</td>
                    <td>
                        {!! Html::linkRoute('posts.show', 'View', array($post->id), array('class'=>'btn btn-success btn-sm')) !!}
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-warning btn-sm')) !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>
</div>

@endsection