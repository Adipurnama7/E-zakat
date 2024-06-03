@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title1">Data Pembayaran Zakat fitrah</h5>
                    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary btn-rounded btn-fw"
                        style="margin-bottom: 15px;">Tambah
                        Pembayaran</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Muzzaki</th>
                                    <th>Pembayaran Beras</th>
                                    <th>Pembayaran Uang</th>
                                    <th>Jumlah Muzzaki</th>
                                    <th>Total Pembayaran</th>
                                    <th>Nama Amil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zakatfitrah as $pmby)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pmby->Tanggal_pembayaran }}</td>
                                        <td>{{ $pmby->Nama_pembayar }}</td>
                                        <td>{{ $pmby->Pembayaran_Beras }}</td>
                                        <td>{{ $pmby->Pembayaran_Uang }}</td>
                                        <td>{{ $pmby->Jumlah_Tanggungan }}</td>
                                        <td>{{ $pmby->Total_Pembayaran }}</td>
                                        @if ($pmby->user)
                                            <td>{{ $pmby->user->name }}</td>
                                        @else
                                            <td>Tidak ada pengguna terkait</td>
                                        @endif

                                        <td>
                                            <form class="d-inline" action="{{ route('pembayaran.destroy', $pmby) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('pembayaran.edit', $pmby) }}"
                                                class="btn btn-primary btn-xs">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p><strong>Total Beras:</strong> Kg </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p><strong>Total Uang:</strong> Rp. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
