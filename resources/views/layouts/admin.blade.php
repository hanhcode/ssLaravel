<!DOCTYPE html>
<html>
<head>
    @include('admin.partials.head')
</head>
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    @include('admin.partials.topbar')
    @include('admin.partials.left-side-menu')

    @yield('content')

    @include('admin.partials.right-side-menu')
</div>
<!-- END wrapper -->
@include('admin.partials.javascripts')
</body>
</html>