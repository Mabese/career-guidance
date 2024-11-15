<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career Guidance</title>

    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Styles -->
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #111;
            color: pink;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #ff5900;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: #fff;
            font-weight: 700;
            font-size: 1.8em;
        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
        }

        .nav-link {
            color: #fff;
            font-size: 1.1em;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #ff8c00;
            text-decoration: underline;
        }

        /* Hero Section Styles */
        .hero-section {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(135deg, #ff5900, #ff8c00);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            margin-top: 50px;
        }

        .hero-section h1 {
            font-size: 3em;
            color: #fff;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2em;
            color: #d1d1d1;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #ff8c00;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.1em;
            border-radius: 50px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff5900;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .hero-section h1 {
                font-size: 2.5em;
            }

            .hero-section p {
                font-size: 1em;
            }

            .btn-primary {
                padding: 12px 25px;
                font-size: 1em;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Career Guidance</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.login') }}">Students Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('institution.login') }}">Institutions Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login') }}">Admins Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to  Career Guidance </h1>
   
        <a href="{{ route('admin.login') }}" class="btn-primary">Get Started</a>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
