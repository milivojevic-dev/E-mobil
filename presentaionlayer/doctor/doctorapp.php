<?php include '../../datalayer/bookserver.php '; ?>
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
	<h1 class="my1">My<span class="mys">Appointments</span></h1>
<div style="width:100%; overflow:auto;">
	<table class="table">
        <tbody>
            <th>Appointment ID</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>PatientID</th>
            <th>PatientName</th>
            <th>PatientAddress</th>
            <th>PatientEmail</th>
            <th>PatientContactNumber</th>
            <th>BloodGroup</th>
        </tr>
        <?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile') AND  patientID=UserID "  ;
        $resultdoc=$mysqli->query($sqldoc);
        if(mysqli_num_rows($resultdoc)>= 1){
            while ($rowdoc=$resultdoc->fetch_assoc()) {

                echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
            }
            echo "</table";
        } ?>
        </tbody>
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

