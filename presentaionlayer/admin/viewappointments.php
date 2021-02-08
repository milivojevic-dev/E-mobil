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
    <link rel="stylesheet" href="style5.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="../../applicationlayer/Doctorpatient.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<h1 class="asd"> Appointments </h1>
<table class="table4">
    <tr>
        <th>Appointments ID</th>
        <th>Doctor ID</th>
        <th>Patient ID</th>
        <th>Date</th>
        <th>Time</th>
    </tr>

    <?php $sql3 = "SELECT  * FROM  bookapp ";
    $result3 = $mysqli->query($sql3);
    if (mysqli_num_rows($result3) >= 1) {
        while ($row3 = $result3->fetch_assoc()) {

            echo "<tr><td>" . $row3["AppoID"] . "</td><td>" . $row3["docID"] . "</td><td>" . $row3["patientID"] . "</td><td>" . $row3["Date"] . "</td><td>" . $row3['Time'] . "</td></tr>";
        }
        echo "</table";
    }
    ?>

</table>
<h1 class="asd">Send Confirmation Email </h1>
<div style="width:100%; overflow:auto;">
    <form role="form" method="post" enctype="multipart/form-data" class="form1">
        <div class="xa">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" maxlength="50" placeholder="XAXAXA@gmail.com"> <br>
            <label for="subject" style="margin:10px ;display: inline-block;">Subject</label>
            <input type="text" id="subject" name="subject" maxlength="50" placeholder="Appointment Confirmation"><br>
            <label for="name" style="margin:10px ;display:inline-block;">Message</label>
            <input type="text" placeholder="this is a Confirmation email for your appointment ID:" id="message"
                   name="message" maxlength="2000"><br>
            <button type="submit" id="message" name="sendemail">Send</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['sendmail'])) {
    if (mail($_POST['email'], $_POST['subject'], $_POST['message'], 'FROM:milivojevic.ivana.1997@gmail.com')) {
        echo "success";
    } else {
        echo "failed";
    }
}

?>

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