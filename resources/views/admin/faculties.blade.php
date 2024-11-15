@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white text-center sidebar-title">Admin Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.institutions') }}">Add Institutions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.faculties.add') }}">Add Faculties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.courses.add') }}">Add Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.institutions') }}">Delete Institutions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.admissions') }}">Publish Admissions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="{{ route('admin.profile.edit') }}">Profile</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="btn btn-logout">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <main role="main" class="main-content">
        <div id="contentArea">
            <h2>Welcome to the Admin Dashboard</h2>
            <p>This is the admin dashboard where you can manage institutions, faculties, courses, and admissions.</p>
        </div>
    </main>
</div>

<script>
    function showSection(section) {
        let contentArea = document.getElementById('contentArea');
        switch(section) {
            case 'dashboard':
                contentArea.innerHTML = '<h2>Admin Dashboard</h2><p>This is the admin dashboard where you can manage institutions and courses.</p>';
                break;
            // Additional cases for each menu item can be added here
            default:
                contentArea.innerHTML = '<h2>Welcome to the Admin Dashboard</h2><p>This is the admin dashboard where you can manage institutions and courses.</p>';
        }
    }
</script>

<style>
    /* General Body Styling */
    body {
        background-color: #1B2A59; /* Deep Blue Background */
        color: #FFFFFF; /* White text color */
        font-family: Arial, sans-serif;
    }

    /* Sidebar Styling */
    .sidebar {
        height: 100vh; /* Full height */
        width: 220px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #F24C27; /* Orange Background */
        padding-top: 20px;
        box-shadow: 4px 0px 8px rgba(0, 0, 0, 0.3);
        transition: width 0.3s ease;
    }

    .sidebar:hover {
        width: 250px; /* Expand sidebar on hover */
    }

    .sidebar-title {
        color: #FFFFFF;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .nav-item {
        margin: 15px 0;
    }

    .nav-link {
        color: white;
        font-size: 1.1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 10px 20px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .nav-link:hover {
        background-color: #FF5900; /* Hover effect */
        transform: translateX(10px); /* Slide effect on hover */
    }

    .sidebar-link {
        text-decoration: none;
        color: #FFFFFF;
    }

    .btn-logout {
        background-color: #dc3545; /* Red Logout Button */
        color: white;
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-logout:hover {
        background-color: #c82333; /* Darker red on hover */
    }

    /* Main Content Styling */
    .main-content {
        margin-left: 220px; /* Sidebar width */
        background-color: #F7F7F7; /* Light background for main content */
        padding: 20px;
        min-height: 100vh;
        transition: margin-left 0.3s ease;
    }

    .main-content h2 {
        font-size: 2rem;
        color: #333333;
    }

    .main-content p {
        font-size: 1rem;
        color: #555555;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .sidebar {
            width: 200px; /* Slightly narrower on smaller screens */
        }

        .main-content {
            margin-left: 200px; /* Adjust main content for smaller sidebar */
        }
    }

    @media (max-width: 576px) {
        .sidebar {
            width: 180px; /* Even smaller for very small screens */
        }

        .main-content {
            margin-left: 180px; /* Adjust for smallest sidebar */
        }
    }
</style>
@endsection
