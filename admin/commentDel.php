<?php
require_once './partials/db.php';

if (isset($_GET['id'])) {
    $queryparam = $_GET['id'];
    $sql = "DELETE FROM admin_registration WHERE id = '$queryparam'";
      
    if ($conn->query($sql) === true) {
        header("Location: adminAdd.php");
    } else {
        header("Location: adminAdd.php");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} ?>

