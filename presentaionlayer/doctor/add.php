<?php include('../../datalayer/bookserver.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
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
                        <a class="nav-link" href="index2.php">MyInfo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctorapp.php">My Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="searchpatient.php">Search Patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../applicationlayer/Doctorpatient.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<form method="post" action="add.php" class="add">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-group">
            <label style="font-weight: bold;">PatientID</label>
            <input type="text" name="Patientsearch" class="xd">
        </div>
        <div class="input-group">
            <button type="submit" name="SearchPA" class="btn">Search</button>
        </div>
        <?php

        if (isset($_POST['SearchPA'])) {

            $Patientsearch = mysqli_real_escape_string($mysqli, $_POST['Patientsearch']);

            $query = "SELECT * FROM patients WHERE UserID=('$Patientsearch')";
            $result2 = mysqli_query($mysqli, $query);

            while ($row2 = mysqli_fetch_assoc($result2)) {
                ?>

                <div class="input-group">
                    <label>Patient ID</label>
                    <input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

                </div>

                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="descName" value="<?php echo $row2['Name']; ?>">

                </div>

                <div class="input-group">
                    <label>Treatment</label>
                    <input type="text" name="Treatment">
                </div>

                <div class="input-group-add">
                    <label>Note</label>
                    <input style="" type="text" name="Note">
                </div>


                <div class="input-group">
                    <button type="submit" name="AddD" class="btn">Add</button>
                </div>
                <?php
            }
            ?>
            <?php
        }

        if (isset($_POST['AddD'])) {
            include('../../datalayer/errors.php');
            $errors = array();

            $descID = $mysqli->real_escape_string($_POST['descID']);
            $descName = $mysqli->real_escape_string($_POST['descName']);
            $treatment = $mysqli->real_escape_string($_POST['Treatment']);
            $note = $mysqli->real_escape_string($_POST['Note']);

            if (empty($treatment)) {
                array_push($errors, "Treatment is required");
            }

            if (empty($note)) {
                array_push($errors, "Your note is required");
            }
            if (count($errors) == 0) {
                $sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$descID','$descName','$treatment','$note','$doctorprofile') ";
                if ($mysqli->query($sql7)) { ?>
                    <h2 class="thanks"> <?php printf("Your Description Is Added", $mysqli->affected_rows); ?></h2>
                    <?php
                }
            }
        }
        ?>
    </form>
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