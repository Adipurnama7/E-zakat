@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Tabel Data Penyaluran</h4>
                    <a href="{{ route('penyaluran.create') }}" class="btn btn-primary btn-rounded btn-fw"
                        style="margin-bottom: 15px;">Tambah Penerimaan
                        Zakat</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Penerimaan</th>
                                    <th>Nama Penerima</th>
                                    <th>Jumlah Penerimaan Uang (Rp)</th>
                                    <th>Jumlah Penerimaan Beras (Kg)</th>
                                    <th>Nama Amil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>May 15, 2015</td>
                                    <td>Herman Beck</td>
                                    <td>77.99</td>
                                    <td>0</td>
                                    <td>Admin</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>July 1, 2015</td>
                                    <td>Messsy Adam</td>
                                    <td>245.30</td>
                                    <td>0</td>
                                    <td>Admin</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
