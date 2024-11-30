<!DOCTYPE html>
<html lang="en">

<head>
    <title>AUS Sport Club</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../public/libs/css/bootstrap.min.css" />

    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="../public/libs/font-awesome-5/css/fontawesome-all.min.css" />
    <!-- AOS CSS Link -->
    <link rel="stylesheet" href="../public/libs/css/aos.css" />

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/home.css" />
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="./home.html">AUS Sport Club</a>

            <!-- Navbar Toggle Button (Burger Menu) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left Side Links -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="./home.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./event-details.html" class="nav-link smoothScroll">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="./about-us.html" class="nav-link smoothScroll">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact-us.html" class="nav-link smoothScroll">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="./past-events.html" class="nav-link smoothScroll">Memories</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a href="./login.html" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="./register.html" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="../public/images/auth/profile_icon.png" style="width: 30px" alt="Profile"
                                class="profile-pic" />
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="./admin/dashboard.html">Admin</a>
                            <a class="dropdown-item" href="./profile.html">Member</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>

        <!-- Modern Success Alert -->
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-end ms-auto me-3 mb-5"
            role="alert">
            <i class="fas fa-check-circle me-3 fa-2x text-light"></i>
            <div class="alert-content flex-grow-1">
                You successfully read this important alert message.
            </div>
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close">
                <i class="fas fa-times-circle"></i>
            </button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h6 data-aos="fade-up" data-aos-delay="200" class="text-shadow">
                            Ready to embrace a healthy lifestyle?
                        </h6>

                        <h1 class="text-white display-4" data-aos="fade-up" data-aos-delay="400">
                            Join the AUS Sport Club Today!
                        </h1>

                        <p class="lead text-white" data-aos="fade-up" data-aos-delay="600">
                            Get started with events, training, and more—discover your
                            fitness potential with us.
                        </p>

                        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                            <a href="#feature" class="btn custom-btn mt-3 mx-2">Get Started</a>
                            <a href="#about" class="btn custom-btn bordered mt-3 mx-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FILTER SECTION -->
    <section id="filter" class="filter-section py-5">
        <div class="container">
            <h2 class="text-center text-white mb-5" data-aos="fade-up" data-aos-delay="200">
                Find Your Next Event
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="filter-options d-flex flex-wrap justify-content-between align-items-center">
                        <div class="filter-item">
                            <select class="form-select" id="event-category" aria-label="Event Category"
                                data-aos="fade-up" data-aos-delay="400">
                                <option selected>Choose Category</option>
                                <option value="1">Sports</option>
                                <option value="2">Fitness</option>
                                <option value="3">Workshops</option>
                                <option value="4">Health</option>
                            </select>
                        </div>

                        <div class="filter-item">
                            <select class="form-select" id="event-date" aria-label="Event Date" data-aos="fade-up"
                                data-aos-delay="600">
                                <option selected>Choose Sport</option>
                                <option value="1">Football</option>
                                <option value="2">Basketball</option>
                                <option value="3">Marathon</option>
                            </select>
                        </div>

                        <div class="filter-item">
                            <input type="text" class="form-control" id="location" placeholder="Enter location..."
                                data-aos="fade-up" data-aos-delay="700" />
                        </div>

                        <div class="filter-item">
                            <select class="form-select" id="event-date-2" aria-label="Event Date" data-aos="fade-up"
                                data-aos-delay="600">
                                <option selected>Choose Age Group</option>
                                <option value="1">-18</option>
                                <option value="2">18-30</option>
                                <option value="3">30+</option>
                            </select>
                        </div>

                        <div class="filter-item w-100">
                            <button class="btn custom-btn" id="filter-btn" data-aos="fade-up" data-aos-delay="800">
                                Apply Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS SECTION -->
    <section id="events" class="upcoming-events py-5">
        <div class="container">
            <h2 class="text-center text-white mb-5" data-aos="fade-up" data-aos-delay="200">
                Upcoming Events
            </h2>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="event-card">
                        <img src="../public/images/event/football1.jpg" alt="Event Image"
                            class="img-fluid rounded-top" />
                        <div class="event-card-body">
                            <h4 class="event-title">Fitness Bootcamp</h4>
                            <p class="event-date">March 22, 2024 - 10:00 AM</p>
                            <p class="event-location">AUS Sports Complex</p>
                            <p class="event-description">
                                Join our fitness bootcamp to jumpstart your journey to better
                                health. All levels welcome!
                            </p>
                            <a href="#" class="btn custom-btn mt-3">Register Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="event-card">
                        <img src="../public/images/event/basketball1.png" alt="Event Image"
                            class="img-fluid rounded-top" />
                        <div class="event-card-body">
                            <h4 class="event-title">Yoga Retreat</h4>
                            <p class="event-date">March 25, 2024 - 8:00 AM</p>
                            <p class="event-location">AUS Wellness Center</p>
                            <p class="event-description">
                                Relax and unwind with our exclusive yoga retreat. Perfect for
                                all levels of experience.
                            </p>
                            <a href="#" class="btn custom-btn mt-3">Register Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="event-card">
                        <img src="../public/images/event/marathon1.png" alt="Event Image"
                            class="img-fluid rounded-top" />
                        <div class="event-card-body">
                            <h4 class="event-title">Running Challenge</h4>
                            <p class="event-date">April 5, 2024 - 7:00 AM</p>
                            <p class="event-location">AUS Park</p>
                            <p class="event-description">
                                Challenge yourself in our running competition. Prizes for the
                                fastest times!
                            </p>
                            <a href="#" class="btn custom-btn mt-3">Register Now</a>
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