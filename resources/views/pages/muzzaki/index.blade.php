Here's the translated version of your Blade template:

```blade
@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Muzzaki Data Table</h4>
                    <div class="form-inline">
                        <form method="GET" action="{{ route('muzzaki.index') }}" class="form-inline mt-3">
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
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Mosque</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembayaran as $pmby)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pmby->Nama_pembayar }}</td>
                                        <td>{{ $pmby->Alamat }}</td>
                                        <td>{{ $pmby->No_Hp }}</td>
                                        <td>{{ $pmby->masjid->Nama_Masjid }}</td>
                                        <td>
                                            <form class="d-inline" action="{{ route('pembayaran.destroy', $pmby) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                            <a href="{{ route('pembayaran.edit', $pmby) }}"
                                                class="btn btn-primary btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
```

This template displays a table of Muzzaki data, including their names, addresses, phone numbers, associated mosque
names, and options for editing or deleting each entry.
