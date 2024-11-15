@extends('layouts.app')

@section('content')
<div class="container mt-5 admission-container">
    <div class="mb-3">
        <a href="{{ route('student.dashboard') }}" class="btn btn-back">Back to Dashboard</a>
    </div>
    <br>
    <h2 class="admissions-title">Your Admissions</h2>

    @if($admissions->isEmpty())
        <p class="no-admissions">You have no admissions yet.</p>
    @else
        <ul class="list-group admissions-list">
            @foreach ($admissions as $admission)
                <li class="list-group-item admission-item">
                    Course: {{ $admission->course->name }} - Status: {{ $admission->status }}
                </li>
            @endforeach
        </ul>
    @endif
</div>

<!-- Internal CSS -->
<style>
    /* Global styles for the page */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #1B2A59;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: #1B2A59;
        padding: 20px;
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

    .admissions-title {
        color: white;
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .no-admissions {
        color: white;
        font-size: 1.2em;
    }

    .admissions-list {
        padding: 0;
        list-style-type: none;
    }

    .admission-item {
        background-color: #F24C27;
        color: white;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 8px;
        font-size: 1.1em;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .admission-item span {
        font-weight: 500;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .admissions-title {
            font-size: 1.6em;
        }

        .admission-item {
            font-size: 1em;
            padding: 10px;
        }

        .btn-back {
            padding: 8px 16px;
        }
    }
</style>
@endsection
