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

        $sql_insert = "INSERT INTO room_data VALUES ('${room_id}','${f_name}','${m_name}','${l_name}','${contact_no}','${email}','${id_type}','${id_no}',current_timestamp());";
        $sql_update = "UPDATE `room_status` SET `Room_Status`='OCCUPIED' WHERE `Room_ID`='${room_id}';";
        if($conn->query($sql_insert) && $conn->query($sql_update)){
            header("Location: home.html");
        } else{  
            echo 902;
        }
        mysqli_close($conn);
    }
?>