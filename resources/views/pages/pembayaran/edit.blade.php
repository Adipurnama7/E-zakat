@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Zakat Payment Form</h4>

                    <form class="forms-sample" method="post" action="{{ route('pembayaran.update', $pembayaran) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Muzzaki Information</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Muzzaki Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Payer Name" value="{{ $pembayaran->Nama_pembayar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Muzzaki Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Phone Number" value="{{ $pembayaran->No_Hp }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address" value="{{ $pembayaran->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Mosque:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                <option value="{{ $pembayaran->masjid_id }}" selected>
                                    {{ $pembayaran->masjid->Nama_Masjid ?? '-- Select Mosque --' }}</option>
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}">{{ $msjid->Nama_Masjid }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h5 class="card-title1">Zakat Information</h5>
                        <div class="form-group">
                            <label for="jumlahMuzzaki">Number of Dependents</label>
                            <input type="text" class="form-control" id="jumlahMuzzaki" name="Jumlah_Tanggungan"
                                placeholder="Dependents" value="{{ $pembayaran->Jumlah_Tanggungan }}">
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Payment Method</label>
                            <select class="form-control" id="paymentMethod">
                                <option value="">-- Select --</option>
                                <option value="Beras" {{ $pembayaran->Pembayaran_Beras ? 'selected' : '' }}>Rice</option>
                                <option value="Uang" {{ $pembayaran->Pembayaran_Uang ? 'selected' : '' }}>Money</option>
                            </select>
                        </div>
                        <div class="form-group" id="berasPayment"
                            style="display: {{ $pembayaran->Pembayaran_Beras ? 'block' : 'none' }};">
                            <label for="berasAmount">Rice Payment (Kg)</label>
                            <select class="form-control" name="Pembayaran_Beras" id="berasAmount">
                                <option value="">-- Select --</option>
                                <option value="2.5" {{ $pembayaran->Pembayaran_Beras == 2.5 ? 'selected' : '' }}>2.5
                                </option>
                                <option value="2.7" {{ $pembayaran->Pembayaran_Beras == 2.7 ? 'selected' : '' }}>2.7
                                </option>
                            </select>
                        </div>
                        <div class="form-group" id="uangPayment"
                            style="display: {{ $pembayaran->Pembayaran_Uang ? 'block' : 'none' }};">
                            <label for="uangAmount">Money Payment</label>
                            <input type="text" class="form-control" id="uangAmount" name="Pembayaran_Uang"
                                placeholder="Amount of money paid" value="{{ $pembayaran->Pembayaran_Uang }}">
                        </div>
                        <div class="form-group" id="totalPembayaranBeras"
                            style="display: {{ $pembayaran->Pembayaran_Beras ? 'block' : 'none' }};">
                            <label for="totalPembayaranBerasInput">Total Rice Payment</label>
                            <input type="text" class="form-control" id="totalPembayaranBerasInput"
                                name="Total_Pembayaran_Beras" placeholder="Total Rice Payment"
                                value="{{ $pembayaran->Total_Pembayaran_Beras }}" readonly>
                        </div>
                        <div class="form-group" id="totalPembayaranUang"
                            style="display: {{ $pembayaran->Pembayaran_Uang ? 'block' : 'none' }};">
                            <label for="totalPembayaranUangInput">Total Money Payment</label>
                            <input type="text" class="form-control" id="totalPembayaranUangInput" name="Total_Pembayaran"
                                placeholder="Total Money Payment" value="{{ $pembayaran->Total_Pembayaran_Uang }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="amilName">Amil Name:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Date:</label>
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

        // Initial calculation on page load
        calculateTotal();
    </script>
@endsection
