@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4 heading">{{ __('Available Applications') }}</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Institution</th>
                    <th>Status</th>
                    <th>Action</th>
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
                        <td>
                            <form action="{{ route('admin.admissions.update', $application->id) }}" method="POST">
                                @csrf
                                <button type="submit" name="action" value="admit" class="btn btn-success">
                                    <i class="fas fa-check"></i> Admit
                                </button>
                                <button type="submit" name="action" value="reject" class="btn btn-danger">
                                    <i class="fas fa-times"></i> Reject
                                </button>
                                <button type="submit" name="action" value="pending" class="btn btn-warning">
                                    <i class="fas fa-clock"></i> Leave Pending
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3 text-center">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-back">Back to Dashboard</a>
    </div>
</div>

<style>
    /* Body Styling */
    body {
        background-color: #f5f5f5; /* Light Gray background */
        color: #333; /* Default text color */
        font-family: 'Arial', sans-serif;
    }

    /* Heading Style */
    .heading {
        font-size: 2rem;
        color: #1B2A59; /* Dark Blue for Heading */
        font-weight: bold;
        margin-bottom: 30px;
    }

    /* Table Styles */
    .table-container {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin-bottom: 40px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px; /* Rounded corners */
    }

    .table th, .table td {
        padding: 15px;
        text-align: left;
        font-size: 1rem;
    }

    .table th {
        background-color: #F24C27; /* Orange header */
        color: white;
        font-weight: bold;
    }

    .table td {
        background-color: #1B2A59; /* Dark Blue rows */
        color: white;
    }

    .table tr:hover {
        background-color: #333f66; /* Hover effect on rows */
    }

    /* Button Styles */
    .btn {
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn:hover {
        transform: translateY(-2px); /* Hover effect */
    }

    .btn-success {
        background-color: #28a745; /* Green */
        color: white;
    }

    .btn-danger {
        background-color: #dc3545; /* Red */
        color: white;
    }

    .btn-warning {
        background-color: #ffc107; /* Yellow */
        color: white;
    }

    .btn-back {
        background-color: #6c757d; /* Grey */
        color: white;
        padding: 12px 25px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        transition: background-color 0.3s, transform 0.3s;
    }

    /* Button Hover Effects */
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
        transform: translateY(-2px);
    }
</style>
@endsection
