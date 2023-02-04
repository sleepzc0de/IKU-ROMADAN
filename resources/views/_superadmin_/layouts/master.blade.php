
<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('_superadmin_.layouts.head')

<body>
   @include('_superadmin_.layouts.preloader')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        @include('_superadmin_.layouts.topbar')
        @include('_superadmin_.layouts.sidebar')
        
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            {{-- @include('_superadmin_.layouts.breadcumb') --}}
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
          @include('_superadmin_.layouts.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
         @include('_superadmin_.layouts.customizer')
    <div class="chat-windows"></div>
    @include('_superadmin_.layouts.tail')
</body>

</html>