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
  <link rel="stylesheet" href="../css/event-details.css" />
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
  <!-- MENU BAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <!-- Navbar Brand -->
      <a class="navbar-brand" href="./home.php">AUS Sport Club</a>

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
            <a href="./event-details.php" class="nav-link smoothScroll">Events</a>
          </li>
          <li class="nav-item">
            <a href="./news.php" class="nav-link smoothScroll">News & Announcements</a>
          </li>
          <li class="nav-item">
            <a href="./about-us.php" class="nav-link smoothScroll">About Us</a>
          </li>
          <li class="nav-item">
            <a href="./contact-us.php" class="nav-link smoothScroll">Contact</a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto d-flex align-items-center">
          <li class="nav-item">
            <a href="./login.php" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="./register.php" class="nav-link">Register</a>
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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto col-12">
          <div class="hero-text mt-5 text-center">
            <h6 data-aos="fade-up" data-aos-delay="300">
              New way to build a healthy lifestyle!
            </h6>
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">
              Upgrade your body at Gymso Fitness
            </h1>
            <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get
              started</a>
            <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up"
              data-aos-delay="700">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- EVENT DETAILS -->
  <section class="event-details section" id="event-details">
    <div class="container">
      <h2 class="section-title text-center" data-aos="fade-up">
        Event Details
      </h2>
      <p class="section-subtitle text-center mb-5" data-aos="fade-up" data-aos-delay="100">
        Get ready for an unforgettable experience at Sports Fiesta 2024.
        Here’s everything you need to know.
      </p>

      <div class="details-grid">
        <!-- Event Date -->
        <div class="detail-item" data-aos="zoom-in" data-aos-delay="200">
          <div class="detail-icon">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <h4 class="detail-title">Event Date</h4>
          <p class="detail-text">March 15 - March 20, 2024</p>
        </div>

        <!-- Location -->
        <div class="detail-item" data-aos="zoom-in" data-aos-delay="300">
          <div class="detail-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h4 class="detail-title">Location</h4>
          <p class="detail-text">National Sports Arena, City Center</p>
        </div>

        <!-- Participants -->
        <div class="detail-item" data-aos="zoom-in" data-aos-delay="400">
          <div class="detail-icon">
            <i class="fas fa-users"></i>
          </div>
          <h4 class="detail-title">Participants</h4>
          <p class="detail-text">
            Over 5,000 athletes from 50+ sports categories
          </p>
        </div>

        <!-- Registration Deadline -->
        <div class="detail-item" data-aos="zoom-in" data-aos-delay="500">
          <div class="detail-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h4 class="detail-title">Registration Deadline</h4>
          <p class="detail-text">February 28, 2024</p>
        </div>
      </div>

      <div class="cta text-center mt-5" data-aos="fade-up" data-aos-delay="600">
        <a href="#" class="btn custom-btn-lg">Register Now</a>
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
    AOS.init({
      duration: 1000
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