@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4 heading">Add Faculty</h2>

    <!-- Add Faculty Form -->
    <form method="POST" action="{{ route('admin.faculties.store') }}" class="form-container">
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Faculty Name</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter faculty name">
        </div>
        <button type="submit" class="btn btn-submit">Add Faculty</button>
    </form>
</div>

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4; /* Light background */
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin-top: 50px;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .heading {
        color: #1B2A59; /* Dark blue for heading */
        font-weight: 600;
    }

    /* Form Styles */
    .form-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 1.1rem;
        color: #1B2A59;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        border-radius: 6px;
        color: #333;
        transition: border-color 0.3s ease, background-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #FF5900;
        background-color: #ffffff;
        outline: none;
    }

    /* Button Styles */
    .btn-submit {
        background-color: #FF5900;
        color: white;
        padding: 12px 25px;
        font-size: 1.1rem;
        width: 100%;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-submit:hover {
        background-color: #e67e00;
        transform: translateY(-2px); /* Hover effect */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
            margin-top: 30px;
        }

        .form-container {
            padding: 15px;
        }

        .form-control {
            padding: 10px;
        }

        .btn-submit {
            padding: 10px 20px;
        }
    }
</style>
@endsection
