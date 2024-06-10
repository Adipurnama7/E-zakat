Sure, here is the translated version of your Blade template into English:

```blade
@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Zakat Maal Payment Form</h4>

                    <form class="forms-sample" method="post" action="{{ route('maal.update', $zakatmaal->id) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Payer Information</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Payer Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Payer Name" value="{{ $zakatmaal->Nama_pembayar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Payer Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Phone Number" value="{{ $zakatmaal->No_Hp }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address" value="{{ $zakatmaal->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Mosque:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}"
                                        {{ $zakatmaal->masjid_id == $msjid->id ? 'selected' : '' }}>
                                        {{ $msjid->Nama_Masjid }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h5 class="card-title1">Zakat Information</h5>
                        <div class="form-group">
                            <label for="zakat">Type of Zakat:</label>
                            <select class="form-control" id="zakat" name="zakat_id">
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}"
                                        {{ $zakatmaal->zakat_id == $zkt->id ? 'selected' : '' }}>
                                        {{ $zkt->Jenis_Zakat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlahTanggungan">Number of Dependents</label>
                            <input type="text" class="form-control" id="jumlahTanggungan" name="Jumlah_Tanggungan"
                                placeholder="Dependents" value="{{ $zakatmaal->Jumlah_Tanggungan }}">
                        </div>
                        <div class="form-group">
                            <label for="zakat">Type of Zakat:</label>
                            <select class="form-control" id="zakat" name="zakat_id">
                                <option value="{{ $zakatmaal->zakat_id }}" selected>
                                    {{ $zakatmaal->zakat->Jenis_Zakat ?? '-- Select Zakat --' }}</option>
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}">{{ $zkt->Jenis_Zakat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Money Payment</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Pembayaran_Uang"
                                placeholder="Amount of money paid" value="{{ $zakatmaal->Pembayaran_Uang }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Total Payment</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Total_Pembayaran"
                                placeholder="Total Payment" value="{{ $zakatmaal->Total_Pembayaran }}">
                        </div>
                        <div class="form-group">
                            <label for="amilName">Amil Name:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Date:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="Tanggal_pembayaran"
                                value="{{ $zakatmaal->Tanggal_pembayaran }}">
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
