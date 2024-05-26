@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="{{ route('mustahik.update', $mustahik) }}">
                    @csrf
                    @method('PUT')
                    <h5 class="card-title1">Data Penerima</h5>
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Penerima</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="Nama_Penerima"
                            placeholder="Masukan Nama " value="{{ $mustahik->Nama_Penerima }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Alamat Penerima</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="Alamat_Penerima"
                            placeholder="Alamat" value="{{ $mustahik->Alamat_Penerima }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Kategori</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="Kategori"
                            placeholder="Pilih Kategori" value="{{ $mustahik->Kategori }}">
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
