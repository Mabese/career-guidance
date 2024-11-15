@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background-color: #1B2A59; color: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
    
    <div class="mb-3">
        <a href="{{ route('institution.dashboard') }}" class="btn btn-back" style="text-decoration: none;">Back to Dashboard</a>
    </div>
    
    <h2 class="text-center mb-4">Manage Faculties</h2>

    <!-- Add Faculty Form -->
    <form action="{{ route('institution.faculties.add') }}" method="POST" class="form-add-faculty">
        @csrf
        <div class="mb-4">
            <label for="name" class="form-label">Faculty Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-submit">Add Faculty</button>
    </form>

    <!-- Existing Faculties Table -->
    <h3 class="mt-5 text-center">Existing Faculties</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Faculty Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faculties as $faculty)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $faculty->name }}</td>
                        <td>
                            <a href="{{ route('institution.faculties.edit', $faculty->id) }}" class="btn btn-update">Update</a>
                            <form action="{{ route('institution.faculties.delete', $faculty->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this faculty?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<style>
    /* General Styling */
    body {
        background-color: #121212;
        color: white;
        font-family: 'Arial', sans-serif;
    }

    .container {
        background-color: #1B2A59;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Button Styling */
    .btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    .btn-back {
        background-color: #FF5900;
        color: white;
        font-weight: bold;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
    }

    .btn-submit {
        background-color: #FF5900;
        color: white;
        font-weight: bold;
        border: none;
        padding: 12px 25px;
        margin-top: 20px;
        width: 100%;
    }

    .btn-submit:hover {
        background-color: #FF8C00;
    }

    .btn-update {
        background-color: #FFA500;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn-update:hover {
        background-color: #FF7F00;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        border: none;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    /* Form Styling */
    .form-add-faculty {
        background-color: #F24C27;
        padding: 30px;
        border-radius: 8px;
        margin-bottom: 40px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-size: 1rem;
        color: white;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        background-color: #444;
        border: 1px solid #FF5900;
        border-radius: 8px;
        color: white;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #FF8C00;
        background-color: #333;
        outline: none;
    }

    /* Table Styling */
    .table {
        margin-top: 20px;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        background-color: #1B2A59;
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
        vertical-align: middle;
    }

    .table th {
        background-color: #F24C27;
        color: white;
    }

    .table tbody tr:hover {
        background-color: #333f66;
    }

    .table tbody tr {
        border-bottom: 1px solid #FF5900;
    }

    /* Headings */
    h2, h3 {
        text-align: center;
        color: white;
    }
</style>

@endsection
