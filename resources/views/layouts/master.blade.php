<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body>
<!-- Preloader -->
@include('layouts.preloader')

<!-- ##### Header Area Start ##### -->
@include('layouts.header')
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('img/bg-img/24.jpg') }}');">
        <h2>@yield('title')</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

@yield('content')

<!-- ##### Footer Area Start ##### -->
@include('layouts.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>
@yield('scripts')
</body>

</html>
