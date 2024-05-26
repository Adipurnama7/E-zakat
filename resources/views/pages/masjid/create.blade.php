@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Kerjasama Mesjid</h4>
                    <form class="forms-sample" method="post" action="{{ route('Masjid.store') }}">
                        @csrf
                        <h5 class="card-title1">Data Masjid</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Masjid</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_Masjid"
                                placeholder="Masjid">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat Masjid</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">RT</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="RT"
                                placeholder="RT">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">RW</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="RW"
                                placeholder="RW">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('Masjid.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
