<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('Masjid.create') }}" class="btn btn-primary mr-2">Add Mosque</a>
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Zakat Data Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Masjid Name</th>
                            <th>Address</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Action</th>
                    </thead>
                    <tfoot>

                        <tr>
                            <th>No</th>
                            <th>Masjid Name</th>
                            <th>Address</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($masjid as $msj)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $msj->Nama_Masjid }}</td>
                                <td>{{ $msj->Alamat }}</td>
                                <td>{{ $msj->RT }}</td>
                                <td>{{ $msj->RW }}</td>
                                <td>
                                    <form class="d-inline" action="{{ route('Masjid.destroy', $msj) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('Masjid.edit', $msj) }}" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
