<?php


// to show error codes
ini_set("display_errors", 1);

// call dbconnection file to use
require_once("dbconnect.php");
// call sessionconfig file to use its methods
require_once("sessionconfig.php");

// making default time zone
date_default_timezone_set("Asia/Yangon");

$user = null;
$message = "";

if(!verifysession('email')){
    redirectto('home.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update-profile'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

//    echo $id;
//    echo $name;
//    echo $email;
//    echo $phone;
//    echo $dob;

    try{
        $conn = $GLOBALS['conn'];
        $sql = "UPDATE users SET name=?, email=?, phonenumber=?, dob=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name,$email,$phone,$dob,$id]);
        setsession('profile-update', "Your profile has been updated");
    }catch (PDOException $e){
        echo $e->getMessage();
    }


}

function getusers($email){
    try{
        $conn = $GLOBALS['conn'];
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

if (verifysession("profile-update")) {
    $message = getsession("profile-update");
}


$user = getusers($_SESSION['email']);

//var_dump($user);
//echo $user['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AUS Sport Club</title>

    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../public/libs/css/bootstrap.min.css"/>

    <!-- Font Awesome CSS link -->
    <link
            rel="stylesheet"
            href="../public/libs/font-awesome-5/css/fontawesome-all.min.css"
    />
    <!-- AOS CSS Link -->
    <link rel="stylesheet" href="../public/libs/css/aos.css"/>

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/profile.css"/>
    <link rel="stylesheet" href="../css/toast.css"/>
</head>

<body>
<!-- Profile Section -->
<section class="profile section">
    <div class="container">
        <div class="profile-card">
            <div class="back-btn-container">
                <a href="./home.php" class="back-btn">Back to Home</a>
            </div>

            <h2 class="section-title" data-aos="fade-up" data-aos-delay="200">
                Profile Management
            </h2>

            <form action="profile.php" method="post" class="profile-form">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    value="<?php echo $user['name'] ?>"
                                    required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    value="<?php echo $user['email'] ?>"
                                    required
                            />
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    maxlength="11"
                                    placeholder="Enter your phone number"
                                    value="<?php echo $user['phonenumber'] ?>"
                                    required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $user['dob'] ?>" required/>
                        </div>
                    </div>
                </div>

                <button type="submit" name="update-profile" class="custom-btn">Save Changes</button>
            </form>
        </div>
    </div>
</section>

<!-- Event Management Section -->
<section class="event-management section" id="event-management">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h1 class="text-uppercase">Event Management</h1>
            <p>
                Register for upcoming events, manage your registrations, and track
                your participation history.
            </p>
        </div>

        <!-- Event Registration Form -->
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="event-card">
                    <h3 class="event-title">Register for Upcoming Event</h3>
                    <form
                            id="event-registration-form"
                            class="event-registration-form"
                    >
                        <div class="form-group">
                            <label for="event-name">Select Event</label>
                            <select class="form-control" id="event-name" required>
                                <option value="" disabled selected>Select an Event</option>
                                <option value="1">Annual Sports Day 2024</option>
                                <option value="2">Summer Soccer League</option>
                                <option value="3">Winter Training Camp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="participant-name">Your Name</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    id="participant-name"
                                    placeholder="Enter your name"
                                    required
                            />
                        </div>
                        <div class="form-group">
                            <label for="participant-email">Your Email</label>
                            <input
                                    type="email"
                                    class="form-control"
                                    id="participant-email"
                                    placeholder="Enter your email"
                                    required
                            />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn custom-btn text-white">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Manage Registrations -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="event-card">
                    <h3 class="event-title">Manage Your Registrations</h3>
                    <div id="manage-registrations">
                        <p>You are currently registered for the following events:</p>
                        <ul>
                            <li>
                                Annual Sports Day 2024
                                <button class="btn btn-danger btn-sm">Cancel</button>
                            </li>
                            <li>
                                Summer Soccer League
                                <button class="btn btn-danger btn-sm">Cancel</button>
                            </li>
                        </ul>
                        <p>
                            To manage your registrations, click the "Cancel" button next
                            to an event.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Participation History -->
        <div class="row">
            <div class="col-12">
                <div class="event-card">
                    <h3 class="event-title">Your Participation History</h3>
                    <p>Here’s a list of events you’ve participated in:</p>
                    <ul id="participation-history">
                        <li>Annual Sports Day 2023 (Completed)</li>
                        <li>Winter Training Camp 2022 (Completed)</li>
                        <li>Summer Soccer League 2021 (Completed)</li>
                    </ul>
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
                    <i class="fas fa-phone mr-2" style="color: #c60a11"></i>
                    09 876 543 210
                </p>
            </div>
        </div>

        <!-- Divider -->
        <hr style="border-top: 1px solid #444; margin: 1.5rem 0"/>

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

<?php if ($message != null) { ?>
    <div class="toasts actives">
        <div class="toast-contents">
            <i class="fas fa-check check"></i>

            <div class="message">
                <span class="text text-1">Success</span>
                <span class="text text-2"><?php echo $message ?></span>
            </div>
        </div>
        <i class="fas fa-times closes"></i>

        <div class="progress actives"></div>
    </div>
    <?php
    unsetsession("profile-update");
    $message = '';
}
?>

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
<script src="../js/toast.js"></script>
</body>
</html>