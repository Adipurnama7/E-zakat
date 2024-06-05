@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Pembayaran Zakat Maal</h4>

                    <form class="forms-sample" method="post" action="{{ route('maal.update', $zakatmaal->id) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title1">Data Pembayar</h5>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama_pembayar"
                                placeholder="Nama Pembayar" value="{{ $zakatmaal->Nama_pembayar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">No.Hp Pembayar</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="No_Hp"
                                placeholder="Telepon" value="{{ $zakatmaal->No_Hp }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Alamat"
                                placeholder="Alamat" value="{{ $zakatmaal->Alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="masjid">Masjid:</label>
                            <select class="form-control" id="masjid" name="masjid_id">
                                @foreach ($masjid as $msjid)
                                    <option value="{{ $msjid->id }}"
                                        {{ $zakatmaal->masjid_id == $msjid->id ? 'selected' : '' }}>
                                        {{ $msjid->Nama_Masjid }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h5 class="card-title1">Data Zakat</h5>
                        <div class="form-group">
                            <label for="zakat">Jenis Zakat:</label>
                            <select class="form-control" id="zakat" name="zakat_id">
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}"
                                        {{ $zakatmaal->zakat_id == $zkt->id ? 'selected' : '' }}>
                                        {{ $zkt->Jenis_Zakat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlahTanggungan">Jumlah Tanggungan</label>
                            <input type="text" class="form-control" id="jumlahTanggungan" name="Jumlah_Tanggungan"
                                placeholder="Tanggungan" value="{{ $zakatmaal->Jumlah_Tanggungan }}">
                        </div>
                        <div class="form-group">
                            <label for="zakat">Jenis Zakat:</label>
                            <select class="form-control" id="zakat" name="zakat_id">
                                <option value="{{ $pembayaran->zakat_id }}" selected>
                                    {{ $pembayaran->zakat->Jenis_Zakat ?? '-- Pilih Zakat --' }}</option>
                                @foreach ($zakats as $zkt)
                                    <option value="{{ $zkt->id }}">{{ $zkt->Jenis_Zakat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pembayaran Uang</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Pembayaran_Uang"
                                placeholder="Jumlah uang yang dibayar" value="{{ $zakatmaal->Pembayaran_Uang }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Total Pembayaran</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Total_Pembayaran"
                                placeholder="Total Pembayaran" value="{{ $zakatmaal->Total_Pembayaran }}">
                        </div>
                        <div class="form-group">
                            <label for="amilName">Nama Amil:</label>
                            <input type="text" class="form-control" id="amilName" name="amil_name"
                                value="{{ Auth::user()->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate1">Tanggal:</label>
                            <input type="date" class="form-control" id="exampleInputDate1" name="Tanggal_pembayaran"
                                value="{{ $zakatmaal->Tanggal_pembayaran }}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="{{ route('maal.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
