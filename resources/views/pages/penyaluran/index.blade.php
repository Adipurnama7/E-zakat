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
                                    <th>Jumlah Penerimaan Uang </th>
                                    <th>Jumlah Penerimaan Beras </th>
                                    <th>Nama Amil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($penyaluran as $pyl)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pyl->tanggal_penerimaan }}</td>
                                        <td>{{ $pyl->nama_penerima }}</td>
                                        <td>Rp.{{ number_format($pyl->jumlah_penerimaan_uang) }}</td>
                                        <td>{{ $pyl->jumlah_penerimaan_beras }} Kg</td>
                                        <td>{{ $pyl->nama_amil }}</td>
                                        <td> <!-- Add this to contain actions -->
                                            <form class="d-inline" action="{{ route('penyaluran.destroy', $pyl) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('penyaluran.edit', $pyl) }}"
                                                class="btn btn-primary btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <br>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p><strong>Total Penyaluran Beras:</strong> {{ $TotalPenyaluranBeras }} Kg
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p><strong>Total Penyaluran Uang:</strong> Rp. {{ number_format($TotalPenyaluranUang) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
