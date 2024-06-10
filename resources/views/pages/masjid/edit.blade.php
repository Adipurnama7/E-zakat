@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Mosque Partnership Form</h4>
                    <form class="forms-sample" method="post" action="{{ route('Masjid.update', $Masjid) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Mosque Data</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Mosque Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_Masjid"
                                placeholder="Mosque" value="{{ $Masjid->Nama_Masjid }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Mosque Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address" value="{{ $Masjid->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">RT</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="RT"
                                placeholder="RT" value="{{ $Masjid->RT }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">RW</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="RW"
                                placeholder="RW" value="{{ $Masjid->RW }}">
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
