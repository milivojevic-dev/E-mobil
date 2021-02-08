<?php include '../../datalayer/bookserver.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap"
          rel="stylesheet">
    <title>Doctor Patient</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h1>Doctor<span>Patient</span></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">MyInfo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book.php">Book Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">View Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cancel.php">Cancel Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="searchdoctor.php">Search Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../applicationlayer/Doctorpatient.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="header">
    <h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

    <?php include('../../datalayer/errors.php'); ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-group">
            <label>Categery</label>
            <select name="categorey" class="xd">
                <option value="bone">bone</option>
                <option value="heart">heart</option>
                <option value="Dentistry">Dentistry</option>
                <option value="MentalHealth">Mental Health</option>
                <option value="Surgery">Surgery</option>
            </select>
        </div>

        <div class="input-group">
            <button type="submit" name="Search" class="btn">Search</button>
        </div>

        <?php
        if (isset($_POST['Search'])) {
            $categorey = mysqli_real_escape_string($mysqli, $_POST['categorey']);
            $query2 = "SELECT * FROM doctor WHERE categorey=('$categorey')";
            $result2 = mysqli_query($mysqli, $query2);
            ?>
            <div class="input-group">
                <label>Doctor ID</label>
                <select class="input-group2" name="docID">

                    <?php while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>

                        <option> <?php echo $row2['DoctorID'] ?> </option>
                        <?php

                    } ?>
                </select>
            </div>


            <div class="input-group">
                <label>Appointment ID</label>
                <input type="text" name="AppoID">

            </div>


            <div class="input-group">
                <label>Date</label>
                <input type="Date" name="Date">

            </div>

            <div class="input-group">
                <label>Time</label>
                <input type="Time" name="Time">
            </div>

            <div class="input-group">
                <button type="submit" name="Book" class="btn">BOOK</button>
            </div>
        <?php } ?>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
            crossorigin="anonymous"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/8.2.6/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/8.2.6/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
</body>
</html>