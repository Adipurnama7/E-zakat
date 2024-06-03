@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Pembayaran Zakat</h4>

                    <form class="forms-sample" method="post" action="{{ route('pembayaran.update', $pembayaran) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Data Pembayar</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Nama Pembayar" value="{{ $pembayaran->Nama_pembayar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">No.Hp Pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Telepon" value="{{ $pembayaran->No_Hp }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Alamat" value="{{ $pembayaran->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Masjid:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                <option value="{{ $pembayaran->masjid_id }}" selected>
                                    {{ $pembayaran->masjid->Nama_Masjid ?? '-- Pilih Masjid --' }}</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h5 class="card-title1">Data Zakat</h5>
                        <div class="form-group">
                            <label for="jumlahMuzzaki">Jumlah Tanggungan</label>
                            <input type="text" class="form-control" id="jumlahMuzzaki" name="Jumlah_Tanggungan"
                                placeholder="Tanggungan" value="{{ $pembayaran->Jumlah_Tanggungan }}">
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Metode Pembayaran</label>
                            <select class="form-control" id="paymentMethod">
                                <option value="">-- Pilih --</option>
                                <option value="Beras" {{ $pembayaran->Pembayaran_Beras ? 'selected' : '' }}>Beras</option>
                                <option value="Uang" {{ $pembayaran->Pembayaran_Uang ? 'selected' : '' }}>Uang</option>
                            </select>
                        </div>
                        <div class="form-group" id="berasPayment"
                            style="display: {{ $pembayaran->Pembayaran_Beras ? 'block' : 'none' }};">
                            <label for="berasAmount">Pembayaran Beras (Kg)</label>
                            <select class="form-control" name="Pembayaran_Beras" id="berasAmount">
                                <option value="">-- Pilih --</option>
                                <option value="2.5" {{ $pembayaran->Pembayaran_Beras == 2.5 ? 'selected' : '' }}>2.5
                                </option>
                                <option value="2.7" {{ $pembayaran->Pembayaran_Beras == 2.7 ? 'selected' : '' }}>2.7
                                </option>
                            </select>
                        </div>
                        <div class="form-group" id="uangPayment"
                            style="display: {{ $pembayaran->Pembayaran_Uang ? 'block' : 'none' }};">
                            <label for="uangAmount">Pembayaran Uang</label>
                            <input type="text" class="form-control" id="uangAmount" name="Pembayaran_Uang"
                                placeholder="Jumlah uang yang dibayar" value="{{ $pembayaran->Pembayaran_Uang }}">
                        </div>
                        <div class="form-group" id="totalPembayaranBeras"
                            style="display: {{ $pembayaran->Pembayaran_Beras ? 'block' : 'none' }};">
                            <label for="totalPembayaranBerasInput">Total Pembayaran Beras</label>
                            <input type="text" class="form-control" id="totalPembayaranBerasInput"
                                name="Total_Pembayaran_Beras" placeholder="Total Pembayaran Beras"
                                value="{{ $pembayaran->Total_Pembayaran_Beras }}" readonly>
                        </div>
                        <div class="form-group" id="totalPembayaranUang"
                            style="display: {{ $pembayaran->Pembayaran_Uang ? 'block' : 'none' }};">
                            <label for="totalPembayaranUangInput">Total Pembayaran Uang</label>
                            <input type="text" class="form-control" id="totalPembayaranUangInput"
                                name="Total_Pembayaran_Uang" placeholder="Total Pembayaran Uang"
                                value="{{ $pembayaran->Total_Pembayaran_Uang }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="amilName">Nama Amil:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="Tanggal_pembayaran"
                                value="{{ $pembayaran->Tanggal_pembayaran }}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('pembayaran.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("paymentMethod").addEventListener("change", function() {
            var selectedValue = this.value;
            var berasPayment = document.getElementById("berasPayment");
            var uangPayment = document.getElementById("uangPayment");
            var totalPembayaranBeras = document.getElementById("totalPembayaranBeras");
            var totalPembayaranUang = document.getElementById("totalPembayaranUang");

            berasPayment.style.display = selectedValue === "Beras" ? "block" : "none";
            uangPayment.style.display = selectedValue === "Uang" ? "block" : "none";

            totalPembayaranBeras.style.display = selectedValue === "Beras" ? "block" : "none";
            totalPembayaranUang.style.display = selectedValue === "Uang" ? "block" : "none";

            calculateTotal();
        });

        document.getElementById("berasAmount").addEventListener("change", calculateTotal);
        document.getElementById("uangAmount").addEventListener("input", calculateTotal);
        document.getElementById("jumlahMuzzaki").addEventListener("input", calculateTotal);

        function calculateTotal() {
            var jumlahMuzzaki = parseFloat(document.getElementById("jumlahMuzzaki").value) || 0;
            var paymentMethod = document.getElementById("paymentMethod").value;

            if (paymentMethod === "Beras") {
                var berasAmount = parseFloat(document.getElementById("berasAmount").value) || 0;
                document.getElementById("totalPembayaranBerasInput").value = (berasAmount * jumlahMuzzaki).toFixed(2);
                document.getElementById("totalPembayaranUangInput").value = "";
            } else if (paymentMethod === "Uang") {
                var uangAmount = parseFloat(document.getElementById("uangAmount").value) || 0;
                document.getElementById("totalPembayaranUangInput").value = (uangAmount * jumlahMuzzaki).toFixed(2);
                document.getElementById("totalPembayaranBerasInput").value = "";
            } else {
                document.getElementById("totalPembayaranBerasInput").value = "";
                document.getElementById("totalPembayaranUangInput").value = "";
            }
        }
    </script>
@endsection
