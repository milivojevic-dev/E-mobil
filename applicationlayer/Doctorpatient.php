<!doctype html>
<html lang="en">
<head>
    <?php
    $header_ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    $keywords = array("nokia", "touch", "samsung", "sonyericsson", "alcatel", "panasonic", "tosh", "benq", "sagem", "android", "iphone", "berry", "palm", "mobi", "lg", "symb", "kindle", "phone");
    $mobile = false;
    $match = "";

    foreach ($keywords as $keyword) {
        if (strpos($header_ua, $keyword) !== false) // http://php.net/manual/en/function.strpos.php
        {
            $mobile = true;
            $match = $keyword;
            break;
        }
    }
    echo "<p><b>user agent string:</b> $header_ua</b>";

    if ($mobile) {
        echo "<p>You are using mobile device. (search term: $match)</p>";
        //header("Location:mobile.php");
        //exit();
    } else {
        echo "<p>You are not using mobile device.</p>";
    }
    ?>
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
    <div class="btn"><a href="login3.php">
            <button type="button" class="buttonA"> Admin</button>
    </div>


    <div class="btn"><a href="login.php">
            <button type="button" class="buttonP">Patient</button>
    </div>


    <div class="btn"><a href="login2.php">
            <button type="button" class="buttonD">Doctor</button>
        </a>
    </div>


</body>
</html>