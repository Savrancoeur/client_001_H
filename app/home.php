<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AUS Sport Club</title>

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../public/libs/css/bootstrap.min.css" />

    <!-- Font Awesome CSS link -->
    <link
      rel="stylesheet"
      href="../public/libs/font-awesome-5/css/fontawesome-all.min.css"
    />
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

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="./home.php" class="nav-link smoothScroll">Home</a>
            </li>
            <li class="nav-item">
              <a href="event-details.php" class="nav-link smoothScroll"
                >Events</a
              >
            </li>
            <li class="nav-item">
              <a href="about-us.php" class="nav-link smoothScroll"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a href="contact-us.php" class="nav-link smoothScroll"
                >Contact</a
              >
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
                <img
                  src="../public/images/auth/profile_icon.png"
                  style="width: 30px"
                  alt="Profile"
                  class="profile-pic"
                />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HERO -->
    <section
      class="hero d-flex flex-column justify-content-center align-items-center"
      id="home"
    >
      <div class="bg-overlay"></div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto col-12">
            <div class="hero-text mt-5 text-center">
              <h6 data-aos="fade-up" data-aos-delay="300">
                Interested in getting a healthy lifestyle?
              </h6>

              <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">
                Come and get it at <br />
                AUS Sport Club!
              </h1>

              <a
                href="#feature"
                class="btn custom-btn mt-3"
                data-aos="fade-up"
                data-aos-delay="600"
                >Get started</a
              >

              <a
                href="#about"
                class="btn custom-btn bordered mt-3"
                data-aos="fade-up"
                data-aos-delay="700"
                >learn more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature" id="feature">
      <div class="container">
        <div
          class="d-flex flex-column align-items-center justify-content-center mx-lg-auto mr-lg-5 col-lg-8 col-md-10 col-12 mb-5"
        >
          <h2 class="mb-5 text-white" data-aos="fade-up">
            Filter to see the events
          </h2>

          <!-- FILTERS -->

          <div
            class="row g-4 align-items-center justify-content-center text-white mb-5"
            data-aos="fade-up"
          >
            <!-- First Row: Date and Sport -->

            <div class="col-md-6 mb-2 text-center">
              <h3 class="mb-2">Date:</h3>
              <input
                type="date"
                name="date-selection"
                id="date-selection"
                placeholder="dd/mm/yy"
                class="form-control"
              />
            </div>

            <div class="col-md-6 mb-2 text-center">
              <h3 class="mb-2">Sport:</h3>
              <select
                name="sport-selection"
                id="sport-selection"
                class="form-control"
              >
                <option value="0" disabled selected>All Sports</option>
                <option value="football">Football</option>
                <option value="basketball">Basketball</option>
              </select>
            </div>

            <!-- Second Row: Location and Age-group -->

            <div class="col-md-6 mb-2 text-center">
              <h3 class="mb-2">Location:</h3>
              <input
                type="text"
                name="location-selection"
                id="location-selection"
                placeholder="Enter your prefered location"
                class="form-control"
              />
            </div>

            <div class="col-md-6 mb-2 text-center">
              <h3 class="mb-2">Age-group:</h3>
              <select
                name="age-selection"
                id="age-selection"
                class="form-control"
              >
                <option value="0" disabled selected>All Ages</option>
                <option value="below-18">>18</option>
                <option value="below-30">18-30</option>
                <option value="above-30">+30</option>
              </select>
            </div>
          </div>

          <a
            href="#"
            class="btn custom-btn bg-color mt-3"
            data-aos="fade-up"
            data-aos-delay="300"
            data-toggle="modal"
            data-target="#membershipForm"
            >Become a member today</a
          >
        </div>

        <section
          class="upcoming-events py-5"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <div class="container">
            <h2 class="text-center text-white mb-4">Upcoming Events</h2>
            <div class="row justify-content-center">
              <!-- Event Card 1 -->
              <div class="col-lg-3 col-md-6 mb-4">
                <div
                  class="card text-center"
                  style="background-color: #252629; border: none"
                >
                  <img
                    src="../public/images/event/football1.jpg"
                    class="card-img-top"
                    alt="Soccer Championship"
                  />
                  <div class="card-body text-white">
                    <h5 class="card-title">Soccer Championship</h5>
                    <p class="mb-1"><strong>Date:</strong> 2024-05-20</p>
                    <p class="mb-1"><strong>Location:</strong> Main Stadium</p>
                    <p class="mb-3"><strong>Age Group:</strong> 18+</p>
                    <a
                      href="#"
                      class="btn btn-sm text-white"
                      style="background-color: #c60a11"
                      >REGISTER</a
                    >
                  </div>
                </div>
              </div>
              <!-- Event Card 2 -->
              <div class="col-lg-3 col-md-6 mb-4">
                <div
                  class="card text-center"
                  style="background-color: #252629; border: none"
                >
                  <img
                    src="../public/images/event/basketball1.png"
                    class="card-img-top"
                    alt="Basketball Tournament"
                  />
                  <div class="card-body text-white">
                    <h5 class="card-title">Basketball Tournament</h5>
                    <p class="mb-1"><strong>Date:</strong> 2024-05-20</p>
                    <p class="mb-1"><strong>Location:</strong> Main Stadium</p>
                    <p class="mb-3"><strong>Age Group:</strong> 18+</p>
                    <a
                      href="#"
                      class="btn btn-sm text-white"
                      style="background-color: #c60a11"
                      >REGISTER</a
                    >
                  </div>
                </div>
              </div>
              <!-- Event Card 3 -->
              <div class="col-lg-3 col-md-6 mb-4">
                <div
                  class="card text-center"
                  style="background-color: #252629; border: none"
                >
                  <img
                    src="../public/images/event/marathon1.png"
                    class="card-img-top"
                    alt="Marathon for Charity"
                  />
                  <div class="card-body text-white">
                    <h5 class="card-title">Marathon for Charity</h5>
                    <p class="mb-1"><strong>Date:</strong> 2024-05-20</p>
                    <p class="mb-1"><strong>Location:</strong> Main Stadium</p>
                    <p class="mb-3"><strong>Age Group:</strong> 18+</p>
                    <a
                      href="#"
                      class="btn btn-sm text-white"
                      style="background-color: #c60a11"
                      >REGISTER</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
          <div
            class="d-flex flex-column flex-md-row justify-content-center mx-auto col-lg-5 col-md-7 col-12"
          >
            <p class="mx-md-4 mx-lg-5 mb-2 mb-md-0">
              <i class="fas fa-envelope mr-2" style="color: #c60a11"></i>
              <a href="#" style="color: #a47800; text-decoration: none"
                >aussportclub@company.co</a
              >
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
    <div
      class="modal fade"
      id="membershipForm"
      tabindex="-1"
      role="dialog"
      aria-labelledby="membershipFormLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="membershipFormLabel">
              Membership Form
            </h2>

            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
              <input
                type="text"
                class="form-control"
                name="cf-name"
                placeholder="John Doe"
              />

              <input
                type="email"
                class="form-control"
                name="cf-email"
                placeholder="Johndoe@gmail.com"
              />

              <input
                type="tel"
                class="form-control"
                name="cf-phone"
                placeholder="123-456-7890"
                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                required
              />

              <textarea
                class="form-control"
                rows="3"
                name="cf-message"
                placeholder="Additional Message"
              ></textarea>

              <button
                type="submit"
                class="form-control"
                id="submit-button"
                name="submit"
              >
                Submit Button
              </button>

              <div class="custom-control custom-checkbox">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="signup-agree"
                />
                <label
                  class="custom-control-label text-small text-muted"
                  for="signup-agree"
                  >I agree to the <a href="#">Terms &amp;Conditions</a>
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
