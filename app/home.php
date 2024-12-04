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

  <!-- Modal -->
  <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="membershipFormLabel">
            Membership Form
          </h2>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form class="membership-form webform" role="form">
            <input type="text" class="form-control" name="cf-name" placeholder="John Doe" />

            <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com" />

            <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />

            <textarea class="form-control" rows="3" name="cf-message"
              placeholder="Additional Message"></textarea>

            <button type="submit" class="form-control" id="submit-button" name="submit">
              Submit Button
            </button>

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="signup-agree" />
              <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the
                <a href="#">Terms &amp;Conditions</a>
              </label>
            </div>
          </form>
        </div>

        <div class="modal-footer"></div>
      </div>
    </div>
  </div>

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