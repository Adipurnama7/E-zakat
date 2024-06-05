@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Penerima Zakat</h4>
                    <form class="forms-sample" method="post" action="{{ route('penyaluran.store') }}">
                        @csrf
                        <h5 class="card-title1">Data Penerima</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Penerima</label>
<<<<<<< HEAD
                            <select id="nama_penerima" name="Nama_Penerima" required>
                                @foreach($mustahik as $msk)
                                    <option value="{{ $msk->Nama_Penerima }}">{{ $msk->Nama_Penerima }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Penerimaan Uang</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="jumlah_penerimaan_uang"
=======
                            <input type="text" class="form-control" id="exampleInputName1"name="Nama_penerima"
                                placeholder="Nama Penerima">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Penerimaan Uang</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="jml_penerimaan_uang"
>>>>>>> e1b9f8f8e398737fe68f1f9a5a71098c6c65a805
                                placeholder="Jumlah Penerimaan Uang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Penerimaan Beras</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="exampleInputName1" name="jumlah_penerimaan_beras"
                                placeholder="Jumlah Penerimaan Beras">
                        </div>
                        




                        <div class="form-group">
                            <label for="amilName">Nama Amil:</label>
                            <input type="text" class="form-control" id="amilName" name="nama_amil"
                                value="{{ Auth::user()->name ?? '' }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name= "tanggal_penerimaan">
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('penyaluran.index') }}" class="btn btn-light">Cancel</a>
=======
                            <input type="text" class="form-control" id="exampleInputName1" name="jml_penerimaan_beras"
                                placeholder="Jumlah Penerimaan Beras">



                            <div class="form-group" id="uangPayment" style="display: none;">
                                <label for="uangAmount">Pembayaran Uang</label>
                                <input type="text" class="form-control" id="uangAmount" name="Pembayaran_Uang"
                                    placeholder="Jumlah uang yang dibayar">
                            </div>




                            <div class="form-group">
                                <label for="amilName">Nama Amil:</label>
                                <input type="text" class="form-control" id="amilName" name="amil_name"
                                    value="{{ Auth::user()->name ?? '' }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDate1">Tanggal:</label>
                                <input type="date" class="form-control" id="exampleInputDate1"
                                    name= "Tanggal_pembayaran">
                            </div>


                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="{{ route('pembayaran.index') }}" class="btn btn-light">Cancel</a>
>>>>>>> e1b9f8f8e398737fe68f1f9a5a71098c6c65a805
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
