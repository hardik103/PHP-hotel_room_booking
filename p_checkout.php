<?php
    if (isset($_POST)) {
        require "p_connection.php";
        $room_id = $_POST['room_id'];
        $f_name = $_POST['first_name'];
        $m_name = $_POST['middle_name'];
        $l_name = $_POST['last_name'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $id_type = $_POST['id_type'];
        $id_no = $_POST['id_no'];
        $in_time = $_POST['in_time'];
        $out_time = $_POST['out_time'];
        $duration = $_POST['duration'];
        $amount = $_POST['amount'];

        $sql_insert = "INSERT INTO records VALUES ('$room_id','$f_name','$m_name','$l_name','$email','$contact_no','$id_type','$id_no','$in_time','$out_time',$duration,$amount);";
        $sql_delete = "DELETE FROM room_data WHERE `Room_ID`='$room_id';";
        $sql_update = "UPDATE `room_status` SET `Room_Status`='VACANT' WHERE `Room_ID`='$room_id';";
        if($conn->query($sql_delete) && $conn->query($sql_update) && $conn->query($sql_insert)){
            echo 504;
        } else{  
            echo 904;
        }
        mysqli_close($conn);
    }
?>