@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Recipient Data Table</h4>
                    <div class="form-inline">
                        <a href="{{ route('mustahik.create') }}" class="btn btn-primary mr-2">Add Recipient</a>
                        <form method="GET" action="{{ route('mustahik.index') }}" class="form-inline mt-2">
                            <input type="text" class="form-control form-control-sm mr-2" id="search" name="search"
                                placeholder="Search" value="{{ $searchQuery ?? '' }}">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </form>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Recipient's Name</th>
                                    <th>Recipient's Address</th>
                                    <th>Category</th>
                                    <th>Actions</th> <!-- Add this to indicate actions column -->
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
                                                    onclick="return confirm('Are you sure?')">Delete</button>
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
