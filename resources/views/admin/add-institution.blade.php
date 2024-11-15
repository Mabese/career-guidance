@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4 heading">Add High Learning Institution</h2>

    <!-- Add Institution Form -->
    <form method="POST" action="{{ route('admin.institutions.store') }}" class="form-container">
        @csrf
        <div class="form-group mb-4">
            <label for="name" class="form-label">Institution Name</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter institution name">
        </div>
        <div class="form-group mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter institution email">
        </div>
        <div class="form-group mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required placeholder="Enter password">
        </div>
        <div class="form-group mb-4">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required placeholder="Confirm password">
        </div>
        <button type="submit" class="btn btn-submit">Add Institution</button>
    </form>
</div>

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9; /* Light background */
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 700px;
        margin-top: 50px;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .heading {
        color: #1B2A59; /* Dark blue for heading */
        font-weight: bold;
        font-size: 1.5rem;
    }

    /* Form Styles */
    .form-container {
        background-color: #ffffff;
        padding: 25px;
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
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        background-color: #f4f4f4;
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
