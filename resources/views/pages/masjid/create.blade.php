@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Mosque Partnership</h4>
                    <form class="forms-sample" method="post" action="{{ route('Masjid.store') }}">
                        @csrf
                        <h5 class="card-title1">Mosque Data</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Mosque Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_Masjid"
                                placeholder="Mosque" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Mosque Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">RT</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="RT"
                                placeholder="RT" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">RW</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="RW"
                                placeholder="RW" required>
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
