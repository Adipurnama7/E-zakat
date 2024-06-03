@extends('layouts.main')
@section('content')
    <main class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
                            <h6 class="font-weight-normal mb-0">Amil E-zakat, <span class="text-primary"> Bersihkan
                                    Harta
                                    Sucikan Jiwa </span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-3">Total Semua Uang</p>
                                    <p class="fs-30 mb-2">5.00000</p>
                                    <p>10.00% (30 days)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-3">Total Beras</p>
                                    <p class="fs-30 mb-2">500 Kg</p>
                                    {{-- <p>22.00% (30 days)</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-3">Jumlah Mustahik</p>
                                    <p class="fs-30 mb-2">50</p>
                                    {{-- <p>2.00% (30 days)</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-3"> Total Muzzaki</p>
                                    <p class="fs-30 mb-2">100</p>
                                    {{-- <p>0.22% (30 days)</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-3">Total Penyaluran Uang</p>
                                    <p class="fs-30 mb-2">30000</p>
                                    {{-- <p>10.00% (30 days)</p> --}}
                {{-- </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-3">Total Penyaluran Beras</p>
                                    <p class="fs-30 mb-2">250 Kg</p> --}}
                {{-- <p>22.00% (30 days)</p> --}}
                {{-- </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Number of Meetings</p>
                                    <p class="fs-30 mb-2">34040</p>
                                    <p>2.00% (30 days)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-4">Number of Clients</p>
                                    <p class="fs-30 mb-2">47033</p>
                                    <p>0.22% (30 days)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <br>
            <br>
            <br>
            <br>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a
                            href="https://www.bootstrapdash.com/" target="_blank"> </a>
                        . All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="ti-heart text-danger ml-1"></i></span>
                </div>
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                            href="" target="_blank">Kelompok 5</a></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </main>
@endsection
