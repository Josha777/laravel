<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212; /* Background halaman gelap */
            color: #ffffff; /* Warna teks putih */
            font-family: 'Arial', sans-serif;
        }

        .navbar-dark {
            background-color: #1f1f1f; /* Warna navbar */
        }

        .dropdown-menu {
            background-color: #1f1f1f; /* Warna dropdown */
        }

        .dropdown-menu .dropdown-item {
            color: #ffffff; /* Warna teks dropdown */
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #333333; /* Warna hover dropdown */
            color: #ffffff;
        }

        /* Hero Section */
        .hero-section {
            background-image: url('https://4kwallpapers.com/images/walls/thumbs_3t/7897.png'); 
            background-size: 120%; /* Memperbesar gambar latar belakang */
            background-position: center;
            color: #fff;
            padding: 120px 0; /* Memberi lebih banyak ruang untuk teks */
            text-align: center;
        }

        .hero-section h1 {
            font-size: 4rem; /* Ukuran font besar */
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem; /* Ukuran font sedikit lebih besar */
            margin-top: 20px;
        }

        .cta-button {
            background-color: #000000;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #080808;
        }

        /* Card Section */
        .card-custom {
            background-color: #2c2c2c;
            border: none;
            color: #fff;
            transition: transform 0.3s ease-in-out;
        }

        .card-custom:hover {
            background-color: #444;
            transform: translateY(-10px);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
        }

        /* Testimonial Section */
        .testimonial {
            background-color: #333;
            padding: 50px 0;
        }

        .testimonial h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #fff;
        }

        .testimonial-item {
            background-color: #444;
            padding: 30px;
            border-radius: 10px;
            margin: 15px;
            text-align: center;
        }

        .testimonial-item p {
            font-size: 1.2rem;
            font-style: italic;
        }

        .testimonial-item p:last-child {
            font-size: 1rem;
            color: #ff7f50;
            font-weight: bold;
        }

        /* Featured Services Section */
        .service-section {
            margin-bottom: 50px; /* Menambah jarak antara bagian service dan footer */
        }

        /* Footer */
        footer {
            background-color: #1f1f1f;
            padding: 30px 0; /* Memberikan lebih banyak padding pada footer */
            text-align: center;
            color: #fff;
        }

        footer a {
            color: #0039a3;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Node</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('service') }}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('https://www.instagram.com/jauzafd/') }}">My Profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Node</h1>
        <p>Explore, Learn, and Build with Us</p>
        <button class="cta-button">Join Us Now</button>
    </section>

    <!-- Featured Services Section -->
    <div class="container mt-5 service-section">
        <h2 class="text-center text-white mb-4">Our Featured Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Node. All Rights Reserved.</p>
        <p>Follow us on <a href="https://www.instagram.com/jauzafd/">Instagram</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
