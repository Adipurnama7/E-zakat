@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Donation Data Table</h4>
                    <div class="form-inline">
                        <form method="GET" action="{{ route('donasi.index') }}" class="form-inline mt-2">
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
                                                <a href="{{ asset('images/' . $dns->Bukti_Donasi) }}"
                                                    data-lightbox="gallery" class="lightbox-image">
                                                    <img src="{{ asset('images/' . $dns->Bukti_Donasi) }}"
                                                        alt="Donation Proof"
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
                                            <form class="d-inline" action="{{ route('donasi.destroy', $dns) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
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
