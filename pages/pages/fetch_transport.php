<?php
include('../includes/db_connect.php');

if (isset($_POST['transportCode'])) {
    $transportCode = $_POST['transportCode'];
    $query = "SELECT transport_name FROM transport WHERE id = '$transportCode'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['transport_name'];
    } else {
        echo 'Not Found';
    }
}

if (isset($_POST['transportName'])) {
    $transportName = $_POST['transportName'];
    $query = "SELECT id FROM transport WHERE transport_name = '$transportName'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['id'];
    } else {
        echo 'Not Found';
    }
}
?>
