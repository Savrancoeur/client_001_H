<!DOCTYPE html>
<html lang="en">

<head>

    <title>AUS Sport Club</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../public/libs/css/bootstrap.min.css">

    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="../public/libs/font-awesome-5/css/fontawesome-all.min.css" />
    <!-- AOS CSS Link -->
    <link rel="stylesheet" href="../public/libs/css/aos.css">

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/news.css">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./home.html">AUS Sport Club</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="./home.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="event-details.php" class="nav-link smoothScroll">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="news.php" class="nav-link smoothScroll">News & Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a href="about-us.php" class="nav-link smoothScroll">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact-us.php" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="./register.php" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="./profile.php" class="nav-link">
                            <img src="../public/images/auth/profile_icon.png" style="width: 30px" alt="Profile"
                                class="profile-pic" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- FEATURE -->
    <section class="feature px-md-3" id="feature">
        <div class="container">
            <div class="row">
                <!-- Image section -->
                <div class="col-lg-6 col-md-12" data-aos="zoom-in">
                    <div class="feature-image-wrapper h-100">
                        <img src="../public/images/feature.png" alt="Gymso Feature" class="feature-image h-100 w-100" />
                    </div>
                </div>

                <!-- Content Section -->
                <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-between">
                    <div class="content-wrapper d-flex flex-column justify-content-center h-100">
                        <!-- Center Content -->
                        <div class="d-flex flex-column justify-content-center text-center" data-aos="fade-right">
                            <h2 class="text-white mb-3">New to the AUS Sport Club?</h2>
                            <h6 class="text-white mb-4">
                                Your membership is up to 2 months FREE ($62.50 per month)
                            </h6>
                            <p class="text-light">
                                Join with us and feel the best moments of your life!
                            </p>
                            <a href="#" class="btn custom-btn bg-color mt-3 hover-grow">
                                Become a member today
                            </a>
                        </div>

                        <!-- Working Hours -->
                        <div class="text-white mt-5 text-center" data-aos="fade-left">
                            <h2 class="mb-4">Working hours</h2>
                            <strong class="d-block">Sunday: Closed</strong>
                            <strong class="d-block mt-3">Monday - Friday</strong>
                            <p>7:00 AM - 10:00 PM</p>
                            <strong class="d-block mt-3">Saturday</strong>
                            <p>6:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section class="upcoming-events-section" id="events">
        <div class="container">
            <h2 class="section-heading text-center" data-aos="fade-up">Upcoming Events</h2>
            <p class="section-description text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                Explore the exciting events lined up for Sports Fiesta 2024 and beyond.
            </p>
            <div class="row g-4">
                <!-- Event 1 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="event-box">
                        <div class="event-image-container">
                            <span class="event-status-tag upcoming">Upcoming</span>
                            <img src="../public/images/event/football1.jpg" alt="Soccer Championship"
                                class="event-thumbnail">
                        </div>
                        <div class="event-info">
                            <h5 class="event-heading">Soccer Championship</h5>
                            <div class="event-divider"></div>
                            <ul class="event-meta">
                                <li><strong>Date:</strong> March 10 2025</li>
                                <li><strong>Location:</strong> Soccer Arena, Downtown</li>
                                <li><strong>Sport:</strong> Soccer</li>
                                <li><strong>Age Group:</strong> Under 18</li>
                            </ul>
                            <a href="./register.html" class="action-button mt-3">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- Event 2 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="event-box">
                        <div class="event-image-container">
                            <span class="event-status-tag past">Past</span>
                            <img src="../public/images/event/basketball1.png" alt="Basketball League"
                                class="event-thumbnail">
                        </div>
                        <div class="event-info">
                            <h5 class="event-heading">Basketball League</h5>
                            <div class="event-divider"></div>
                            <ul class="event-meta">
                                <li><strong>Date:</strong> March 15 2025</li>
                                <li><strong>Location:</strong> Central Court</li>
                                <li><strong>Sport:</strong> Basketball</li>
                                <li><strong>Age Group:</strong> Open to All</li>
                            </ul>
                            <a href="./register.html" class="action-button mt-3">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- Event 3 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="event-box">
                        <div class="event-image-container">
                            <span class="event-status-tag upcoming">Upcoming</span>
                            <img src="../public/images/event/marathon1.png" alt="Marathon Run" class="event-thumbnail">
                        </div>
                        <div class="event-info">
                            <h5 class="event-heading">Marathon Run</h5>
                            <div class="event-divider"></div>
                            <ul class="event-meta">
                                <li><strong>Date:</strong> March 20 2025</li>
                                <li><strong>Location:</strong> City Park</li>
                                <li><strong>Sport:</strong> Running</li>
                                <li><strong>Age Group:</strong> All Ages</li>
                            </ul>
                            <a href="./register.html" class="action-button mt-3">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Section -->
                <div class="ml-auto col-lg-4 col-md-5 text-center text-md-left">
                    <p class="copyright-text mb-2">
                        Copyright &copy; 2024 AUS Sport Club
                    </p>
                </div>

                <!-- Right Section -->
                <div class="d-flex flex-column flex-md-row justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mx-md-4 mx-lg-5 mb-2 mb-md-0">
                        <i class="fas fa-envelope mr-2" style="color: #c60a11"></i>
                        <a href="#" style="color: #a47800; text-decoration: none">aussportclub@company.co</a>
                    </p>
                    <p>
                        <i class="fa fa-phone mr-2" style="color: #c60a11"></i>
                        09 876 543 210
                    </p>
                </div>
            </div>

            <!-- Divider -->
            <hr style="border-top: 1px solid #444; margin: 1.5rem 0" />

            <!-- Social Links -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="mr-3" style="color: #f97316; font-size: 1.2rem">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="mr-3" style="color: #f97316; font-size: 1.2rem">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="mr-3" style="color: #f97316; font-size: 1.2rem">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="color: #f97316; font-size: 1.2rem">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>



    <!-- AOS JS link -->
    <script src="../public/libs/js/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>

    <!-- Bootstrap JS link -->
    <script src="../public/libs/js/bootstrap.min.js"></script>

    <!-- JQuery JS link -->
    <script src="../public/libs/js/jquery-3.7.1.min.js"></script>

    <!-- Smoothscroll JS link -->
    <script src="../public/libs/js/smoothscroll.js"></script>

    <!-- Custom JS link -->
    <script src="../js/app.js"></script>
</body>

</html>