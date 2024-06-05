@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Mustahik</h4>
                    <form class="forms-sample" method="post" action="{{ route('mustahik.store') }}">
                        @csrf
                        <h5 class="card-title1">Data Penerima</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Penerima</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_Penerima"
                                placeholder="Masukan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat Penerima</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat_Penerima"
                                placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kategori</label>
                            <select class="form-control" id="exampleInputName1" name="Kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Fakir">Fakir </option>
                                <option value="Miskin">Miskin</option>
                                <option value="Mualaf">Mualaf</option>
                                <!-- Add more options as needed -->
                            </select>
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
