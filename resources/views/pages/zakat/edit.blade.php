@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Tambah Jenis Zakat</h4>
                            <form class="forms-sample" method="post" action="{{ route('zakat.update', $zakat) }}">
                                @csrf
                                @method('PUT')
                                <h5 class="card-title1">Data Zakat</h5>
                                <div class="form-group">
                                    <label for="exampleInputName1">Jenis Zakat</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="Jenis_Zakat"
                                        placeholder="Zakat" value="{{ $zakat->Jenis_Zakat }}">
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
