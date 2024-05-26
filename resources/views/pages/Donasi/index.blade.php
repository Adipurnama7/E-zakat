@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Tabel Data Donasi</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Donasi</th>
                                    <th>Nama Donatur</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Total Donasi</th>
                                    <th>Bukti Donasi</th>
                                    <th>Status Validasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>


                                <td>No</td>
                                <td>Tanggal Donasi</td>
                                <td>Nama Donatur</td>
                                <td>No HP</td>
                                <td>Alamat</td>
                                <td>Total Donasi</td>
                                <td>Bukti Donasi</td>
                                <td>
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                                <td>
                                    <form class="d-inline" action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                    </form>
                                    <a href="" class="btn btn-primary btn-xs">Edit</button>
                                </td>
                                </td>
                            </tbody>
                        </table>
                        <br>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p><strong>Total Beras:</strong> Kg </p>
                            </div>
                            <div class="col-12 col-md-6">
                                {{-- <p><strong>Total Uang:</strong> Rp. {{ $pmby->Total_Pembayaran }} </p> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
