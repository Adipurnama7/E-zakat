@extends('layouts.main')
@section('content')
    <main class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
                            <h6 class="font-weight-normal mb-0">Amil E-zakat, <span class="text-primary"> Clean our treasure
                                    purify our soul </span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-tale h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Total ( Money )</p>
                                    <p class="fs-30 mb-2">Rp. {{ number_format($totalPengeluaranUang) }}</p>
                                    <p>Zakat Fitrah & Maal (Rp. {{ number_format($totalSemuaUang) }}) </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-tale h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Distribution ( Money )</p>
                                    <p class="fs-30 mb-2">Rp. {{ number_format($TotalPenyaluranUang) }} </p>
                                    <p>Total Distribution (Money)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-tale h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Total Recipient</p>
                                    <p class="fs-30 mb-2">{{ number_format($totalMustahik) }}</p>
                                    <p>All Recipient</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Total ( Rice )</p>
                                    <p class="fs-30 mb-2">{{ $totalSemuaBeras }} Kg</p>
                                    <p>Zakat Al-Fitr {{ $totalBeras }} Kg</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Total ( Rice )</p>
                                    <p class="fs-30 mb-2">{{ $TotalPenyaluranBeras }} Kg</p>
                                    <p>Total Distribution (Rice)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Total Donations</p>
                                    <p class="fs-30 mb-2">Rp. {{ number_format($totalDonasi) }}</p>
                                    <p>All Donations</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-light-danger h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Zakat Fitrah Giver</p>
                                    <p class="fs-30 mb-2">{{ number_format($totalMuzzaki) }}</p>
                                    <p>Total Zakat Fitrah Giver</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-light-danger h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Zakat Maal Giver</p>
                                    <p class="fs-30 mb-2">{{ number_format($totalMuzzakiMaal) }}</p>
                                    <p>Total Zakat Maal Giver</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card card-light-danger h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="mb-3">Mosques</p>
                                    <p class="fs-30 mb-2">{{ number_format($masjid) }}</p>
                                    <p>Total Collaborating Mosques</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a
                            href="" target="_blank"> </a>
                        . All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Team 5 <i
                            class="ti-heart text-danger ml-1"></i></span>
                </div>
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                            href="" target="_blank">Team 5</a></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </main>
@endsection
