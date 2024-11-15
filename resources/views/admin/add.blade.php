@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4 heading">{{ __('Add New Course') }}</h2>
    <div class="card shadow-lg p-5" style="max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 8px;">
        <form method="POST" action="{{ route('admin.courses.store') }}" class="course-form">
            @csrf
            <!-- Course Name -->
            <div class="form-group mb-4">
                <label for="name" class="form-label">{{ __('Course Name') }}</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter course name">
            </div>

            <!-- Select Faculty -->
            <div class="form-group mb-4">
                <label for="faculty_id" class="form-label">{{ __('Select Faculty') }}</label>
                <select id="faculty_id" name="faculty_id" class="form-control" required>
                    @foreach($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-submit w-100">{{ __('Add Course') }}</button>
        </form>
    </div>
</div>

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4; /* Light gray background */
        margin: 0;
        padding: 0;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin-top: 60px;
        padding: 0 15px;
    }

    .heading {
        font-size: 2rem;
        color: #1B2A59; /* Dark Blue for Heading */
        font-weight: bold;
        margin-bottom: 30px;
    }

    /* Card Styling */
    .card {
        background-color: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 30px;
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        background-color: #f7f7f7;
        border: 1px solid #ccc;
        border-radius: 8px;
        color: #333;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #FF5900; /* Orange color on focus */
        background-color: #ffffff;
        outline: none;
    }

    /* Button Styling */
    .btn-submit {
        background-color: #FF5900; /* Bright orange color */
        color: white;
        padding: 15px;
        font-size: 1.1rem;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-submit:hover {
        background-color: #e67e00; /* Darker shade of orange */
        transform: translateY(-2px); /* Slight hover effect */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 0 20px;
        }

        .heading {
            font-size: 1.5rem;
        }

        .form-control {
            padding: 10px;
        }

        .btn-submit {
            padding: 12px;
        }
    }
</style>
@endsection
