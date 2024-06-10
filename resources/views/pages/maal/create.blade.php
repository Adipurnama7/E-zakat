Sure, here is the translated version of your Blade template into English:

```blade
@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Zakat Maal Payment Form</h4>
                    <form class="forms-sample" method="post" action="{{ route('maal.store') }}">
                        @csrf
                        <h5 class="card-title1">Muzzaki Information</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Muzzaki Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Muzzaki Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Muzzaki Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="masjid">Mosque:</label>
                            <select class="form-control" id="masjid" name="masjid_id" required>
                                <option value="">-- Select Mosque --</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="zakat">Type of Zakat:</label>
                            <select class="form-control" id="zakat" name="zakat_id" required>
                                <option value="">-- Select Zakat --</option>
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}">{{ $zkt->Jenis_Zakat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Money Payment</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Pembayaran_Uang"
                                placeholder="Money Payment" required>
                        </div>

                        <div class="form-group">
                            <label for="amilName">Amil Name:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Date:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="Tanggal_pembayaran"
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('maal.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
```
