<html>

<body style=" background-image: url(new_user.jpeg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

    <?php

    require "db.php";

    $eid = $_POST["emailid"];
    $pwd = $_POST["password"];
    $mno = $_POST["mobileno"];
    $dob = $_POST["dob"];

    $sql = "INSERT INTO user (password,emailid,mobileno,dob) VALUES ('" . $pwd . "','" . $eid . "','" . $mno . "','" . $dob . "')";
    // echo $sql;

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
        // echo "Hi $eid, <a href=\"http://localhost/railway/index.html\"> Click here </a> to browse through our website!!! ";
    } else {
        echo '<h1 style= "color:white;">Error:" . $conn->error . "<br> <a href=\"http://localhost/railway/new_user_form.html\">Go Back to Login!!!</a> </h1>';
    }

    $conn->close();
    ?>

</body>

</html>