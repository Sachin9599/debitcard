<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $databse ="internship4";

    $con = mysqli_connect($server, $username, $password, $databse);

    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $exp = $_POST['exp'];
    $cvc = $_POST['cvc'];
    $sql="INSERT INTO `internship4` ( `name`, `roll`, `exp`, `cvc`,`dt`) VALUES ( '$name', '$roll', '$exp', '$cvc', current_timestamp());";
    


    if ($con->query($sql) == true) {
        $insert = true;
        echo 1;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}


?>


