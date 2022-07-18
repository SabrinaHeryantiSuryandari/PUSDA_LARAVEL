<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #82DBD8;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center text-dark" href="/home">
                <div class="sidebar-brand-icon">
                    <img src="img/logo.png" alt="Image" width="110px" height="39px">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="background-color: #53c6c3;">
            <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" style="background-color: #53c6c3;">

                <!-- Heading -->
                <div class="sidebar-heading text-gray-50 ">
                    Data Aset Tanah
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                {{-- <li class="nav-item @yield('input-data')">
                <li class="nav-item collapsed"> --}}
                    {{-- <a class="nav-link text-dark" href="/create"> --}}
                    {{-- <a class="nav-link text-dark @yield('input-data-collapse')" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> --}}
                    {{-- <a class="nav-link text-dark" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> --}}
                        {{-- <i class="fas fa-fw fa-cog"></i> --}}
                        {{-- <i class="fa-solid fa-chart-pie"></i>
                        <span>Input Data</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item @yield('input-sudah')" href="{{ url('/create') }}">Tersertifikasi</a>
                            <a class="collapse-item @yield('input-belum')" href="{{ url('/belum-create') }}">Belum Tersertifikasi</a>
                        </div>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span>Input Data</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item active" href="tambah">Tersertifikasi</a>
                            <a class="collapse-item active" href="create">Belum Tersertifikasi</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link collapsed text-dark" href="/asets">
                        {{-- <i class="fas fa-fw fa-wrench"></i> --}}
                        <i class="fas fa-clipboard-list"></i>
                        <span>Laporan Data</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" style="background-color: #53c6c3;">

                <!-- Heading -->
                <div class="sidebar-heading text-gray-50">
                    Pengaturan
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item active">
                    {{-- <a class="nav-link collapsed text-dark" href="/admin"> --}}
                    <a class="nav-link collapsed text-dark" href="/pengguna">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pengguna</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" style="background-color: #53c6c3;">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: #52a4a1;"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow"
                    style="background-color: #2F8F9D;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="col-lg-6 mt-3">
                        <span style="color : #B3E8E5;">
                            Pusat Informasi Inventarisasi Aset Tanah
                        </span>
                        <p class="text-white">
                            Provinsi Jawa Timur
                        </p>
                    </div>

                    <!-- Topbar Search -->
                    <div class="container row">
                        <div class="col-lg-12 nav justify-content-end">

                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small "
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar search -->

                    <!-- Topbar Navbar -->
                    {{-- <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white small">Douglas McGee</span>
                            <img class="img-profile rounded-circle"
                            src="{{ asset('template/img/undraw_profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> 
                                 <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>  --}}

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            @else
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                src="{{ asset('template/img/undraw_profile.svg')}}">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                        {{-- isi --}}
                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                {{-- <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow"> --}}

                    <footer class="sticky-footer" style="background-color: #2F8F9D;">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span class="text-white">Dinas Pekerjaan Umum Sumber Daya Air</span>
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
                    <a class="btn btn-primary" href="welcome">Logout</a>
                </div>
            </div>
        </div>
    </div>

{{-- @section --}}
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('template/js/demo/datatables-demo.js')}}"></script> --}}

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
    <script>
        //message with toastr
        @if(session()->has('success'))

        toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>


{{-- @endsection --}}
</body>

</html>
