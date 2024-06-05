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
                            <label for="exampleInputName1">Nama Muzzaki</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Nama Muzzaki" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">No. Hp Muzzaki</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="masjid">Masjid:</label>
                            <select class="form-control" id="masjid" name="masjid_id" required>
                                <option value="">-- Pilih Masjid --</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>

                        <h5 class="card-title1">Data Zakat</h5>
                        <div class="form-group">
                            <label for="jumlahMuzzaki">Jumlah Muzzaki</label>
                            <input type="text" class="form-control" id="jumlahMuzzaki" name="Jumlah_Tanggungan"
                                placeholder="Jumlah Muzzaki" required>
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Metode Pembayaran</label>
                            <select class="form-control" id="paymentMethod" required>
                                <option value="">-- Pilih --</option>
                                <option value="Beras">Beras</option>
                                <option value="Uang">Uang</option>
                            </select>
                        </div>

                        <div class="form-group" id="berasPayment" style="display: none;">
                            <label for="berasAmount">Pembayaran Beras (Kg)</label>
                            <select class="form-control" name="Pembayaran_Beras" id="berasAmount" required>
                                <option value="">-- Pilih --</option>
                                <option value="2.5">2.5</option>
                                <option value="2.7">2.7</option>
                            </select>
                        </div>

                        <div class="form-group" id="uangPayment" style="display: none;">
                            <label for="uangAmount">Pembayaran Uang</label>
                            <input type="text" class="form-control" id="uangAmount" name="Pembayaran_Uang"
                                placeholder="Jumlah uang yang dibayar" required>
                        </div>

                        <div class="form-group" id="totalPembayaranBeras" style="display: none;">
                            <label for="totalPembayaranBerasInput">Total Pembayaran Beras</label>
                            <input type="text" class="form-control" id="totalPembayaranBerasInput"
                                name="Total_Pembayaran_Beras" placeholder="Total Pembayaran Beras" readonly>
                        </div>

                        <div class="form-group" id="totalPembayaranUang" style="display: none;">
                            <label for="totalPembayaranUangInput">Total Pembayaran Uang</label>
                            <input type="text" class="form-control" id="totalPembayaranUangInput" name="Total_Pembayaran"
                                placeholder="Total Pembayaran Uang" readonly>
                        </div>

                        <div class="form-group">
                            <label for="amilName">Nama Amil:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="Tanggal_pembayaran"
                                required>
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
