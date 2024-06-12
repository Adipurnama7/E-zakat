<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('penyaluran.create') }}" class="btn btn-primary mr-2">Add Zakat Distribution</a>
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Distribution Data Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
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
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Date of Receipt</th>
                            <th>Recipient Name</th>
                            <th>Amount of Cash Receipt</th>
                            <th>Amount of Rice Receipt</th>
                            <th>Amil Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
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
                                    <form class="d-inline" action="{{ route('penyaluran.destroy', $pyl) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('penyaluran.edit', $pyl) }}" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
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
@endsection
