<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')
<!-- final -->
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Donation Data Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Donation Date</th>
                            <th>Donor Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Total Donation</th>
                            <th>Donation Proof</th>
                            <th>Validation Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Donation Date</th>
                            <th>Donor Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Total Donation</th>
                            <th>Donation Proof</th>
                            <th>Validation Status</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($donasi as $dns)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dns->Tanggal_Donasi }}</td>
                                <td>{{ $dns->Nama_Donatur }}</td>
                                <td>{{ $dns->No_Hp }}</td>
                                <td>{{ $dns->Alamat }}</td>
                                <td>Rp. {{ number_format($dns->Total_Donasi) }}</td>
                                <td>
                                    @if ($dns->Bukti_Donasi)
                                        <a href="{{ asset('images/' . $dns->Bukti_Donasi) }}" data-lightbox="gallery"
                                            class="lightbox-image">
                                            <img src="{{ asset('images/' . $dns->Bukti_Donasi) }}" alt="Donation Proof"
                                                style="width: 100px; height: 100px; object-fit: cover; border-radius: 0;">
                                        </a>
                                    @else
                                        No image available
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
                                    <form class="d-inline" action="{{ route('donasi.destroy', $dns) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('donasi.edit', $dns) }}" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
