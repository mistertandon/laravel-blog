<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials._static_pages_head')
    </head>
    <body>

        @include('layouts.partials._static_pages_navbar')
        <!-- "container" div starts here -->

        <div class="container">

            @yield('container')

        </div>
        <!-- "container" div ends -->

        <div>
            @include('layouts.partials._static_pages_footer')    
        </div>
        @include('layouts.partials._javascript')

    </body>
</html>