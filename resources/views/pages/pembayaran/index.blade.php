<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mr-2">Add Payment</a>
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Zakat Fitrah Payment Data
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Payment (Date)</th>
                            <th>Muzzaki</th>
                            <th>Payment (Rice)</th>
                            <th>Payment (Money)</th>
                            <th>Number of Dependents</th>
                            <th>Total Payment (Money)</th>
                            <th>Total Payment (Rice)</th>
                            <th>Amil</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Payment (Date)</th>
                            <th>Muzzaki</th>
                            <th>Payment (Rice)</th>
                            <th>Payment (Money)</th>
                            <th>Number of Dependents</th>
                            <th>Total Payment (Money)</th>
                            <th>Total Payment (Rice)</th>
                            <th>Amil</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $totalUang = 0;
                            $totalBeras = 0;
                        @endphp
                        @foreach ($zakatfitrah as $pmby)
                            @php
                                $totalUang += $pmby->Total_Pembayaran;
                                $totalBeras += $pmby->Total_Pembayaran_Beras;
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pmby->Tanggal_pembayaran }}</td>
                                <td>{{ $pmby->Nama_pembayar }}</td>
                                <td>{{ (float) $pmby->Pembayaran_Beras }} Kg</td>
                                <td>Rp. {{ number_format($pmby->Pembayaran_Uang) }}</td>
                                <td>{{ $pmby->Jumlah_Tanggungan }}</td>
                                <td>Rp. {{ number_format($pmby->Total_Pembayaran) }}</td>
                                <td>{{ (float) $pmby->Total_Pembayaran_Beras }} Kg</td>
                                @if ($pmby->user)
                                    <td>{{ $pmby->user->name }}</td>
                                @else
                                    <td>No related user</td>
                                @endif
                                <td>
                                    <form class="d-inline" action="{{ route('pembayaran.destroy', $pmby) }}"
                                        method="post">
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
            <div class="row">
                <div class="col-12 col-md-6">
                    <p><strong>Total Rice:</strong> {{ (float) $totalBeras }} Kg</p>
                </div>
                <div class="col-12 col-md-6">
                    <p><strong>Total Money:</strong> Rp. {{ number_format($totalUang) }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
