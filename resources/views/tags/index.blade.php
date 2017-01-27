@extends('layouts.tags')

@section('title', '| Tags')

@section('container')
<div class="row">
    <div class="col-md-4">
        <?php
        if ($isAddForm) {
            ?>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Add Tag
                </div>
                <div class="panel panel-body">
                    {!! Form::open(array('route'=>'tags.store')) !!}

                    {{ method_field('POST') }}

                    {{ Form::label('name', 'Name :') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                    {{ Form::submit('Add Tag', array('class' => 'btn btn-primary btn-block html-element-top-margin')) }}

                    {!! Form::close() !!}
                </div>
            </div>
            <?php
        }

        if ($isEditForm) {
            ?>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Edit Tag
                </div>
                <div class="panel panel-body">
                    {!! Form::model($editedTag, array('route'=>array('tags.update', $editedTag->id))) !!}

                    {{ method_field('PUT') }}

                    {{ Form::label('name', 'Name :') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                    {{ Form::submit('Edit Tag', array('class' => 'btn btn-primary btn-block html-element-top-margin')) }}

                    {!! Form::close() !!}
                </div>
            </div>
            <?php
        }
        ?>        

    </div>
    <div class="col-md-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-md-2">#</th><th class="col-md-4">Name</th><th class="col-md-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 0; ?>
                @foreach($tags as $tag)
                <tr>
                    <td class="col-md-2">{{ ++$counter }}</td>
                    <td class="col-md-4">{{ $tag->name }}</td>
                    <td class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                {!! Html::linkRoute('tags.edit', 'Edit', array($tag->id), array('class'=>'btn btn-info btn-sm btn-block')) !!}
                            </div>
                            <div class="col-md-4">

                                {!! Form::open(array('route' => array('tags.destroy', $tag->id))) !!}

                                {{ method_field('DELETE') }}

                                {{ Form::submit('Delete', array('class'=>'btn btn-danger btn-sm btn-block')) }}

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

</div>
@endsection