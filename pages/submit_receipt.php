<?php
// Include the database connection file
include('../includes/db_connect.php');

// Initialize response
$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $date = $_POST['date'];
    $transportCode = $_POST['transportCode'];
    $transportName = $_POST['transportName'];
    $partyCode = $_POST['partyCode'];
    $partyName = $_POST['partyName'];
    $receiptNumber = $_POST['receiptNumber'];
    $lrNumber = $_POST['lrNumber'];
    $stationFrom = $_POST['stationFrom'];
    $item = $_POST['item'];
    $no_of_parcels = $_POST['no_of_parcels'];
    $parcelRate = $_POST['parcelRate'];
    $freight = $_POST['freight'];
    $labour = $_POST['labour'];
    $other = $_POST['other'];
    $total = $_POST['total'];
    $refund = $_POST['refund'];
    $grandTotal = $_POST['grandTotal'];
    $deliveryDate = $_POST['deliveryDate'];
    $deliveryPerson = $_POST['deliveryPerson'];
    $deliveryChargeByParcel = $_POST['deliveryChargeByParcel'];
    $deliveryChargeAmount = $_POST['deliveryChargeAmount'];

    // Insert data into the database
    $sql = "INSERT INTO receipts 
            (date, transportCode, transportName, partyCode, partyName, receiptNumber, lrNumber, stationFrom, item, no_of_parcels, parcelRate, freight, labour, other, total, refund, grandTotal, deliveryDate, deliveryPerson, deliveryChargeByParcel, deliveryChargeAmount)
            VALUES ('$date', '$transportCode', '$transportName', '$partyCode', '$partyName', '$receiptNumber', '$lrNumber', '$stationFrom', '$item', '$no_of_parcels', '$parcelRate', '$freight', '$labour', '$other', '$total', '$refund', '$grandTotal', '$deliveryDate', '$deliveryPerson', '$deliveryChargeByParcel', '$deliveryChargeAmount')";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
        $response['message'] = 'Data was successfully updated.';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error: ' . $conn->error;
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

// Close the database connection
$conn->close();

// Return the response as JSON
echo json_encode($response);
?>
