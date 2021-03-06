@extends('layouts.categories')

@section('title', '| All Category')

@section('container')
<div class="row">

    <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Category
            </div>
            <div class="panel-body">
                {!! Form::open(array('route' => 'categories.store')) !!}

                {{ Form::label('name', 'Name :') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}

                {{ Form::submit('Add Category', array('class' => 'btn btn-primary btn-block html-element-top-margin')) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr><th>#</th><th>Name</th><th>Action</th></tr>
                <?php
                $counter = 0;
                ?>
                @foreach($categories as $category)

                <tr>
                    <td class="col-md-1 col-md-offset-2"><?php echo ++$counter; ?></td>
                    <td class="col-md-4">{{ $category->name }}</td>
                    <td class="col-md-5">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Html::linkRoute('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-sm btn-info btn-block')  )!!}
                            </div>
                            <div class="col-md-3">
                                {!! Form::open(array('route' => array('categories.destroy', $category->id))) !!}

                                {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger btn-block')) }}

                                {!! Form::close() !!}
                            </div>
                        </div>

                    </td>
                </tr>

                @endforeach

            </thead>
            <tbody>
            </tbody>
        </table>

    </div>        
</div>
@endsection