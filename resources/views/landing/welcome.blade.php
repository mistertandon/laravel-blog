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
            <h1>Hello, world!</h1>
            <p class="lead">Thankyou for visiting, Keep visiting to watch stable version of the website.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8">
            <div class="postContainer">
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                <a class="btn btn-primary dropdown-toggle">Read More</a>
            </div>
            <hr>

            <div class="postContainer">
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                <a class="btn btn-primary dropdown-toggle">Read More</a>
            </div>
            <hr>

            <div class="postContainer">
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                <a class="btn btn-primary dropdown-toggle">Read More</a>
            </div>
            <hr>

            <div class="postContainer">
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                <a class="btn btn-primary dropdown-toggle">Read More</a>
            </div>                        
        </div>

        <div class="col-md-3 col-md-offset-1">
            <div class="sideBar">
            </div>

        </div>
    </div>
</div>
<!-- "container" div ends -->
@endsection
