<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Event Management</title>

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
                                    <li class="list-inline-item">Event Management</li>
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
                                        <li class="active has-sub">
                                            <a href="#">
                                                <i class="fas fa-calendar"></i>Events</a>
                                        </li>
                                        <li>
                                            <a href="membermanagement.html">
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
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">Add New Upcoming Event</div>
                                            <div class="card-body">
                                                <form action="" method="post" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="insert-event-name" class="control-label mb-1">Event Name</label>
                                                        <input id="insert-event-name" name="name" type="text" class="form-control" placeholder="Enter event name.....">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="insert-event-description" class=" form-control-label">Description</label>
                                                        <textarea name="description" id="insert-event-description" rows="4" placeholder="Description..." class="form-control"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-event-date" class="control-label mb-1">Event Date</label>
                                                                <input id="insert-event-date" name="date" type="date" class="form-control" min="2024-11-21">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-event-time" class="control-label mb-1">Event Time</label>
                                                                <input id="insert-event-time" name="time" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="insert-event-location" class="control-label mb-1">Event Location</label>
                                                        <input id="insert-event-location" name="location" type="text" class="form-control" placeholder="Enter event location....">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-due-date" class="control-label mb-1">Registration Due Date</label>
                                                                <input id="insert-dues-date" name="due-date" type="date" class="form-control" min="2024-11-21">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-event-limit" class="control-label mb-1">Participant Limit</label>
                                                                <input id="insert-event-limit" name="limit" type="number" min="10" value="10" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="insert-age-group">Age Group</label>
                                                        <select name="age-group" id="insert-age-group" class="form-control">
                                                            <option selected disabled>Please select</option>
                                                            <option value="1">Under 18</option>
                                                            <option value="2">18 - 30</option>
                                                            <option value="3">30 +</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="event-photo">Event Photo</label>
                                                                <input type="file" id="event-photo" name="photo" class="form-control-file">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="insert-sport-type">Sport Type</label>
                                                                <select name="sport" id="insert-sport-type" class="form-control">
                                                                    <option selected disabled>Please select</option>
                                                                    <option value="1">Football</option>
                                                                    <option value="2">Table Tennis</option>
                                                                    <option value="3">Baskeball</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-dark btn-block">
                                                            <span id="payment-button-amount">Add Event</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">Update Event Info</div>
                                            <div class="card-body">
                                                <form action="" method="post" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="insert-event-name" class="control-label mb-1">Event Name</label>
                                                        <input id="insert-event-name" name="name" type="text" class="form-control" placeholder="Enter event name.....">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="insert-event-description" class=" form-control-label">Description</label>
                                                        <textarea name="description" id="insert-event-description" rows="4" placeholder="Description..." class="form-control"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-event-date" class="control-label mb-1">Event Date</label>
                                                                <input id="insert-event-date" name="date" type="date" class="form-control" min="2024-11-21">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-event-time" class="control-label mb-1">Event Time</label>
                                                                <input id="insert-event-time" name="time" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="insert-event-location" class="control-label mb-1">Event Location</label>
                                                        <input id="insert-event-location" name="location" type="text" class="form-control" placeholder="Enter event location....">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-due-date" class="control-label mb-1">Registration Due Date</label>
                                                                <input id="insert-dues-date" name="due-date" type="date" class="form-control" min="2024-11-21">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="insert-event-limit" class="control-label mb-1">Participant Limit</label>
                                                                <input id="insert-event-limit" name="limit" type="number" min="10" value="10" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="insert-age-group">Age Group</label>
                                                        <select name="age-group" id="insert-age-group" class="form-control">
                                                            <option selected disabled>Please select</option>
                                                            <option value="1">Under 18</option>
                                                            <option value="2">18 - 30</option>
                                                            <option value="3">30 +</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="event-photo">Event Photo</label>
                                                                <input type="file" id="event-photo" name="photo" class="form-control-file">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="insert-sport-type">Sport Type</label>
                                                                <select name="sport" id="insert-sport-type" class="form-control">
                                                                    <option selected disabled>Please select</option>
                                                                    <option value="1">Football</option>
                                                                    <option value="2">Table Tennis</option>
                                                                    <option value="3">Baskeball</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-dark btn-block">
                                                            <span id="payment-button-amount">Update Event</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Limit</th>
                                                        <th>Date</th>
                                                        <th>Age</th>
                                                        <th>Sport</th>
                                                        <th>Due Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PUSU </td>
                                                        <td>30</td>
                                                        <td>2025-2-13 07:30</td>
                                                        <td>18 - 30</td>
                                                        <td>Football</td>
                                                        <td>2025-2-9</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-edit" style="color: #a47800;"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent;">
                                                                    <i class="zmdi zmdi-delete" style="color: #c60a11;"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
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