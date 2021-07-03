<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('project.pro_layouts._head')
</head>

<body class="skin-dark">

<div class="main-wrapper">


    <!-- Header Section Start -->
    @include('project.pro_layouts._header')
    <!-- Header Section End -->
    <!-- Side Header Start -->
    @include('project.pro_layouts._side_header')
    <!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">
        @include('project.pro_layouts._message')
    @yield('content')
    </div><!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('project.pro_layouts._footer')
    <!-- Footer Section End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
@include('project.pro_layouts._script')

</body>

</html>