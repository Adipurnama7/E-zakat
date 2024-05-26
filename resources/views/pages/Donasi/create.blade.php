@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Pembayaran Zakat</h4>
                    <form class="forms-sample" method="post" action="{{ route('pembayaran.store') }}">
                        @csrf
                        <h5 class="card-title1">Data Pembayar</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1"name="Nama_pembayar"
                                placeholder="Nama_pembayar">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">No.Hp Pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Telepon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Masjid:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                <option value="">-- Pilih Masjid --</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>


                        <h5 class="card-title1">Data Zakat</h5>
                        <div class="form-group">
                            <label for="zakat">Jenis Zakat:</label>
                            <select class="form-control" id="zakat" name="zakat_id">
                                <option value="">-- Pilih Zakat --</option>
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}">{{ $zkt->Jenis_Zakat }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Tanggungan</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Jumlah_Tanggungan"
                                placeholder="Tanggungan">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Pembayaran Beras Kg </label>
                            <select class="form-control" name="Pembayaran_Beras" id="exampleSelectGender">
                                <option value="">-- Pilih --</option>
                                <option>2.7 </option>
                                <option>2.5 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pembayran Uang</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Pembayaran_Uang"
                                placeholder="jumlah uang yang di bayar ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Uang Yang Dibayarkan</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Uang_Yang_Dibayar"
                                placeholder="jumlah uang yang di bayar ">
                        </div>
                        <div class="form-group">
                            <label for="amilName">Nama Amil:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
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
