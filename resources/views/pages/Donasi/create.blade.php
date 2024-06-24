@extends('layouts.main')
<!-- final -->
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Zakat Payment Form</h4>
                    <form class="forms-sample" method="post" action="{{ route('pembayaran.store') }}">
                        @csrf
                        <h5 class="card-title1">Payer Data</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Payer's Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Payer's Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Payer's Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Mosque:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                <option value="">-- Select Mosque --</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h5 class="card-title1">Zakat Data</h5>
                        <div class="form-group">
                            <label for="zakat">Zakat Type:</label>
                            <select class="form-control" id="zakat" name="zakat_id">
                                <option value="">-- Select Zakat --</option>
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}">{{ $zkt->Jenis_Zakat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Number of Dependents</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Jumlah_Tanggungan"
                                placeholder="Dependents">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Rice Payment (kg)</label>
                            <select class="form-control" name="Pembayaran_Beras" id="exampleSelectGender">
                                <option value="">-- Select --</option>
                                <option>2.7 </option>
                                <option>2.5 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Cash Payment</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Pembayaran_Uang"
                                placeholder="amount paid in cash">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Paid Amount</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Uang_Yang_Dibayar"
                                placeholder="amount paid">
                        </div>
                        <div class="form-group">
                            <label for="amilName">Amil Name:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Date:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name= "Tanggal_pembayaran">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('pembayaran.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
