@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Dashboard Button -->
    <div class="mb-3">
        <a href="{{ route('institution.dashboard') }}" class="btn btn-back">Back to Dashboard</a>
    </div>

    <h2 class="text-center">Manage Faculties</h2>

    <!-- Add Faculty Form -->
    <form action="{{ route('institution.faculties.add') }}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Faculty Name</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter faculty name">
        </div>
        <button type="submit" class="btn btn-submit">Add Faculty</button>
    </form>

    <!-- Faculties Table -->
    <h3 class="mt-5 text-center">Existing Faculties</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Faculty Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faculties as $faculty)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
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
    /* General Styles */
    body {
        background-color: #f4f4f9;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .text-center {
        text-align: center;
    }

    h2, h3 {
        color: #1B2A59;
    }

    /* Button Styles */
    .btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    .btn-back {
        background-color: #FF5900;
        color: white;
        font-weight: bold;
        padding: 8px 16px;
        border: none;
        border-radius: 20px;
    }

    .btn-back:hover {
        background-color: #FF8C00;
    }

    .btn-submit {
        background-color: #1B2A59;
        color: white;
        font-weight: bold;
        padding: 12px 20px;
        width: 100%;
        margin-top: 20px;
        border: none;
    }

    .btn-submit:hover {
        background-color: #2D3D6B;
    }

    .btn-update {
        background-color: #FFA500;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-update:hover {
        background-color: #FF7F00;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        border: none;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    /* Form Styles */
    .form-container {
        background-color: #F24C27;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 1rem;
        color: #ffffff;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        background-color: #444;
        border: 1px solid #FF5900;
        border-radius: 8px;
        color: white;
        transition: border-color 0.3s ease, background-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #FF8C00;
        background-color: #333;
        outline: none;
    }

    /* Table Styles */
    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
    }

    .table th, .table td {
        padding: 15px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e1e1e1;
    }

    .table th {
        background-color: #F24C27;
        color: white;
        font-weight: bold;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .btn-submit {
            width: 100%;
        }

        .table th, .table td {
            padding: 10px;
        }

        .form-container {
            padding: 20px;
        }
    }
</style>

@endsection
