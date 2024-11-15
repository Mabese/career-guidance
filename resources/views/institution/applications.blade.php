@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background-color: #1B2A59; color: white; padding: 30px; border-radius: 10px;">
    <div class="mb-3">
        <a href="{{ route('institution.dashboard') }}" class="btn btn-back" style="background-color: #FF5900; border: none; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; font-size: 1rem; display: inline-block; transition: background-color 0.3s ease;">Back to Dashboard</a>
    </div>
    <br>
    <h2 style="text-align: center; font-size: 2rem; margin-bottom: 20px;">View Applications</h2>
    
    @if ($applications->isEmpty())
        <p style="text-align: center; font-size: 1.2rem; color: #FF8C00;">No applications found.</p>
    @else
        <table class="table table-striped" style="width: 100%; border-collapse: collapse; margin-top: 20px; border-radius: 8px; overflow: hidden; background-color: #2F3A71;">
            <thead style="background-color: #F24C27; color: white; font-weight: bold;">
                <tr>
                    <th style="padding: 15px; text-align: left;">Student Name</th>
                    <th style="padding: 15px; text-align: left;">Course Name</th>
                    <th style="padding: 15px; text-align: left;">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr style="background-color: #2F3A71; color: white; transition: background-color 0.3s ease;">
                        <td style="padding: 15px;">{{ $application->student->name }}</td>
                        <td style="padding: 15px;">{{ $application->course->name }}</td>
                        <td style="padding: 15px; text-transform: capitalize;">{{ $application->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<!-- Inline CSS for styling -->
<style>
    /* Table Row Hover Effect */
    .table-striped tbody tr:hover {
        background-color: #FF8C00; /* Highlight row on hover */
    }

    /* Button Hover Effect */
    .btn-back:hover {
        background-color: #FF8C00; /* Hover background */
        transform: translateY(-2px);
    }

    /* Table Style */
    .table th, .table td {
        padding: 12px;
        text-align: left;
        font-size: 1.1rem;
    }

    /* Table Row Style */
    .table-striped tbody tr {
        background-color: #2F3A71; /* Dark blue background for rows */
        color: white;
    }

    /* Heading and Subheading Styles */
    h2 {
        font-size: 2rem;
        text-align: center;
        color: white;
    }
</style>
@endsection
