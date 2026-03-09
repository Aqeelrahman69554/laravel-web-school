<!DOCTYPE html>
<html lang="en">


{{-- INCLUDE HEAD --}}
@include('admin.layout._head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        {{-- INCLUDE NAVBAR --}}
        @include('admin.layout._navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        {{-- INCLUDE SIDEBAR --}}
        @include('admin.layout._sidebar')

        {{-- YIELD CONTENT --}}
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (optional) -->
            <section class="content-header">
                <div class="container-fluid">
                    @yield('header') {{-- optional kalau mau pakai --}}
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        <!-- /.content-wrapper -->

        {{-- INCLUDE FOOTER --}}
        @include('admin.layout._footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    {{-- INCLUDE SCRIPT --}}
    @include('admin.layout._script')

    @stack('script')
</body>

</html>
