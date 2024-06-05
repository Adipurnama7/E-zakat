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
                            <select id="nama_penerima" name="Nama_Penerima" required>
                                @foreach($mustahik as $msk)
                                    <option value="{{ $msk->Nama_Penerima }}">{{ $msk->Nama_Penerima }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Penerimaan Uang</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="jumlah_penerimaan_uang"
                                placeholder="Jumlah Penerimaan Uang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jumlah Penerimaan Beras</label>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
