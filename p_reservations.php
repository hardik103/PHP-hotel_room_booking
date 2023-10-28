<?php
    if (isset($_POST)) {
        require "p_connection.php";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $f_date=$_POST['f_date'];
        $f_month=$_POST['f_month'];
        $f_year=$_POST['f_year'];
        $t_date=$_POST['t_date'];
        $t_month=$_POST['t_month'];
        $t_year=$_POST['t_year'];
        $room_type=$_POST['room_type'];

        $sql_insert = "INSERT INTO reservations VALUES ('${name}','${email}',current_timestamp(),'${f_date}-${f_month}-${f_year}','${t_date}-${t_month}-${t_year}','${room_type}');";
        if($conn->query($sql_insert)){
            echo "<script>alert('Success');window.location.href='reservation.html';</script>";
        } else{  
            echo "<script>alert('Request Failed');window.location.href='reservation.html';</script>";
        }
        mysqli_close($conn);
    }
?>