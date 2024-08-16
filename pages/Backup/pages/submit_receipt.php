
<?php
// submit_receipt.php
include('../includes/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    $parcel_rate = $_POST['parcel_rate'];
    $freight = $_POST['freight'];
    $cartage = $_POST['cartage'];
    $commission = $_POST['commission'];
    $labour = $_POST['labour'];
    $other = $_POST['other'];
    $total = $_POST['total'];
    $refund = $_POST['refund'];
    $grandTotal = $_POST['grandTotal'];
    $deliveryDate = $_POST['deliveryDate'];
    $deliveryPerson = $_POST['deliveryPerson'];
    $deliveryChargeByParcel = $_POST['deliveryChargeByParcel'];
    $deliveryChargeAmount = $_POST['deliveryChargeAmount'];

    // Insert into database
    $sql = "INSERT INTO receipts (date, transportCode, transportName, partyCode, partyName, receiptNumber, lrNumber, stationFrom, item, no_of_parcels, parcel_rate, freight, cartage, commission, labour, other, total, refund, grandTotal, deliveryDate, deliveryPerson, deliveryChargeByParcel, deliveryChargeAmount)
            VALUES ('$date', '$transportCode', '$transportName', '$partyCode', '$partyName', '$receiptNumber', '$lrNumber', '$stationFrom', '$item', '$no_of_parcels', '$parcel_rate', '$freight', '$cartage', '$commission', '$labour', '$other', '$total', '$refund', '$grandTotal', '$deliveryDate', '$deliveryPerson', '$deliveryChargeByParcel', '$deliveryChargeAmount')";
    
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
