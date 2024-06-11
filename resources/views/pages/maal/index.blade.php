Sure, here is the translated version of your Blade template into English:

```blade
@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title1">Zakat Maal Payment Data</h5>
                    <div class="form-inline">
                        <a href="{{ route('maal.create') }}" class="btn btn-primary mr-2">Add Payment</a>
                        <form method="GET" action="{{ route('maal.index') }}" class="form-inline mt-3">
                            <input type="text" class="form-control form-control-sm mr-2" id="search" name="search"
                                placeholder="Search" value="{{ $searchQuery ?? '' }}">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Payment (Date)</th>
                                    <th>Muzzaki</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Type of Zakat</th>
                                    <th>Mosque</th>
                                    <th>Payment (Money)</th>
                                    <th>Amil</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalUang = 0;
                                @endphp
                                @foreach ($zakatmaal as $pmby)
                                    @php
                                        $totalUang += $pmby->Pembayaran_Uang;
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pmby->Tanggal_pembayaran }}</td>
                                        <td>{{ $pmby->Nama_pembayar }}</td>
                                        <td>{{ $pmby->Alamat }}</td>
                                        <td>{{ $pmby->No_Hp }}</td>
                                        <td>{{ $pmby->zakat->Jenis_Zakat }}</td>
                                        <td>{{ $pmby->masjid->Nama_Masjid }}</td>
                                        <td>Rp. {{ number_format($pmby->Pembayaran_Uang) }}</td>
                                        @if ($pmby->user)
                                            <td>{{ $pmby->user->name }}</td>
                                        @else
                                            <td>No related user</td>
                                        @endif
                                        <td>
                                            <form class="d-inline" action="{{ route('maal.destroy', $pmby) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                            <a href="{{ route('maal.edit', $pmby) }}"
                                                class="btn btn-primary btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p><strong>Total Money:</strong> Rp. {{ number_format($totalUang) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
```
