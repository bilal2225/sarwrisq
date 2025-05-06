@extends('layouts') <!-- Extend your main layout if you have one -->

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Mureedain List</h1>

    <!-- Add a link to create a new record -->
    <div class="mb-3 text-end">
        <a href="{{ route('mureedain.create') }}" class="btn btn-primary">Add New Mureed</a>
    </div>

    <!-- Search and Filter Form -->
    <div class="row mb-4">
        <div class="col-md-4">
            <form action="{{ route('mureedain.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Search by Name, CNIC, or Email" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{ route('mureedain.index') }}" method="GET" class="d-flex justify-content-end">
                <select name="country" class="form-select me-2" onchange="this.form.submit()">
                    <option value="">Filter by Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country }}" {{ request('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-secondary">Filter</button>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{ route('mureedain.index') }}" method="GET" class="d-flex justify-content-end">
                <select name="city" class="form-select me-2" onchange="this.form.submit()">
                    <option value="">Filter by City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-secondary">Filter</button>
            </form>
        </div>
    </div>

    <!-- Table to display all records -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>CNIC</th>
                <th>Date of Birth</th>
                <th>City</th>
                <th>Contact (Primary)</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($mureeds->isEmpty())
                <tr>
                    <td colspan="9" class="text-center">No records found.</td>
                </tr>
            @else
                @foreach ($mureeds as $mureed)
                <tr>
                    <td><img src="{{ asset('storage/' . $mureed->picture) }}" alt="{{ $mureed->name }}" class="img-fluid" style="max-width: 100px; max-height: 100px; object-fit: cover; border-radius: 50%;"></td>
                    <td>{{ $mureed->name }}</td>
                    <td>{{ $mureed->father_name }}</td>
                    <td>{{ $mureed->cnic }}</td>
                    <td>{{ $mureed->date_of_birth }}</td>
                    <td>{{ $mureed->city }}</td>
                    <td>{{ $mureed->contact_primary }}</td>
                    <td>{{ $mureed->email }}</td>
                    <td>
                        <span class="d-flex gap-1">
                            <!-- View Button -->
                            <a href="{{ route('mureedain.show', $mureed->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>
                           
                            <!-- Edit Button -->
                             @if(Auth::user()->role == 'admin')
                            <a href="{{ route('mureedain.edit', $mureed->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('mureedain.destroy', $mureed->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                            @endif
                        </span>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

<!-- Pagination Links -->
<div class="d-flex justify-content-center">
    {{ $mureeds->appends(request()->query())->links('pagination::bootstrap-4') }}
</div>
</div>
@endsection