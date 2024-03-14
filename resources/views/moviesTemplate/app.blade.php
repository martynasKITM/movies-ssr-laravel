<!DOCTYPE html>
<html lang="en">
    @include('moviesTemplate/_partials/head')
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            @include('moviesTemplate/_partials/sidebar')
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                @include('moviesTemplate/_partials/navigation')
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
