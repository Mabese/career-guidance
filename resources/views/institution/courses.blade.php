@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #1B2A59; color: white; padding: 30px; border-radius: 8px;">
    <div class="mb-3">
        <a href="{{ route('institution.dashboard') }}" class="btn-back" style="background-color: #FF5900; border: none; padding: 12px 25px; border-radius: 30px; text-decoration: none; font-size: 1.1rem; font-weight: bold; transition: background-color 0.3s ease;">Back to Dashboard</a>
    </div>
    <br>
    <h2 class="text-center mb-4" style="font-size: 2rem;">Manage Courses</h2>

    <!-- Add Course Form -->
    <form action="{{ route('institution.courses.add') }}" method="POST" style="background-color: #F24C27; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        @csrf
        <div class="form-group mb-3">
            <label for="courseName" style="font-size: 1.1rem; font-weight: bold;">Course Name</label>
            <input type="text" id="courseName" name="name" class="form-control" required style="border: 1px solid #FF5900; padding: 12px 15px; font-size: 1rem; border-radius: 5px;">
        </div>
        <br>
        <div class="form-group mb-3">
            <label for="facultyId" style="font-size: 1.1rem; font-weight: bold;">Select Faculty</label>
            <select id="facultyId" name="faculty_id" class="form-control" required style="border: 1px solid #FF5900; padding: 12px 15px; font-size: 1rem; border-radius: 5px;">
                @foreach($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn-submit" style="background-color: #FF5900; color: white; padding: 12px 25px; font-size: 1rem; border: none; border-radius: 30px; width: 100%; transition: background-color 0.3s ease;">Add Course</button>
    </form>

    <!-- List of Courses -->
    <h3 class="text-center mt-5" style="font-size: 1.8rem;">Courses</h3>
    <ul class="list-group" style="background-color: #1B2A59; color: white; border-radius: 8px; padding: 20px;">
        @foreach($courses as $course)
            <li class="list-group-item" style="background-color: #2F3A71; color: white; margin-bottom: 10px; border-radius: 5px; padding: 15px; font-size: 1.1rem;">
                {{ $course->name }} (Faculty: {{ $course->faculty->name }})
            </li>
        @endforeach
    </ul>

</div>

<!-- Internal CSS for styling -->
<style>
    body {
        background-color: #121212;
        color: white;
        font-family: 'Arial', sans-serif;
    }

    .btn-back:hover {
        background-color: #FF8C00; /* Hover effect for the back button */
        transform: translateY(-2px);
    }

    .btn-submit:hover {
        background-color: #e67e00; /* Darken the submit button on hover */
        transform: translateY(-2px);
    }

    .form-control {
        box-shadow: none;
        transition: border-color 0.3s, background-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #FF8C00; /* Border color change on focus */
        background-color: #333; /* Dark background on focus */
        outline: none;
    }

    .form-group label {
        font-size: 1.1rem;
        color: #fff;
        margin-bottom: 10px;
    }

    .list-group-item {
        background-color: #2F3A71;
        color: white;
        padding: 12px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #FF8C00; /* Hover effect for courses */
    }

    h2, h3 {
        font-size: 2rem;
        text-align: center;
        font-weight: bold;
    }

    h3 {
        font-size: 1.8rem;
    }

    .container-fluid {
        padding: 40px;
        background-color: #1B2A59;
        border-radius: 10px;
    }
</style>
@endsection
