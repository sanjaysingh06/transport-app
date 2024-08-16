<?php
include('../includes/db_connect.php');

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $sql = "SELECT transport_name FROM transport WHERE transport_name LIKE '%$query%' LIMIT 5";
    $result = mysqli_query($conn, $sql);
    $output = '<ul class="list-unstyled">';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<li class="transport-item">' . $row['transport_name'] . '</li>';
        }
    } else {
        $output .= '<li>No results</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>
