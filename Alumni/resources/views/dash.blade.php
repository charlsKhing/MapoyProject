<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Manage Alumni</title>
        @include('style')
        @livewireStyles
    </head>
    <body class="sb-nav-fixed">
     @include('nav')
    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                  @include('sidebar')
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                @include('footer')
            </div>
        </div>
        @include('script')
        @livewireScripts
        @include('sweetalert')
    </body>
</html>
