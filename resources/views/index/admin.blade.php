@extends('layouts/index')
@section('content')
    @section('title')
        {{'halaman admin'}}
    @endsection
    @section('judul')
        {{'Dashboard'}}
    @endsection
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fa-duotone fa-circle-caret-right"></i> --}}
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Earnings (Annual)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Tasks</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7 </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>         
    </div>

</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="card text-center mx-3 my-3 col-12">
        <div class="card-header">
            Featured
        </div>
        <canvas id="myChart" width="400" height="100"></canvas>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</div>

                    
@endsection