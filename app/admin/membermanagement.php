<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Member Management</title>

    <!-- Fontfaces CSS-->
    <link href="./../../css/font-face.css" rel="stylesheet" media="all">
    <link href="./../../public/libs/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./../../public/libs/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./../../public/libs/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="./../../public/libs/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="./../../public/libs/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="./../../public/libs/wow/animate.css" rel="stylesheet" media="all">
    <link href="./../../public/libs/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./../../public/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./../../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="./../../public/images/icon/logo-blue.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="./../../public/images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="./../../public/images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Member Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <span>Admin</span>, Welcome back</h1>
                                <p>Manage Event Detail and User Information</p>
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <!-- ALERT-->
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">You successfully read this important alert message.</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                    <!-- END ALERT-->
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list border rounded">
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="eventmanagement.html">
                                                <i class="fas fa-calendar"></i>Events</a>
                                        </li>
                                        <li class="active has-sub">
                                            <a href="#">
                                                <i class="fas fa-users"></i>Members</a>
                                        </li>
                                        <li>
                                            <a href="contactmessage.html">
                                                <i class="fas fa-comments"></i>Messages</a>
                                            <span class="inbox-num">3</span>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- USER DATA-->
                                        <div class="user-data m-b-30">
                                            <h3 class="title-3 m-b-30">
                                                <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                            <div class="table-responsive table-data">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td>Id</td>
                                                            <td>name</td>
                                                            <td>role</td>
                                                            <td>status</td>
                                                            <td>Features</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                <div class="table-data__info">
                                                                    <h6>lori lynch</h6>
                                                                    <span>
                                                                        <a href="#">johndoe@gmail.com</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="role admin">admin</span>
                                                            </td>
                                                            <td>
                                                                <label class="switch switch-text switch-success switch-pill">
                                                                    <input type="checkbox" class="switch-input" checked="true" disabled>
                                                                    <span data-on="On" data-off="Off" class="switch-label"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div class="rs-select2--trans rs-select2--lg">
                                                                    <select class="js-select2" name="property">
                                                                        <option selected="selected" disabled>Select Features</option>
                                                                        <option value="">View Registration</option>
                                                                        <option value="">Watch Profile</option>
                                                                    </select>
                                                                    <div class="dropDownSelect2"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                <div class="table-data__info">
                                                                    <h6>Tom Jerry</h6>
                                                                    <span>
                                                                        <a href="#">tom@gmail.com</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="role member">Member</span>
                                                            </td>
                                                            <td>
                                                                <label class="switch switch-text switch-danger switch-pill">
                                                                    <input type="checkbox" class="switch-input" checked="true" disabled>
                                                                    <span data-on="of" data-off="Off" class="switch-label"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div class="rs-select2--trans rs-select2--lg">
                                                                    <select class="js-select2" name="property">
                                                                        <option selected="selected" disabled>Select Features</option>
                                                                        <option value="">View Registration</option>
                                                                        <option value="">Watch Profile</option>
                                                                    </select>
                                                                    <div class="dropDownSelect2"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                <div class="table-data__info">
                                                                    <h6>Tom Jerry</h6>
                                                                    <span>
                                                                        <a href="#">tom@gmail.com</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="role member">Member</span>
                                                            </td>
                                                            <td>
                                                                <label class="switch switch-text switch-danger switch-pill">
                                                                    <input type="checkbox" class="switch-input" checked="true" disabled>
                                                                    <span data-on="of" data-off="Off" class="switch-label"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div class="rs-select2--trans rs-select2--lg">
                                                                    <select class="js-select2" name="property">
                                                                        <option selected="selected" disabled>Select Features</option>
                                                                        <option value="">View Registration</option>
                                                                        <option value="">Watch Profile</option>
                                                                    </select>
                                                                    <div class="dropDownSelect2"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                4
                                                            </td>
                                                            <td>
                                                                <div class="table-data__info">
                                                                    <h6>lori lynch</h6>
                                                                    <span>
                                                                        <a href="#">johndoe@gmail.com</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="role admin">admin</span>
                                                            </td>
                                                            <td>
                                                                <label class="switch switch-text switch-success switch-pill">
                                                                    <input type="checkbox" class="switch-input" checked="true" disabled>
                                                                    <span data-on="On" data-off="Off" class="switch-label"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div class="rs-select2--trans rs-select2--lg">
                                                                    <select class="js-select2" name="property">
                                                                        <option selected="selected" disabled>Select Features</option>
                                                                        <option value="">View Registration</option>
                                                                        <option value="">Watch Profile</option>
                                                                    </select>
                                                                    <div class="dropDownSelect2"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                5
                                                            </td>
                                                            <td>
                                                                <div class="table-data__info">
                                                                    <h6>Harray Yan</h6>
                                                                    <span>
                                                                        <a href="#">harry@gmail.com</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="role member">Member</span>
                                                            </td>
                                                            <td>
                                                                <label class="switch switch-text switch-success switch-pill">
                                                                    <input type="checkbox" class="switch-input" checked="true" disabled>
                                                                    <span data-on="On" data-off="Off" class="switch-label"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div class="rs-select2--trans rs-select2--lg">
                                                                    <select class="js-select2" name="property">
                                                                        <option selected="selected" disabled>Select Features</option>
                                                                        <option value="">View Registration</option>
                                                                        <option value="">Watch Profile</option>
                                                                    </select>
                                                                    <div class="dropDownSelect2"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END USER DATA-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-user"></i>
                                                <strong class="card-title pl-2">Profile Card</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <img class="rounded-circle mx-auto d-block" src="./../../public/images/icon/avatar-01.jpg" alt="Card image cap">
                                                    <h5 class="text-center mt-2 mb-3">Steven Lee</h5>
                                                    <div class="row">
                                                        <div class="col-12 mx-auto text-center">
                                                            <div class="location text-sm mb-1">
                                                                <i class="fa fa-envelope mr-1"></i> Email - johndoe@gmail.com
                                                            </div>
                                                            <div class="location text-sm mb-1">
                                                                <i class="fa fa-phone mr-1"></i> Phone - 09837363644
                                                            </div>
                                                            <div class="location text-sm mb-1">
                                                                <i class="fa fa-calendar mr-1"></i> DOB - 28 / 11 / 2003
                                                            </div>
                                                            <div class="location text-sm mb-1">
                                                                <i class="fa fa-edit mr-1"></i>Create Date - 24 / 5 / 2024
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Register Id</th>
                                                        <th>Evnent Name</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <tr>
                                                        <td>123 </td>
                                                        <td>PUSU Fustal Cup</td>
                                                        <td>2025-2-13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>123 </td>
                                                        <td>PUSU Fustal Cup</td>
                                                        <td>2025-2-13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>123 </td>
                                                        <td>PUSU Fustal Cup</td>
                                                        <td>2025-2-13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>123 </td>
                                                        <td>PUSU Fustal Cup</td>
                                                        <td>2025-2-13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>123 </td>
                                                        <td>PUSU Fustal Cup</td>
                                                        <td>2025-2-13</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2024 AUS. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="./../../public/libs/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="./../../public/libs/bootstrap-4.1/popper.min.js"></script>
    <script src="./../../public/libs/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="./../../public/libs/wow/wow.min.js"></script>
    <script src="./../../public/libs/animsition/animsition.min.js"></script>
    <script src="./../../public/libs/circle-progress/circle-progress.min.js"></script>
    <script src="./../../public/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./../../public/libs/chartjs/Chart.bundle.min.js"></script>
    <script src="./../../public/libs/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="./../../js/main.js"></script>

</body>

</html>
<!-- end document-->