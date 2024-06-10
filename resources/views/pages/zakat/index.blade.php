@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title center">Zakat Data Table</h4>
                    <a href="{{ route('zakat.create') }}" class="btn btn-primary btn-rounded btn-fw">Add Zakat</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Zakat Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zakats as $zkt)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $zkt->Jenis_Zakat }}</td>
                                        <td>
                                            <form class="d-inline" action="{{ route('zakat.destroy', $zkt) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                            <a href="{{ route('zakat.edit', $zkt) }}"
                                                class="btn btn-primary btn-xs">Edit</button>
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
