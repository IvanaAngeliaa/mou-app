<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Web Kelas BD-B :: Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .bg_mou{
            background-color:#e0ba75;
        }

        .btn-custom{
            background-color:#e0ba75; 
            border-color:#e0ba75;
            color: white;
        }

        .btn-custom:hover{
            background-color:#cda253; 
            border-color:#cda253;
            color:white;
        }

        .page-item.active .page-link {
            background-color: #e0ba75 !important;
            border-color: #e0ba75 !important;
        }

        .text-custom{
            color:#e0ba75;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg_mou sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php"> --}}
                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MOU</div> -->
                <img src = "{{asset('images/logo-putih.svg')}}" class="col-sm-7">
            </a>
        
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
        
            <!-- Nav Item - Dashboard -->

            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">
                    <i class="fas fa-globe"></i>
                    <span><b>Website Mou </b></span></a>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">
        
            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('user_index')}}">
                    <i class="fas fa-users"></i>
                    <span><b>User</b></span></a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('produk_index')}}">
                    <i class="fas fa-box"></i>
                    <span><b>Produk</b></span></a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('persediaan_index')}}">
                    <i class="fas fa-box-open"></i>
                    <span><b>Persediaan</b></span></a>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span></a>
            </li>
        
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                
                        <div class="topbar-divider d-none d-sm-block"></div>
                
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('images/cwe.jpg')}}">
                            </a>
                            
                
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                
                    </ul>
                
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mou 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('mou_project-main/admin/themes/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('mou_project-main/admin/themes/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('mou_project-main/admin/themes/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('mou_project-main/admin/themes/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('mou_project-main/admin/themes/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('mou_project-main/admin/themes/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('mou_project-main/admin/themes/js/demo/chart-pie-demo.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('mou_project-main/admin/themes/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('mou_project-main/admin/themes/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('mou_project-main/admin/themes/js/demo/datatables-demo.js')}}"></script>
    @yield('script')
</body>

</html>