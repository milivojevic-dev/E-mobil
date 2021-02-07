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
                        <a class="nav-link" href="../../applicationlayer/Doctorpatient.php">FeedBack</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<form method="post" action="searchpatient.php" class="patientsearch">
    <?php include('../../datalayer/errors.php'); ?>
    <div class="input-group">
        <label style="font-weight: bold; font-size: 30px">Search By:</label>
        <label style="font-weight: bold">*Patient ID</label>
        <label style="font-weight: bold">*Patient Name</label>
        <input type="text" name="PID">
    </div>
    <div class="input-group">
        <button type="submit" name="SearchP" class="btn">Search</button>
    </div>
</form>
<?php

if (isset($_POST['SearchP'])) {

?>
<div style="width:100%; overflow:auto;">

    <table class="table3">
        <caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient
            Information
        </caption>
        >

        <tr>
            <th>PatientID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>BloodGroup</th>
        </tr> <?php

        $PID = $mysqli->real_escape_string($_POST['PID']);

        $sqlP = "SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') ";
        $resultP = $mysqli->query($sqlP);
        if (mysqli_num_rows($resultP) == 1) {
            while ($rowP = $resultP->fetch_assoc()) {

                echo "<tr><td>" . $rowP["UserID"] . "</td><td>" . $rowP["Name"] . "</td><td>" . $rowP["Address"] . "</td><td>" . $rowP["ContactNumber"] . "</td><td>" . $rowP['Email'] . "</td><td>" . $rowP['Bloodtype'] . "</td></tr>";
            }
            echo "</table";
        }
        } ?>
    </table>
</div>
<?php
if (isset($_POST['SearchP'])) {

?>
<div style="width:100%; overflow:auto;">
    <table class="table2">
        <caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment
            History
        </caption>
        <tr>
            <th>PatientID</th>
            <th>PatientName</th>
            <th>Treatment</th>
            <th>Doctor's Note</th>
        </tr> <?php
        $PID = $mysqli->real_escape_string($_POST['PID']);
        $sqlP2 = "SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') ";
        $resultP2 = $mysqli->query($sqlP2);
        if (mysqli_num_rows($resultP2) > 1) {
            while ($rowP2 = $resultP2->fetch_assoc()) {

                echo "<tr><td>" . $rowP2["descID"] . "</td><td>" . $rowP2["descName"] . "</td><td>" . $rowP2["treatment"] . "</td><td>" . $rowP2['Note'] . "</td></tr>";
            }
            echo "</table";
        }
        } ?>
    </table>
</div>


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


