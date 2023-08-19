<?php
    if (isset($_POST)) {
        require "p_connection.php";
        
        $room_id = $_POST['room_id'];
        $sql = "SELECT * FROM room_data WHERE Room_ID='".$room_id."';";
        $result = mysqli_query($conn,$sql);
        if($result){
            $row = mysqli_fetch_object($result);
            echo json_encode($row);
        } else{  
            echo 903;
        }
        mysqli_close($conn);
    }
?>