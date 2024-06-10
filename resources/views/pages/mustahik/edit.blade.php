@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="{{ route('mustahik.update', $mustahik) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Recipient Data</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Recipient's Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_Penerima"
                                placeholder="Enter Name" value="{{ $mustahik->Nama_Penerima }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Recipient's Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat_Penerima"
                                placeholder="Address" value="{{ $mustahik->Alamat_Penerima }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Category</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Kategori"
                                placeholder="Select Category" value="{{ $mustahik->Kategori }}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('mustahik.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
