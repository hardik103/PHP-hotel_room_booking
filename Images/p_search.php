<?php
    require "p_connection.php";
    if (isset($_POST)) {
        $database = $_POST['DATABASE'];
        $column = $_POST['COLUMN'];
        $value = $_POST['VALUE'];
        $sql = "SELECT * FROM $database WHERE $column='".$value."';";
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