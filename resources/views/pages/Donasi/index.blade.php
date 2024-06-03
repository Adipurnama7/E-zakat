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
                                @foreach ($donasi as $dns)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dns->Tanggal_Donasi }}</td>
                                        <td>{{ $dns->Nama_Donatur }}</td>
                                        <td>{{ $dns->No_Hp }}</td>
                                        <td>{{ $dns->Alamat }}</td>
                                        <td>{{ $dns->Total_Donasi }}</td>
                                        <td>
                                            @if ($dns->Bukti_Donasi)
                                                <a href="{{ asset('images/' . $dns->Bukti_Donasi) }}" data-lightbox="gallery"
                                                    class="lightbox-image">
                                                    <img src="{{ asset('images/' . $dns->Bukti_Donasi) }}"
                                                        alt="Bukti Donasi"
                                                        style="width: 100px; height: 100px; object-fit: cover; border-radius: 0;">
                                                </a>
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>
                                            @if ($dns->Status_Validasi == 'Accepted')
                                                <div class="badge badge-success">{{ $dns->Status_Validasi }}</div>
                                            @elseif ($dns->Status_Validasi == 'Rejected')
                                                <div class="badge badge-danger">{{ $dns->Status_Validasi }}</div>
                                            @else
                                                <div class="badge badge-warning">{{ $dns->Status_Validasi }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <form class="d-inline" action="{{ route('donasi.destroy', $dns) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('donasi.edit', $dns) }}"
                                                class="btn btn-primary btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
