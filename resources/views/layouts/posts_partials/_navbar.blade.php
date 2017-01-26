<!-- Default Nav-Bar starting -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is("/")? "active":"" }}">
                    <a href="/">Home</a>
                </li>
                <li class="{{ Request::is('blog')? "active":"" }}">
                    <a href="/blog">Blog</a>
                </li>
                <li class="{{ Request::is("aboutus")? "active":"" }}">
                    <a href="/aboutus">About Us</a>
                </li>
                <li class="{{ Request::is("contactus")? "active":"" }}">
                    <a href="/contactus">Contact Us</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                     @include('layouts.auths_partials._logout_btn')
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- Default Nav-Bar ending -->