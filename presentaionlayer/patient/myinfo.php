<?php include('../../datalayer/server.php'); ?>
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
<div class="headerP">
    <h2>My Information</h2>
</div>
<form method="post" action="myinfo.php" class="infoP"
      style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">
    <div class="contentP">

        <label>ID: <?php echo "" . $_SESSION['UserID']; ?></label>
        <br>
        <br>
        <label> Email : <?php echo $col['Email']; ?></label>
        <br>
        <br>
        <label> Name : <?php echo $col['Name']; ?></label>
        <br>
        <br>
        <label> Address : <?php echo $col['Address']; ?></label>
        <br>
        <br>
        <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
        <br>
        <br>
        <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
        <br>
        <br>
        <div class="input-group">
            <button type="submit" name="treatmentHistory" class="btn">My-Treatment-History</button>
        </div>
    </div>
</form>
<?php if (isset($_POST['treatmentHistory'])) {
?>
<div style="width:100%; overflow:auto;">
    <table class="table2">
        <caption class="asd">Treatment History
        </caption>
        <tr>
            <th>DoctorID</th>
            <th>DoctorName</th>
            <th>Treatment</th>
            <th>Doctor's Note</th>
        </tr>
        <?php
        $PID = $mysqli->real_escape_string($_POST['UserID']);

        $sqlP2 = "SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') ";
        $resultP2 = $mysqli->query($sqlP2);
        if (mysqli_num_rows($resultP2) > 1) {
            while ($rowP2 = $resultP2->fetch_assoc()) {

                echo "<tr><td>" . $rowP2["descID"] . "</td><td>" . $rowP2["descName"] . "</td><td>" . $rowP2["treatment"] . "</td><td>" . $rowP2['Note'] . "</td></tr>";
            }
            echo "</table";
        }} ?>

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

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php

    unset($_SESSION['success']);
    ?>
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
<!-- welcome message for the logged in user -->