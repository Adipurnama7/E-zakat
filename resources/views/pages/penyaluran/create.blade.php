@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Zakat Recipient Form</h4>
                    <form class="forms-sample" method="post" action="{{ route('penyaluran.store') }}">
                        @csrf
                        <h5 class="card-title1">Recipient Data</h5>
                        <div class="form-group">
                            <label for="nama_penerima">Recipient's Name</label>
                            <select class="form-control" id="nama_penerima" name="nama_penerima" required>
                                <option value="">-- Select --</option>
                                @foreach ($mustahik as $msk)
                                    <option value="{{ $msk->Nama_Penerima }}">{{ $msk->Nama_Penerima }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Receiving Method</label>
                            <select class="form-control" id="paymentMethod" name="payment_method" required>
                                <option value="">-- Select --</option>
                                <option value="Beras">Rice</option>
                                <option value="Uang">Cash</option>
                            </select>
                        </div>
                        <div class="form-group" id="jumlahUangGroup" style="display:none;">
                            <label for="jumlah_penerimaan_uang">Cash Receipt Amount</label>
                            <input type="text" class="form-control" id="jumlah_penerimaan_uang"
                                name="jumlah_penerimaan_uang" placeholder="Cash Receipt Amount">
                        </div>
                        <div class="form-group" id="jumlahBerasGroup" style="display:none;">
                            <label for="jumlah_penerimaan_beras">Rice Receipt Amount</label>
                            <input type="text" class="form-control" id="jumlah_penerimaan_beras"
                                name="jumlah_penerimaan_beras" placeholder="Rice Receipt Amount">
                        </div>
                        <div class="form-group">
                            <label for="amilName">Amil's Name:</label>
                            <input type="text" class="form-control" id="amilName" name="nama_amil"
                                value="{{ Auth::user()->name ?? '' }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Date:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="tanggal_penerimaan"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('penyaluran.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("paymentMethod").addEventListener("change", function() {
            var paymentMethod = this.value;
            var jumlahUangGroup = document.getElementById("jumlahUangGroup");
            var jumlahBerasGroup = document.getElementById("jumlahBerasGroup");

            if (paymentMethod === "Uang") {
                jumlahUangGroup.style.display = "block";
                jumlahBerasGroup.style.display = "none";
            } else if (paymentMethod === "Beras") {
                jumlahUangGroup.style.display = "none";
                jumlahBerasGroup.style.display = "block";
            } else {
                jumlahUangGroup.style.display = "none";
                jumlahBerasGroup.style.display = "none";
            }
        });

        document.getElementById("jumlah_penerimaan_uang").addEventListener("input", function() {
            // Remove commas when entering numbers
            this.value = this.value.replace(/,/g, '');
        });

        // Function to format numbers
        function formatNumber(input) {
            var value = input.value.replace(/,/g, "");
            if (!isNaN(value)) {
                input.value = Number(value).toLocaleString("en");
            }
        }
    </script>
@endsection
