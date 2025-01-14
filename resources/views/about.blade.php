<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
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

        /* Hero Section */
        .hero-section {
            background-image: url('https://4kwallpapers.com/images/walls/thumbs_3t/18964.jpg'); 
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: #fff;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.25rem;
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

        /* About Section */
        #about {
            padding: 50px 0;
        }

        #about h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        #about p {
            font-size: 1.25rem;
            line-height: 1.6;
        }

        .about-box {
            background-color: #2c2c2c;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .about-box h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-box p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .team-section {
            background-color: #1f1f1f;
            padding: 50px 0;
        }

        .team-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 40px;
        }

        .team-member {
            background-color: #2c2c2c;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        footer {
            background-color: #1f1f1f;
            padding: 20px 0;
            text-align: center;
            color: #fff;
        }

        footer a {
            color: #ff7f50;
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
        <h1>About Us</h1>
        <p>We are a passionate team dedicated to innovation and excellence.</p>
    </section>

    <!-- About Section -->
    <div class="container mt-5">
        <section id="about">
            <h2>Who We Are</h2>
            <p>We are a group of creative and dedicated individuals working together to bring meaningful impact to the world. Our mission is to provide high-quality solutions, foster creativity, and ensure our clients experience value-driven results in all our services.</p>
            
            <!-- Our Vision and Mission -->
            <div class="row">
                <div class="col-md-6">
                    <div class="about-box">
                        <h3>Our Vision</h3>
                        <p>To be a leading company recognized for providing innovative and cutting-edge solutions that drive success and create lasting value for our clients and partners.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-box">
                        <h3>Our Mission</h3>
                        <p>We strive to continuously improve our services through innovation and technology, while maintaining a focus on customer satisfaction and sustainability.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Node. All Rights Reserved.</p>
        <p>Follow us on <a href="https://www.instagram.com/jauzafd/">Instagram</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
