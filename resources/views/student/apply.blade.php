@extends('layouts.app')

@section('content')
<div class="container mt-5 apply-container">
    <div class="mb-3">
        <a href="{{ route('student.dashboard') }}" class="btn btn-back">Back to Dashboard</a>
    </div>
    <br>
    <h2 class="form-title">Apply for Courses</h2>
    <form action="{{ route('student.apply.store') }}" method="POST" class="application-form">
        @csrf
        <div class="mb-3">
            <label for="course_id" class="form-label">Select Course</label>
            <select id="course_id" name="course_id" class="form-control" required>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-submit">Submit Application</button>
    </form>
</div>

<!-- Internal CSS -->
<style>
    /* Global Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #1B2A59;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: #1B2A59;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .btn-back {
        background-color: #FF5900;
        border: none;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 30px;
        color: white;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-back:hover {
        background-color: #e04e00;
    }

    .form-title {
        color: white;
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .application-form {
        background-color: #F24C27;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .form-label {
        color: white;
        font-weight: 500;
    }

    .form-control {
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        width: 100%;
        margin-top: 10px;
        background-color: #fff;
        color: #333;
    }

    .form-control:focus {
        border-color: #FF5900;
        box-shadow: 0 0 5px rgba(255, 89, 0, 0.8);
    }

    .btn-submit {
        background-color: #FF5900;
        border: none;
        padding: 12px 20px;
        border-radius: 30px;
        color: white;
        font-weight: bold;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #e04e00;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .form-title {
            font-size: 1.6em;
        }

        .btn-back {
            padding: 8px 16px;
        }

        .btn-submit {
            padding: 10px 15px;
        }
    }
</style>
@endsection
