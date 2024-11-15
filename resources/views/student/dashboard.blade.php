@extends('layouts.app')

@section('content')
<div class="container-fluid dashboard-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white text-center">Student Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.dashboard') }}" onclick="showSection('dashboard')">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.apply') }}">Apply for Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.admissions') }}" onclick="showSection('admissions')">View Admissions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.profile.edit') }}">Update Profile</a>
            </li>
            <form method="POST" action="{{ route('student.logout') }}">
                @csrf
                <button class="btn btn-logout">Logout</button>
            </form>
        </ul>
    </div>

    <!-- Main Content -->
    <main role="main" class="main-content">
        <div id="contentArea">
            <!-- Student Dashboard content (Always visible) -->
            <h2 class="mt-3">Student Dashboard</h2>
            <p class="intro-text">Welcome to your student dashboard. You can manage your courses, view admissions, and update your profile.</p>

            <!-- Admissions Section (Initially hidden) -->
            <div id="admissionsSection" style="display:none;">
                <h3 class="admissions-section">Admissions Overview</h3>
                <p class="admissions-section">Here, you can view all the admissions available for your program and the status of your application.</p>
            </div>
        </div>
    </main>
</div>

<!-- Internal CSS -->
<style>
    /* Global Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #121212;
        color: black;
        margin: 0;
        padding: 0;
        background: black;
    }

    /* Container & Layout */
    .dashboard-container {
        display: flex;
        min-height: 100vh;
        background-color: black;
    }

    .sidebar {
        width: 20%;
        background-color: #1B2A59;
        padding: 30px;
        position: fixed;
        height: 100vh;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
    }

    .sidebar h4 {
        font-size: 1.8em;
        font-weight: bold;
        color: #FF5900;
        margin-bottom: 20px;
    }

    /* Sidebar Navigation */
    .nav {
        list-style-type: none;
        padding: 0;
    }

    .nav-item {
        margin: 15px 0;
    }

    .nav-link {
        color: black;
        font-weight: 500;
        font-size: 1.2em;
        padding: 8px 15px;
        border-radius: 5px;
        display: block;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .nav-link:hover {
        background-color: greenyellow;
        color: #1B2A59;
    }

    .btn-logout {
        background-color: #FF5900;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        color: white;
        font-weight: bold;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-logout:hover {
        background-color: green;
    }

    /* Main Content */
    .main-content {
        flex: 1;
        background-color: black;
        padding: 30px;
        margin-left: 20%;
        border-radius: 5px;
        background: black;
    }

    .main-content h2 {
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 20px;
    }

    .intro-text {
        font-size: 1.3em;
        color: #F9F9F9;
        margin-bottom: 30px;
    }

    /* Admissions Section */
    .admissions-section {
        font-size: 1.2em;
        color: white;
        margin-top: 30px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            box-shadow: none;
        }

        .main-content {
            margin-left: 0;
        }

        .nav-link {
            font-size: 1em;
        }

        .btn-logout {
            font-size: 1em;
            padding: 8px 15px;
        }

        .main-content h2 {
            font-size: 2em;
        }

        .intro-text {
            font-size: 1.1em;
        }
    }
</style>

<script>
    function showSection(section) {
        let contentArea = document.getElementById('contentArea');
        let admissionsSection = document.getElementById('admissionsSection');
        
        // Show both sections, and toggle the admissions section visibility
        if (section === 'admissions') {
            admissionsSection.style.display = 'block';  // Show admissions section
        } else {
            admissionsSection.style.display = 'none';   // Hide admissions section
        }
    }
</script>

@endsection
