<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }

        .navbar-dark {
            background-color: #1f1f1f;
        }

        .dropdown-menu {
            background-color: #1f1f1f;
        }

        .dropdown-menu .dropdown-item {
            color: #ffffff;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #333333;
            color: #ffffff;
        }

        /* Custom Styles for Service Section */
        #service {
            padding: 50px 0;
        }

        #service h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        #service p {
            font-size: 1.2rem;
            line-height: 1.6;
            text-align: center;
            margin-bottom: 30px;
        }

        .service-card {
            background-color: #2c2c2c;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-card i {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff7f50;
        }

        .service-card h5 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 1.1rem;
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

    <!-- Service Section -->
    <div class="container" id="service">
        <h2>Our Services</h2>
        <p>We offer a wide range of services to help you achieve your business goals. From design to digital marketing, we've got you covered!</p>
        
        <!-- Service Cards -->
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-md-3">
                <div class="service-card">
                    <h5>lorem ipsum</h5>
                    <p>We provide lifting services for various needs, whether for events, furniture moving, or heavy-duty lifting.</p>
                </div>
            </div>
            <!-- Service Card 2 -->
            <div class="col-md-3">
                <div class="service-card">
                    <h5>Lorem ipsums</h5>
                    <p>Experience gourmet dining at your location with our top-notch meal delivery and catering service.</p>
                </div>
            </div>
            <!-- Service Card 3 -->
            <div class="col-md-3">
                <div class="service-card">
                    <h5>UI/UX Design</h5>
                    <p>Our design team creates stunning, user-friendly interfaces to enhance your website and app experience.</p>
                </div>
            </div>
            <!-- Service Card 4 -->
            <div class="col-md-3">
                <div class="service-card">
                    <h5>Digital Marketing</h5>
                    <p>Maximize your business reach with our tailored digital marketing strategies to attract and convert your target audience.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Node. All Rights Reserved.</p>
            <p>Follow us on <a href="https://www.instagram.com/jauzafd/">Instagram</a></p>
        </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
