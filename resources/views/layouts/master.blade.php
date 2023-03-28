<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-starter">
    <!-- BEGIN: Head-->

    <head>
        @include('layouts.head')
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- headerbar -->
        @include('layouts.main-headerbar')
        <!-- / headerbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- sidebar -->
          @include('layouts.main-sidebar')

          <!-- / sidebar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
          @yield('content')
            </div>

            <!-- Content -->

            <!-- / Content -->

            <!-- Footer -->
            @include('layouts.footer')

            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>

    @include('layouts.footer-scripts')
    


    </body>


   

    <!-- END: Body-->   
</html>