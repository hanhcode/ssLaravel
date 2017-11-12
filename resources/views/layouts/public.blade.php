<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    @include('partials.topbar')

    @yield('content')

</div>
<!-- END wrapper -->
@include('partials.javascripts')
</body>
</html>