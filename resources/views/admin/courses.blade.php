@extends('layouts.app')

@section('content')
<div class="container-fluid manage-institutions">
    <h2 class="page-title">Manage High Learning Institutions</h2>

    <!-- Back to Dashboard Button -->
    <div class="mb-3">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-back">Back to Dashboard</a>
    </div>

    <!-- Add Institution Form -->
    <div class="form-container">
        <form action="{{ route('admin.institutions.store') }}" method="POST">
            @csrf
            <h3 class="form-title">Add New Institution</h3>

            <div class="form-group">
                <label for="institutionName">Institution Name</label>
                <input type="text" id="institutionName" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Institution Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-submit">Add Institution</button>
        </form>
    </div>

    <!-- List of Institutions -->
    <h3 class="institution-list-title">Registered Institutions</h3>
    <ul class="institution-list">
        @foreach($institutions as $institution)
            <li class="institution-item">
                <div class="institution-details">
                    <strong>{{ $institution->name }}</strong> - {{ $institution->email }}
                </div>
                <div class="institution-actions">
                    <form action="{{ route('admin.institutions.delete', $institution->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </div>

                <!-- Display associated courses -->
                @if($institution->courses->count() > 0)
                    <div class="institution-courses">
                        <strong>Assigned Courses:</strong>
                        <ul>
                            @foreach($institution->courses as $course)
                                <li>{{ $course->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <span>No Courses Assigned</span>
                @endif
            </li>
        @endforeach
    </ul>
</div>

<style>
    /* Overall Page Style */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        color: #333;
    }

    /* Container Styling */
    .manage-institutions {
        background-color: #1B2A59;
        color: white;
        padding: 30px;
        border-radius: 8px;
    }

    /* Page Title */
    .page-title {
        text-align: center;
        color: #FF5900;
        font-size: 2rem;
        margin-bottom: 30px;
        font-weight: bold;
    }

    /* Form Container */
    .form-container {
        background-color: #F24C27;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }

    .form-title {
        text-align: center;
        color: #1B2A59;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    /* Form Group */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        color: white;
        font-weight: bold;
    }

    .form-control {
        background-color: #333;
        color: white;
        border: 1px solid #FF5900;
        padding: 10px;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #FF8C00;
        outline: none;
    }

    .btn {
        display: inline-block;
        padding: 12px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-submit {
        background-color: #FF5900;
        border: none;
        color: white;
        font-weight: bold;
        width: 100%;
    }

    .btn-submit:hover {
        background-color: #FF8C00;
    }

    /* Registered Institutions List */
    .institution-list-title {
        text-align: center;
        color: #FF5900;
        font-size: 1.5rem;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .institution-list {
        list-style: none;
        padding-left: 0;
    }

    .institution-item {
        background-color: #1B2A59;
        color: white;
        margin-bottom: 15px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .institution-details {
        font-size: 1rem;
        margin-bottom: 10px;
    }

    .institution-actions {
        margin-bottom: 10px;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .institution-courses {
        margin-top: 10px;
        font-size: 1rem;
    }

    .institution-courses ul {
        list-style: none;
        padding-left: 0;
    }

    .institution-courses li {
        background-color: #333;
        color: white;
        padding: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
    }

    /* Button Hover Effects */
    .btn:hover {
        transform: translateY(-2px);
    }
</style>
@endsection
