<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- FontAwesome for Social Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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

        #contact {
            padding: 60px 0;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        #contact h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        #contact p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .social-icons i {
            font-size: 2rem;
            margin-right: 15px;
            color: #ff7f50;
            transition: color 0.3s;
        }

        .social-icons i:hover {
            color: #e76a3e;
        }

        .form-control {
            background-color: #2c2c2c;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .form-control:focus {
            background-color: #3d3d3d;
            box-shadow: 0 0 0 0.2rem rgba(255, 127, 80, 0.25);
        }

        .btn-submit {
            background-color: #ff7f50;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1rem;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #e76a3e;
        }

        iframe {
            width: 100%;
            border: 0;
            height: 400px;
            border-radius: 10px;
        }

        .contact-info {
            margin-top: 30px;
        }

        /* Footer */
        footer {
            background-color: #1f1f1f;
            padding: 30px 0;
            text-align: center;
            color: #fff;
        }

        footer a {
            color: #0039a3;
            text-decoration: none;
        }

        /* Centering flexbox container */
        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
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

    <!-- Contact Section -->
    <div class="container" id="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us for any inquiries, questions, or feedback.</p>

            <!-- Contact Info (Phone, Email) -->
            <div class="contact-info">
                <h4>Contact Information</h4>
                <p><strong>Email:</strong> contact.me@gmail.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
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
