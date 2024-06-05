@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Penerima Zakat</h4>
                    <form class="forms-sample" method="post" action="{{ route('penyaluran.update', $penyaluran->id) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Data Penerima</h5>
                        <div class="form-group">
                            <label for="nama_penerima">Nama Penerima</label>
                            <select id="nama_penerima" name="nama_penerima" required>
                                @foreach ($mustahik as $msk)
                                    <option value="{{ $msk->Nama_Penerima }}"
                                        {{ $penyaluran->nama_penerima == $msk->Nama_Penerima ? 'selected' : '' }}>
                                        {{ $msk->Nama_Penerima }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_penerimaan_uang">Jumlah Penerimaan Uang</label>
                            <input type="text" class="form-control" id="jumlah_penerimaan_uang"
                                name="jumlah_penerimaan_uang" placeholder="Jumlah Penerimaan Uang"
                                value="{{ $penyaluran->jumlah_penerimaan_uang }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_penerimaan_beras">Jumlah Penerimaan Beras</label>
                            <input type="text" class="form-control" id="jumlah_penerimaan_beras"
                                name="jumlah_penerimaan_beras" placeholder="Jumlah Penerimaan Beras"
                                value="{{ $penyaluran->jumlah_penerimaan_beras }}">
                        </div>

                        <div class="form-group">
                            <label for="nama_amil">Nama Amil:</label>
                            <input type="text" class="form-control" id="nama_amil" name="nama_amil"
                                value="{{ Auth::user()->name ?? '' }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_penerimaan">Tanggal:</label>
                            <input type="date" class="form-control" id="tanggal_penerimaan" name="tanggal_penerimaan"
                                value="{{ $penyaluran->tanggal_penerimaan }}">
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
