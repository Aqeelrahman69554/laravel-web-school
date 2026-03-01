<!DOCTYPE html>
<html lang="en">


{{-- INCLUDE HEAD --}}
@include('admin.layout._head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        //INCLUDE NAVBAR
        @include('admin.layout._navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        //INCLUDE SIDEBAR
        @include('admin.layout._sidebar')

        <!-- Content Wrapper. Contains page content -->
        //YIELD CONTENT 
        @yield('content')
        <!-- /.content-wrapper -->

        //INCLUDE FOOTER
        @include('admin.layout._footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    //INCLUDE SCRIPT
    @yield('partials')
</body>

</html>
