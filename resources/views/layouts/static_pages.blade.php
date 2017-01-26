<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.global_partials._css')
        @include('layouts.static_partials._head')
    </head>
    <body>

        @include('layouts.static_partials._navbar')
        <!-- "container" div starts here -->

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @include('layouts.global_partials._flash_message')
                </div>
            </div>            

            @yield('container')

        </div>
        <!-- "container" div ends -->

        <div>
            @include('layouts.global_partials._footer')    
        </div>
        @include('layouts.global_partials._javascript')

    </body>
</html>