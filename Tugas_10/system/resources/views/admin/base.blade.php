<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('public')}}/assets_admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('public')}}/assets_admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets_admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('public')}}/assets_admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('public')}}/assets_admin/css/style.css" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- summernote -->
    @stack('style')
    
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.template.sidebar')
        <!-- Sidebar End -->

        

        <!-- Content Start -->
        <div class="content">
            @include('admin.template.utils.notif')
        
                <!-- Navbar Start -->
            @include('admin.template.navbar')
            <!-- Navbar End -->
            
            <!-- content -->
            <div class="container-fluid pt-2 px-4">
                <div class="row">
                    
                    
                @yield('content')
                    
                </div>
            </div>
            <!-- contentend -->
            


            <!-- Footer Start -->
            
            
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        
    </div>
    
    <div class="container-fluid bg-light navbar-light sticky-top px-4 py-0">
                <div class="row bg-light ">
                    
                    
                @include('admin.template.footer')
                    
                </div>
            </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/chart/chart.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/easing/easing.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ url('public') }}/assets_admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('public') }}/assets_admin/js/main.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/src/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- include summernote css/js -->
    @stack('script')
    <script>
        $(".table-datatable").DataTable();
    </script>
</body>

</html>