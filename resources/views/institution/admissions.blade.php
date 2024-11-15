@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">{{ __('Available Applications') }}</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover applications-table">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Course</th>
                <th>Institution</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->student->first_name }} {{ $application->student->last_name }}</td>
                    <td>{{ $application->course->name }}</td>
                    <td>
                        @if($application->course && $application->course->institution)
                            {{ $application->course->institution->name }}
                        @else
                            {{ __('No Institution Assigned') }}
                        @endif
                    </td>
                    <td>{{ $application->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ route('institution.dashboard') }}" class="btn btn-back">Back to Dashboard</a>
    </div>
</div>

<!-- Internal CSS -->
<style>
    /* General Body Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #121212;
        color: #fff;
    }

    /* Table Styles */
    .applications-table {
        width: 100%;
        margin-top: 20px;
        background-color: #1B2A59; /* Deep Blue */
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .applications-table th, .applications-table td {
        padding: 15px;
        text-align: left;
        font-size: 1em;
    }

    .applications-table th {
        background-color: #F24C27; /* Orange */
        color: white;
        font-weight: bold;
    }

    .applications-table tr {
        background-color: #2F3A71; /* Dark Blue for rows */
        transition: background-color 0.3s ease;
    }

    .applications-table tr:hover {
        background-color: #F24C27; /* Light up on hover */
    }

    .applications-table td {
        color: white;
    }

    /* Button Styles */
    .btn {
        display: inline-block;
        padding: 12px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        border-radius: 25px;
        border: none;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .btn-success {
        background-color: #28a745;
        color: white;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-warning {
        background-color: #ffc107;
        color: white;
    }

    .btn-back {
        background-color: #6c757d; /* Grey */
        color: white;
    }

    .btn-success:hover {
        background-color: #218838; /* Darker green */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker red */
    }

    .btn-warning:hover {
        background-color: #e0a800; /* Darker yellow */
    }

    .btn-back:hover {
        background-color: #5a6268; /* Darker grey */
    }

    /* Alert Styles */
    .alert {
        margin-top: 20px;
        background-color: #4CAF50; /* Green */
        color: white;
        padding: 15px;
        border-radius: 5px;
        font-size: 16px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .applications-table th, .applications-table td {
            padding: 10px;
            font-size: 0.9em;
        }

        .btn {
            padding: 10px 18px;
            font-size: 14px;
        }

        .btn-back {
            width: 100%;
            text-align: center;
        }
    }
</style>
@endsection
