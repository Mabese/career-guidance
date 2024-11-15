@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex" style="background-color: #1B2A59; /* Deep Blue */">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white text-center mt-4 mb-4" style="font-size: 1.6rem; font-weight: bold;">Institution Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('institution.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('institution.faculties') }}">Manage Faculties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('institution.courses') }}">Manage Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('institution.applications') }}">View Applications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('institution.profile.edit') }}">Profile</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('institution.logout') }}">
                    @csrf
                    <button class="btn btn-danger w-100 mt-3 logout-btn">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <main role="main" class="main-content">
        <div id="contentArea">
            <h2 class="mt-3">Welcome to the Institution Dashboard</h2>
            <p class="text-dark">This is the institution dashboard where you can manage faculties, courses, and view applications.</p>
        </div>
    </main>
</div>

<style>
    /* General Body Styling */
    body {
        background-color: #121212; /* Dark background for the body */
        color: white; /* White text color */
        font-family: 'Arial', sans-serif;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 250px;
        height: 100vh; /* Full-height sidebar */
        position: fixed;
        top: 0;
        left: 0;
        background-color: #1B2A59; /* Dark blue background */
        padding: 20px;
        border-radius: 0 8px 8px 0; /* Rounded corners on the right side */
    }

    /* Sidebar Navigation Links */
    .nav-link {
        color: white; /* Default white text color */
        padding: 12px;
        font-size: 1.1rem;
        text-decoration: none; /* Remove underlines from links */
        margin-bottom: 15px; /* Space between links */
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s ease; /* Smooth hover transition */
    }

    .nav-link:hover {
        background-color: #FF5900; /* Orange highlight on hover */
        color: white; /* Keep text white on hover */
    }

    /* Main Content Section */
    .main-content {
        flex: 1;
        background-color: #F24C27; /* Orange background for main content */
        padding: 40px;
        margin-left: 250px; /* Space for the sidebar */
        border-radius: 8px; /* Rounded corners for the content section */
    }

    /* Heading Styles */
    h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #333; /* Dark text for headings */
    }

    /* Paragraph Text Styling */
    p {
        font-size: 1.2rem;
        color: #444; /* Slightly lighter text color */
    }

    /* Logout Button Styling */
    .logout-btn {
        background-color: #DC3545; /* Red background for logout button */
        border: none;
        color: white;
        padding: 12px 20px;
        border-radius: 30px;
        font-size: 1.1rem;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .logout-btn:hover {
        background-color: #C82333; /* Darker red on hover */
        transform: translateY(-2px); /* Slight lift effect */
    }

    /* Container Fluid for Sidebar + Content */
    .container-fluid {
        display: flex;
        min-height: 100vh; /* Ensure full height */
    }
</style>
@endsection
