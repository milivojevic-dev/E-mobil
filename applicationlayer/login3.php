<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body class="Abody">
	<div class="Aheader">
	<h2>Admin Login</h2>
</div>

<form method="post" action="login3.php" class="Aform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminID">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="adminpassword">

	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> Login</button>
	</div>

</form>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/8.2.6/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/8.2.6/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
</body>
</html>