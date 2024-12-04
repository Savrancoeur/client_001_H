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

    <!-- NEWS AND ANNOUNCEMENTS -->
    <section class="news section" id="news">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">
                Latest News & Announcements
            </h2>
            <p class="section-subtitle text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                Stay updated with the latest happenings and important announcements
                for Sports Fiesta 2024.
            </p>
            <div class="row">
                <!-- News Item 1 -->
                <div class="col-md-4 my-sm-2 my-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card">
                        <img src="../public/images/news/volunteers.png" alt="Volunteer Opportunities"
                            class="news-card-img" />
                        <div class="news-card-body">
                            <h5 class="news-card-title">Volunteer Opportunities</h5>
                            <p class="news-card-text">
                                Be part of the action! We're looking for energetic volunteers
                                to help bring Sports Fiesta 2024 to life. Gain valuable
                                experience and enjoy perks as a team member.
                            </p>
                            <a href="./event-details.html" class="btn custom-btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- News Item 2 -->
                <div class="col-md-4 my-sm-2 my-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="news-card">
                        <img src="../public/images/news/discounts.png" alt="Early Bird Discounts"
                            class="news-card-img" />
                        <div class="news-card-body">
                            <h5 class="news-card-title">Early Bird Discounts</h5>
                            <p class="news-card-text">
                                Register before <strong>10th January 2025</strong> and enjoy
                                exclusive discounts on entry tickets. Don't miss this chance
                                to save big while joining the fun. So, What are you waiting
                                for?
                            </p>
                            <a href="./register.html" class="btn custom-btn-sm">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- News Item 3 -->
                <div class="col-md-4 my-sm-2 my-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="news-card">
                        <img src="../public/images/news/special_guest.png" alt="Special Guest Announcement"
                            class="news-card-img" />
                        <div class="news-card-body">
                            <h5 class="news-card-title">Special Guest Announcement</h5>
                            <p class="news-card-text">
                                We are thrilled to announce that <strong>Alex Morgan</strong>,
                                international soccer star, will be joining us as a guest of
                                honor. Don't miss this incredible opportunity!
                            </p>
                            <a href="#" class="btn custom-btn-sm">Read More</a>
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