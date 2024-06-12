<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('mustahik.create') }}" class="btn btn-primary mr-2">Add Recipient</a>
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Recipient Data Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Recipient's Name</th>
                            <th>Recipient's Address</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Recipient's Name</th>
                            <th>Recipient's Address</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($mustahik as $msk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $msk->Nama_Penerima }}</td>
                                <td>{{ $msk->Alamat_Penerima }}</td>
                                <td>{{ $msk->Kategori }}</td>

                                <td> <!-- Add this to contain actions -->
                                    <form class="d-inline" action="{{ route('mustahik.destroy', $msk) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('mustahik.edit', $msk) }}" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
