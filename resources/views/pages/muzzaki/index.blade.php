<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mr-2">Add Payment</a>
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Muzzaki Data Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Mosque</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Mosque</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($pembayaran as $pmby)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pmby->Nama_pembayar }}</td>
                                <td>{{ $pmby->Alamat }}</td>
                                <td>{{ $pmby->No_Hp }}</td>
                                <td>{{ $pmby->masjid->Nama_Masjid }}</td>
                                <td>
                                    <form class="d-inline" action="{{ route('pembayaran.destroy', $pmby) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('pembayaran.edit', $pmby) }}" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
