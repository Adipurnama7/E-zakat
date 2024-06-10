@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Masjid Data Table</h4>
                    <a href="{{ route('Masjid.create') }}" class="btn btn-primary btn-rounded btn-fw">Add Masjid
                        Partnership</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Masjid Name</th>
                                    <th>Address</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masjid as $msj)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $msj->Nama_Masjid }}</td>
                                        <td>{{ $msj->Alamat }}</td>
                                        <td>{{ $msj->RT }}</td>
                                        <td>{{ $msj->RW }}</td>
                                        <td>
                                            <form class="d-inline" action="{{ route('Masjid.destroy', $msj) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                            <a href="{{ route('Masjid.edit', $msj) }}"
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
