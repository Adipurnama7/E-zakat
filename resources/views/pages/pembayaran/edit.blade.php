@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Pembayaran Zakat</h4>
                    <form class="forms-sample" method="post" action="{{ route('pembayaran.update', $zakatfitrah) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">
                            Data Pembayar</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1"name="Nama_pembayar"
                                placeholder="Nama_pembayar" value="{{ $zakatfitrah->Nama_pembayar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">No.Hp Pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Telepon" value="{{ $zakatfitrah->No_Hp }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Alamat" value="{{ $zakatfitrah->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Masjid:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                <option value="{{ $zakatfitrah->masjid_id }}">-- Pilih Masjid --</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h5 class="card-title1">Data Zakat</h5>

                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Tanggungan</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Jumlah_Tanggungan"
                                placeholder="Tanggungan" value="{{ $zakatfitrah->Jumlah_Tanggungan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Pembayaran Beras Kg </label>
                            <select class="form-control" name="Pembayaran_Beras" id="exampleSelectGender">
                                <option value="{{ $zakatfitrah->Pembayaran_Beras }}">-- Pilih --
                                </option>
                                <option>2.7 </option>
                                <option>2.5 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pembayran Uang</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Pembayaran_Uang"
                                placeholder="jumlah uang yang di bayar  " value="{{ $zakatfitrah->Pembayaran_Uang }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Total Pembayaran</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Uang_Yang_Dibayar"
                                placeholder="jumlah uang yang di bayar " value="{{ $zakatfitrah->Total_Pembayaran }}">
                        </div>
                        <div class="form-group">
                            <label for="amilName">Nama Amil:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name= "Tanggal_pembayaran"
                                value="{{ $zakatfitrah->Tanggal_pembayaran }}">
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
