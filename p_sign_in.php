<?php
include("p_connection.php");

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * from auth_data where Email = '$email' and Password = '$pass'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count==1){
    $row = mysqli_fetch_assoc($result);
    if($row['User_Type']=="CUSTOMER"){
        echo "<script>alert('login successful');document.cookie = 'USER=CUSTOMER';window.location.href='reservation.html';</script>";
    }
    if($row['User_Type']=="ADMIN"){
        echo "<script>alert('login successful');document.cookie = 'USER=ADMIN';window.location.href='booking.html';</script>";
    }
}else{
    echo "<script>alert('Login failed. Invalid Username or password');window.location.href = 'index_l.html';</script>";
}
?>