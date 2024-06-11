@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Distribution Data Table</h4>
                    <div class="form-inline">
                        <a href="{{ route('penyaluran.create') }}" class="btn btn-primary mr-2">Add Zakat Distribution</a>
                        <form method="GET" action="{{ route('penyaluran.index') }}" class="form-inline mt-3">
                            <input type="text" class="form-control form-control-sm mr-2" id="search" name="search"
                                placeholder="Search" value="{{ $searchQuery ?? '' }}">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date of Receipt</th>
                                    <th>Recipient Name</th>
                                    <th>Amount of Cash Receipt</th>
                                    <th>Amount of Rice Receipt</th>
                                    <th>Amil Name</th>
                                    <th>Action</th>
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
                                                    onclick="return confirm('Are you sure?')">Delete</button>
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
                                <p><strong>Total Rice Distribution:</strong> {{ $TotalPenyaluranBeras }} Kg
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p><strong>Total Cash Distribution:</strong> Rp. {{ number_format($TotalPenyaluranUang) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
