@extends('layouts.app')

@section('content')
<div class="container-fluid custom-container">
    <h2 class="mt-3 custom-heading">Add High Learning Institution</h2>

    <!-- Back to Dashboard Button -->
    <div class="mb-3">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-back">
            Back to Dashboard
        </a>
    </div>

    <!-- Add Institution Form -->
    <form action="{{ route('admin.institutions.store') }}" method="POST" class="custom-form">
        @csrf
        <div class="form-group">
            <label for="institutionName" class="form-label">Institution Name</label>
            <input type="text" id="institutionName" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Institution Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-submit">
            Add Institution
        </button>
    </form>

    <!-- List of Institutions -->
    <h3 class="mt-4 custom-heading">Registered Institutions</h3>
    <ul class="list-group custom-list">
        @foreach($institutions as $institution)
            <li class="list-group-item custom-list-item d-flex justify-content-between align-items-center">
                <span>
                    <strong>{{ $institution->name }}</strong> - {{ $institution->email }}
                </span>
                <form action="{{ route('admin.institutions.delete', $institution->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
</div>

<style>
    /* General container styling */
    .custom-container {
        background-color: #1B2A59; /* Deep Blue */
        color: white;
        padding: 30px;
        border-radius: 10px;
    }

    /* Heading styling */
    .custom-heading {
        color: #FF5900; /* Vibrant Orange */
        font-size: 2rem;
        font-weight: 600;
        text-align: center;
    }

    /* Back button styling */
    .btn-back {
        background-color: #FF5900;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1rem;
        display: inline-block;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-back:hover {
        background-color: #e65700;
        transform: translateY(-2px);
    }

    /* Form container styling */
    .custom-form {
        background-color: #F24C27; /* Orange */
        padding: 20px;
        border-radius: 8px;
        margin-top: 20px;
    }

    /* Form labels styling */
    .form-label {
        font-size: 1.1rem;
        color: white;
    }

    /* Form input fields styling */
    .form-control {
        border-radius: 5px;
        border: 1px solid #FF5900;
        padding: 10px;
        font-size: 1rem;
        margin-bottom: 15px;
        background-color: #333;
        color: white;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #FF5900;
        outline: none;
    }

    /* Submit button styling */
    .btn-submit {
        background-color: #FF5900;
        border: none;
        color: white;
        padding: 12px 20px;
        font-size: 1.1rem;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #e65700;
        transform: translateY(-2px);
    }

    /* List styling */
    .custom-list {
        background-color: #1B2A59;
        border-radius: 10px;
        padding: 10px;
        margin-top: 20px;
    }

    /* List item styling */
    .custom-list-item {
        background-color: #333;
        color: white;
        margin-bottom: 15px;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-list-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* Delete button styling */
    .btn-danger {
        background-color: #FF5900;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 0.9rem;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-danger:hover {
        background-color: #e65700;
        transform: scale(1.05);
    }

    /* Styling for the trash icon */
    .fas.fa-trash-alt {
        margin-right: 5px;
    }
</style>
@endsection
