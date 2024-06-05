@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Tabel Data Penerima</h4>
                    <a href="{{ route('mustahik.create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Penerima</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat Penerima</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th> <!-- Add this to indicate actions column -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mustahik as $msk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $msk->Nama_Penerima }}</td>
                                        <td>{{ $msk->Alamat_Penerima }}</td>
                                        <td>{{ $msk->Kategori }}</td>

                                        <td> <!-- Add this to contain actions -->
                                            <form class="d-inline" action="{{ route('mustahik.destroy', $msk) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('mustahik.edit', $msk) }}"
                                                class="btn btn-primary btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
