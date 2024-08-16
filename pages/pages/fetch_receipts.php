<?php
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../includes/db_connect.php');

$request = $_REQUEST;

// Columns array for ordering and searching
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

// Default values for ordering
$order_column = $columns[0]; // Default to the first column
$order_dir = 'asc'; // Default to ascending

// Check if 'order' is set in the request and extract the column and direction
if (isset($request['order'])) {
    $order_column = $columns[$request['order'][0]['column']];
    $order_dir = $request['order'][0]['dir'];
}

// Handle pagination
$limit = isset($request['length']) ? intval($request['length']) : 10;
$offset = isset($request['start']) ? intval($request['start']) : 0;

// Handle search filtering
$search_value = isset($request['search']['value']) ? $request['search']['value'] : '';

// Building the SQL query
$sql = "SELECT * FROM receipts WHERE 1=1";

// If there is a search value, include a WHERE clause
if (!empty($search_value)) {
    $sql .= " AND (date LIKE '%$search_value%' OR transportCode LIKE '%$search_value%' OR transportName LIKE '%$search_value%' OR partyCode LIKE '%$search_value%' OR partyName LIKE '%$search_value%' OR receiptNumber LIKE '%$search_value%')";
}

// Add the ORDER BY clause
$sql .= " ORDER BY $order_column $order_dir";

// Add pagination
$sql .= " LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $sql);

// Collecting data
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $subdata = array();
    foreach ($columns as $column) {
        $subdata[] = $row[$column];
    }
    $data[] = $subdata;
}

// Get total number of records (without filters)
$total_query = "SELECT COUNT(*) AS total FROM receipts";
$total_result = mysqli_query($conn, $total_query);
$total_data = mysqli_fetch_assoc($total_result)['total'];

// Get the number of filtered records
$filtered_query = "SELECT COUNT(*) AS total FROM receipts WHERE 1=1";
if (!empty($search_value)) {
    $filtered_query .= " AND (date LIKE '%$search_value%' OR transportCode LIKE '%$search_value%' OR transportName LIKE '%$search_value%' OR partyCode LIKE '%$search_value%' OR partyName LIKE '%$search_value%' OR receiptNumber LIKE '%$search_value%')";
}
$filtered_result = mysqli_query($conn, $filtered_query);
$filtered_data = mysqli_fetch_assoc($filtered_result)['total'];

// Check for the 'draw' key and provide a default value if not present
$draw = isset($request['draw']) ? intval($request['draw']) : 0;

// Prepare the JSON data
$json_data = array(
    "draw" => $draw,
    "recordsTotal" => intval($total_data),
    "recordsFiltered" => intval($filtered_data),
    "data" => $data
);

// Output JSON
echo json_encode($json_data);

mysqli_close($conn);
?>
