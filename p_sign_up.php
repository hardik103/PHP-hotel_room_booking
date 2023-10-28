<?php
include("p_connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO auth_data VALUES('$name', '$email', '$pass', 'CUSTOMER')";
    $result = $conn->query($sql);
    if($result){
        echo "<script>alert('signed up');window.location.href='welcome.html';</script>";
    }
?> 