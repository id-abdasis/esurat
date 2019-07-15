<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>e-Surat PemDa Bangkalan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/images/favicon.ico">

    <!-- plugin css -->
    <link href="{{url('/')}}/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    @yield('addon-css')

    <!-- App css -->
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    @include('includes.top-bar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('includes.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                @yield('content')

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        {{date('Y')}} &copy; e-Surat PEMDA Bangkalan Oleh <a href="http://abdasis.xyz">KPI UTM 2019</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<script src="{{url('/')}}/js/vendor.min.js"></script>
<!-- Plugins js-->
@yield('plugin-js')

<script src="{{url('/')}}/js/app.min.js"></script>



</body>

</html>
