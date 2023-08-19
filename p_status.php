<?php
    if (isset($_POST)) {
        require "p_connection.php";
        
        $room_id = $_POST['room_id'];
        $sql = "SELECT Room_Status FROM room_status WHERE Room_ID='".$room_id."';";
        $result = mysqli_query($conn,$sql);
        if($result){
            $row = mysqli_fetch_assoc($result);
            echo $row['Room_Status'];
        } else{  
            echo 901;
        }
        mysqli_close($conn);
    }
?>