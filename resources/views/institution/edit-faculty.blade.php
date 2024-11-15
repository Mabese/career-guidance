@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background-color: #1B2A59; color: white; padding: 20px; border-radius: 8px;">
    <div class="mb-3">
        <a href="{{ route('institution.dashboard') }}" class="btn btn-secondary" style="background-color: #FF5900; border: none; text-decoration: none; padding: 8px 16px; border-radius: 20px;">Back to Dashboard</a>
    </div>
    <br>
    <h2 class="text-center">Edit Faculty</h2>

    <form action="{{ route('institution.faculties.update', $faculty->id) }}" method="POST" style="background-color: #F24C27; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <div class="mb-4">
            <label for="name" class="form-label" style="color: white; font-size: 1.1rem; font-weight: bold;">Faculty Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $faculty->name }}" required style="border: 2px solid #FF5900; border-radius: 8px; padding: 12px; font-size: 1rem;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #FF5900; border: none; font-size: 1.1rem; padding: 12px 20px; border-radius: 25px; width: 100%;">Update Faculty</button>
    </form>
</div>

<style>
    /* Body Styling */
    body {
        background-color: #121212; /* Dark background for the body */
        color: white; /* White text */
        font-family: 'Arial', sans-serif;
    }

    /* Form Styling */
    form {
        max-width: 500px; /* Max width for form */
        margin: 0 auto; /* Center the form */
    }

    /* Input Field Styling */
    .form-control {
        padding: 12px;
        border-radius: 8px;
        border: 2px solid #FF5900;
        font-size: 1rem;
        background-color: #444; /* Slightly darker background */
        color: white;
        transition: border-color 0.3s ease;
    }

    /* Focus on Input Fields */
    .form-control:focus {
        border-color: #FF8C00; /* Lighter orange color on focus */
        background-color: #333; /* Darker background on focus */
        outline: none;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #FF5900; /* Orange background */
        border-radius: 25px; /* Rounded button */
        color: white;
        font-size: 1.1rem;
        padding: 12px 20px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #FF8C00; /* Lighter orange on hover */
        transform: translateY(-3px); /* Slight lift effect on hover */
    }

    /* Label Styling */
    .form-label {
        font-size: 1.1rem;
        color: white;
        font-weight: bold;
    }

    /* Overall Container Styling */
    .container {
        background-color: #1B2A59; /* Deep Blue background */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Headings */
    h2 {
        font-size: 2rem;
        color: white;
        font-weight: bold;
        margin-bottom: 30px;
    }
</style>
@endsection
