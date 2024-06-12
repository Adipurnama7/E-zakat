@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Zakat Payment Form</h4>
                    <form class="forms-sample" method="post" action="{{ route('pembayaran.store') }}">
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

                        <h5 class="card-title1">Zakat Information</h5>
                        <div class="form-group">
                            <label for="jumlahMuzzaki">Number of Dependents</label>
                            <input type="text" class="form-control" id="jumlahMuzzaki" name="Jumlah_Tanggungan"
                                placeholder="Number of Dependents" required>
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Payment Method</label>
                            <select class="form-control" id="paymentMethod" name="payment_method" required>
                                <option value="">-- Select --</option>
                                <option value="Beras">Rice</option>
                                <option value="Uang">Money</option>
                            </select>
                        </div>

                        <div class="form-group" id="berasPayment" style="display: none;">
                            <label for="berasAmount">Rice Payment (Kg)</label>
                            <select class="form-control" name="Pembayaran_Beras" id="berasAmount">
                                <option value="">-- Select --</option>
                                <option value="2.5">2.5</option>
                                <option value="2.7">2.7</option>
                            </select>
                        </div>

                        <div class="form-group" id="uangPayment" style="display: none;">
                            <label for="uangAmount">Money Payment</label>
                            <input type="text" class="form-control" id="uangAmount" name="Pembayaran_Uang"
                                placeholder="Amount of Money Paid">
                        </div>

                        <div class="form-group" id="totalPembayaranBeras" style="display: none;">
                            <label for="totalPembayaranBerasInput">Total Rice Payment</label>
                            <input type="text" class="form-control" id="totalPembayaranBerasInput"
                                name="Total_Pembayaran_Beras" placeholder="Total Rice Payment" readonly>
                        </div>

                        <div class="form-group" id="totalPembayaranUang" style="display: none;">
                            <label for="totalPembayaranUangInput">Total Money Payment</label>
                            <input type="text" class="form-control" id="totalPembayaranUangInput" name="Total_Pembayaran"
                                placeholder="Total Money Payment" readonly>
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
                        <a href="{{ route('pembayaran.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('paymentMethod').addEventListener('change', function() {
            var paymentMethod = this.value;
            var berasPayment = document.getElementById('berasPayment');
            var uangPayment = document.getElementById('uangPayment');
            var totalPembayaranBeras = document.getElementById('totalPembayaranBeras');
            var totalPembayaranUang = document.getElementById('totalPembayaranUang');

            if (paymentMethod === 'Beras') {
                berasPayment.style.display = 'block';
                uangPayment.style.display = 'none';
                totalPembayaranBeras.style.display = 'block';
                totalPembayaranUang.style.display = 'none';
            } else if (paymentMethod === 'Uang') {
                berasPayment.style.display = 'none';
                uangPayment.style.display = 'block';
                totalPembayaranBeras.style.display = 'none';
                totalPembayaranUang.style.display = 'block';
            } else {
                berasPayment.style.display = 'none';
                uangPayment.style.display = 'none';
                totalPembayaranBeras.style.display = 'none';
                totalPembayaranUang.style.display = 'none';
            }
        });

        function calculateTotalBeras() {
            var jumlahMuzzaki = parseFloat(document.getElementById('jumlahMuzzaki').value);
            var berasAmount = parseFloat(document.getElementById('berasAmount').value);
            if (!isNaN(jumlahMuzzaki) && !isNaN(berasAmount)) {
                document.getElementById('totalPembayaranBerasInput').value = (jumlahMuzzaki * berasAmount).toFixed(2);
            }
        }

        function calculateTotalUang() {
            var jumlahMuzzaki = parseFloat(document.getElementById('jumlahMuzzaki').value);
            var uangAmount = parseFloat(document.getElementById('uangAmount').value.replace(/,/g, ''));
            if (!isNaN(jumlahMuzzaki) && !isNaN(uangAmount)) {
                document.getElementById('totalPembayaranUangInput').value = (jumlahMuzzaki * uangAmount).toLocaleString(
                    'en');
            }
        }

        document.getElementById('berasAmount').addEventListener('change', calculateTotalBeras);
        document.getElementById('jumlahMuzzaki').addEventListener('input', calculateTotalBeras);
        document.getElementById('uangAmount').addEventListener('input', function() {
            var value = this.value.replace(/,/g, ''); // Remove commas
            this.value = value;
        });
    </script>
@endsection
