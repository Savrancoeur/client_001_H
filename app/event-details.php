<!DOCTYPE html>
<html lang="en">
<head>

     <title>AUS Sport Club</title>

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <!-- Bootstrap CSS link -->
     <link rel="stylesheet" href="../public/libs/css/bootstrap.min.css">

     <!-- Font Awesome CSS link -->
     <link
     rel="stylesheet"
     href="../public/libs/font-awesome-5/css/fontawesome-all.min.css"
   />
     <!-- AOS CSS Link -->
     <link rel="stylesheet" href="../public/libs/css/aos.css">

     <!-- Custom CSS link -->
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/event-details.css">

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
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">new way to build a healthy lifestyle!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Gymso Fitness</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>

     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the gymso?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE ($62.50 per month)</h6>

                    <p data-aos="fade-up" data-aos-delay="200">Gymso is free HTML template by <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a> for your commercial website. Bootstrap v4.2.1 Layout. Feel free to use it.</p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
     </section>

     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Perfect Body</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="../public/images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Yoga</h3>

                                        <span><strong>Trained by</strong> - Bella</span>

                                        <span class="class-price">$50</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="../public/images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Areobic</h3>

                                        <span><strong>Trained by</strong> - Mary</span>

                                        <span class="class-price">$66</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="../public/images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio</h3>

                                        <span><strong>Trained by</strong> - Cathe</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>

     <!-- SCHEDULE -->
     <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
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
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
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