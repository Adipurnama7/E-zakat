@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Donation Status Form</h4>
                    <form class="forms-sample" method="post" action="{{ route('donasi.update', $donasi) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Payer Data</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Donor Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_Donatur"
                                placeholder="Donor Name" value="{{ $donasi->Nama_Donatur }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Phone Number" value="{{ $donasi->No_Hp }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address" value="{{ $donasi->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Date:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="Tanggal_Donasi"
                                value="{{ $donasi->Tanggal_Donasi }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Total Donation</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Total_Donasi"
                                placeholder="Total Donation" value="{{ $donasi->Total_Donasi }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Payment Proof</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Bukti_Donasi"
                                placeholder="No Payment Proof" value="{{ $donasi->Bukti_Donasi }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStatus">Payment Status</label>
                            <select class="form-control" id="exampleInputStatus" name="Status_Validasi" required>
                                @foreach ($statusOptions as $status)
                                    <option value="{{ $status }}"
                                        {{ $donasi->Status_Validasi == $status ? 'selected' : '' }}>
                                        {{ $status }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('donasi.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
