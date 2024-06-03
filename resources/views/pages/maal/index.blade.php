@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title1">Data Pembayaran Zakat Maal</h5>
                    <a href="{{ route('maal.create') }}" class="btn btn-primary btn-rounded btn-fw"
                        style="margin-bottom: 15px;">Tambah
                        Pembayaran</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Muzzaki</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    <th>Jenis Zakat</th>
                                    <th>Masjid</th>
                                    <th>Pembayaran Uang (Rp.)</th>
                                    <th>Nama Amil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalUang = 0;
                                @endphp
                                @foreach ($zakatmaal as $pmby)
                                    @php
                                        $totalUang += $pmby->Pembayaran_Uang;
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pmby->Tanggal_pembayaran }}</td>
                                        <td>{{ $pmby->Nama_pembayar }}</td>
                                        <td>{{ $pmby->Alamat }}</td>
                                        <td>{{ $pmby->No_Hp }}</td>
                                        <td>{{ $pmby->zakat->Jenis_Zakat }}</td>
                                        <td>{{ $pmby->masjid->Nama_Masjid }}</td>
                                        <td>{{ $pmby->Pembayaran_Uang }}</td>
                                        @if ($pmby->user)
                                            <td>{{ $pmby->user->name }}</td>
                                        @else
                                            <td>Tidak ada pengguna terkait</td>
                                        @endif

                                        <td>
                                            <form class="d-inline" action="{{ route('maal.destroy', $pmby) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('maal.edit', $pmby) }}"
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
                                <p><strong>Total Uang:</strong> Rp. {{ $totalUang }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
