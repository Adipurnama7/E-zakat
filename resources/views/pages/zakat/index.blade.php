<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('zakat.create') }}" class="btn btn-primary mr-2">Add Zakat</a>
            <i class="fas fa-table me-1" style="font-size: 16px;"></i> <!-- Adjust the font size as needed -->
            Zakat Data Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Zakat Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>

                        <tr>
                            <th>No</th>
                            <th>Zakat Type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($zakats as $zkt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $zkt->Jenis_Zakat }}</td>
                                <td>
                                    <form class="d-inline" action="{{ route('zakat.destroy', $zkt) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('zakat.edit', $zkt) }}" class="btn btn-primary btn-xs">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
