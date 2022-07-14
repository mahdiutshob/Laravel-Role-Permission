<!DOCTYPE html>

{{-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only. --}}

<html lang="en">
{{-- Header --}}
@include('backend.layouts.partials.head')
{{-- /.Header --}}

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('backend.layouts.partials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{-- @include('backend.layouts.partials.content-header') --}}
            @yield('page-header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        @include('backend.layouts.partials.control-sidebar')
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('backend.layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('backend.layouts.partials.scripts')
</body>

</html>
