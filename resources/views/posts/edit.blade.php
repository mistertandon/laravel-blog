@extends('layouts.posts')

@section('container')

<div class="row">

    {!! Form::model($post, array("route" => array("posts.update", $post->id), "method" => "PUT")) !!}

    <div class="col-md-8">

        <div class="form-group">

            {{ Form::label('title', ' Title :') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{ Form::label('slug', 'Slug :', array('class' => 'html-element-top-margin')) }}
            {{ Form::text('slug', null, array('class'=>'form-control')) }}

            {{ Form::label('category_id', 'Select Category :', array('class' => 'html-element-top-margin')) }}
            {{ Form::select('category_id', $categories, $post->category_id, array('class' => 'form-control')) }}

            {{ Form::label('tags', 'Tags :', array('class' => 'html-element-top-margin')) }}
            <select name="tags[]" multiple = "multiple" class="form-control">
                @foreach($tags as $tagId => $tagName)

                <?php
                $selected = "";
                $selected = array_key_exists($tagId, $selectedtags) ? "selected" : "";
                ?>
                <option value="{{ $tagId }}" {{$selected}}>
                    {{ $tagName }}
                </option>
                @endforeach
            </select>

            {{ Form::label('body', ' Body :', array('class' => 'html-element-top-margin')) }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-4">

        <div class="well">
            <h2>Blog Post</h2>
            <dl class="dl-horizontal">
                <dt>Created At</dt>
                <dd>{{date('d M, Y h:i:s',strtotime($post->created_at))}}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Modified at</dt>
                <dd>{{date('d M, Y h:i:s',strtotime($post->updated_at))}}</dd>
            </dl>
        </div>

        <div class="row">
            <div class="col-sm-6">
                {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
            </div>
            <div class="col-sm-6">
                {{ Form::submit('Save changes', array('class'=>'btn btn-success btn-block'))}}
            </div>
        </div>

    </div>

    {!! Form::close() !!}

</div>

@endsection