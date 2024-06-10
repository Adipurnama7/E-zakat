@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Zakat Type Form</h4>
                            <form class="forms-sample" method="post" action="{{ route('zakat.store') }}">
                                @csrf
                                <h5 class="card-title1">Zakat Data</h5>
                                <div class="form-group">
                                    <label for="exampleInputName1">Zakat Type</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="Jenis_Zakat"
                                        placeholder="Zakat Type" required>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a href="{{ route('zakat.index') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
