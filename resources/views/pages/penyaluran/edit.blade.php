@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Pembayaran Zakat</h4>
                    <form class="forms-sample">
                        <h5 class="card-title1">Data Pembayar</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">No.Hp Pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Telepon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">mesjid</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>al huda</option>
                                <option>al jabar</option>
                            </select>
                        </div>
                        <h5 class="card-title1">Data Zakat</h5>
                        <div class="form-group">
                            <label for="exampleSelectGender">Zakat</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Zakat Fitrah</option>
                                <option>Zakat maal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Tanggungan</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Tanggungan">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Pembayaran Beras</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>2,7 Kg</option>
                                <option>2,5 Kg</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Uang yang di bayarkan</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                placeholder="jumlah uang yang di bayar ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Amil</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Amil ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
                            <input type="date" class="form-control" id="exampleInputDate1">
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="pembayaran" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
