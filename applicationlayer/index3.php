<?php include('bookserver.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="doctorpatient.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap"
          rel="stylesheet">
    <title>Doctor Patient</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h1>Doctor<span>Patient</span></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index3.php">Add/Delete Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewdoctor.php">View Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewpatients.php">View Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewappointments.php">View Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">FeedBack</a>
                    </li>
                    <li class="mr-auto"><a href="Doctorpatient.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="headerA">
    <h2>Add Doctor</h2>
</div>

<form method="post" action="index3.php">

    <?php include('errors.php'); ?>

    <div class="input-groupA">
        <label>Doctor ID</label>
        <input type="text" name="addID">

    </div>


    <div class="input-groupA">
        <label>Doctor Name</label>
        <input type="text" name="addname">


    </div>

    <div class="input-groupA">
        <label>Address</label>
        <input type="text" name="addAddress">

    </div>

    <div class="input-groupA">
        <label>Contact Number</label>
        <input type="text" name="addContactNumber">


    </div>


    <div class="input-groupA">
        <label>Email address</label>
        <input type="text" name="addEmail">

    </div>

    <div class="input-groupA">
        <label>Password</label>
        <input type="text" name="addpassword">

    </div>
    <div class="input-groupA">
        <label>Category</label>
        <select name="addcategory" class="xd">
            <option value="bone">bones</option>
            <option value="heart">heart</option>
            <option value="Dentistry">Dentistry</option>
            <option value="MentalHealth">Mental Health</option>
            <option value="Surgery">Surgery</option>


        </select>
    </div>

    <div class="input-groupA">
        <button type="submit" name="Add" class="btnA">Add Doctor</button>
    </div>


</form>
<div class="headerAD">
    <h2>Delete Doctor</h2>
</div>

<form method="post" action="index3.php" class="delete">

    <div class="input-groupA">
        <label>Doctor ID</label>
        <input type="text" name="deleteID">

    </div>

    <div class="input-groupA">
        <button type="submit" name="Delete" class="btnA">Delete</button>
    </div>

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