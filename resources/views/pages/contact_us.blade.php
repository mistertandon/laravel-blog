@extends('layouts.static_pages')

@section('title', '| Contact Us')

@section('container')
<!-- "container" div starts here -->
<div class="container">

    <div class="row">

        <div class="col-md-12">
            <h2>Contact Us</h2>
            <form>
                <div class="form-group">
                    <label for="email" name="emailLabel">Email ID : </label>
                    <input class="form-control" id="email" name="email" type="text" placehoder="Email Id">
                </div>
                <div class="form-group">
                    <label for="email-subject" name="subjectLabel">Subject  : </label>
                    <input class="form-control" id="email-subject" name="emailSubject" type="text" placehoder="Email Subject">
                </div>
                <div class="form-group">
                    <label for="email-body" name="bodyLabel">Body  : </label>
                    <textarea class="form-control" id="email-body" name="emailBody" placehoder="Email body"></textarea>
                </div>
                <input class="btn btn-success" type="submit" value="Send Message">
            </form>
        </div>

    </div>
</div>
<!-- "container" div ends -->
@endsection