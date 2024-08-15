<?php
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../includes/db_connect.php');

$request = $_REQUEST;

// Default values for ordering
$order_column = 0; // Default to the first column
$order_dir = 'asc'; // Default to ascending

// Check if 'order' is set in the request and extract the column and direction
if (isset($request['order'])) {
    $order_column = $request['order'][0]['column'];
    $order_dir = $request['order'][0]['dir'];
}

// Use the order information in your SQL query
$columns = array(
    0 => 'date',
    1 => 'transportCode',
    2 => 'transportName',
    3 => 'partyCode',
    4 => 'partyName',
    5 => 'receiptNumber',
    6 => 'lrNumber',
    7 => 'stationFrom',
    8 => 'item',
    9 => 'no_of_parcels',
    10 => 'parcel_rate',
    11 => 'freight',
    12 => 'cartage',
    13 => 'commission',
    14 => 'labour',
    15 => 'other',
    16 => 'total',
    17 => 'refund',
    18 => 'grandTotal',
    19 => 'deliveryDate',
    20 => 'deliveryPerson',
    21 => 'deliveryChargeByParcel',
    22 => 'deliveryChargeAmount',
);

// Safely build the order by clause
$order_by = $columns[$order_column] . ' ' . $order_dir;

// Your SQL query, including the order by clause
$sql = "SELECT * FROM receipts ORDER BY $order_by";
$result = mysqli_query($conn, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $subdata = array();
    $subdata[] = $row['date'];
    $subdata[] = $row['transportCode'];
    $subdata[] = $row['transportName'];
    $subdata[] = $row['partyCode'];
    $subdata[] = $row['partyName'];
    $subdata[] = $row['receiptNumber'];
    $subdata[] = $row['lrNumber'];
    $subdata[] = $row['stationFrom'];
    $subdata[] = $row['item'];
    $subdata[] = $row['no_of_parcels'];
    $subdata[] = $row['parcel_rate'];
    $subdata[] = $row['freight'];
    $subdata[] = $row['cartage'];
    $subdata[] = $row['commission'];
    $subdata[] = $row['labour'];
    $subdata[] = $row['other'];
    $subdata[] = $row['total'];
    $subdata[] = $row['refund'];
    $subdata[] = $row['grandTotal'];
    $subdata[] = $row['deliveryDate'];
    $subdata[] = $row['deliveryPerson'];
    $subdata[] = $row['deliveryChargeByParcel'];
    $subdata[] = $row['deliveryChargeAmount'];

    $data[] = $subdata;
}

// Count total records
$totalData = mysqli_num_rows($result);

// Check for the 'draw' key and provide a default value if not present
$draw = isset($request['draw']) ? intval($request['draw']) : 0;

$json_data = array(
    "draw" => $draw,
    "recordsTotal" => intval($totalData),
    "recordsFiltered" => intval($totalData),
    "data" => $data
);

// Output JSON
echo json_encode($json_data);

mysqli_close($conn);
?>
