<?php
    $pageTitle = "Receipt";
    include '../includes/header.php';
?>


<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Receipt</h1>
    </div>
    <div class="row">

        <div class="col-md-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Receipt
            </button>
            <!-- ADD Receipt  Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Receipt</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Include the receipt_entry form -->
                        <?php include 'receipt_entry.php'; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Receipt
            </button>
        </div>
        <div class="col-md-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Receipt
            </button>
        </div>
        <div class="col-md-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Receipt
            </button>
        </div>

    </div>
    
    <div class="row">
        <div class="col col-sm-12">
            <!-- Table to display submitted data -->
        <table id="receiptsTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Transport Code</th>
                    <th>Transport Name</th>
                    <th>Party Code</th>
                    <th>Party Name</th>
                    <th>Receipt Number</th>
                    <th>LR Number</th>
                    <th>Station From</th>
                    <th>Item</th>
                    <th>No. of Parcels</th>
                    <th>Parcel Rate</th>
                    <th>Freight</th>
                    <th>Cartage</th>
                    <th>Commission</th>
                    <th>Labour</th>
                    <th>Other</th>
                    <th>Total</th>
                    <th>Refund</th>
                    <th>Grand Total</th>
                    <th>Delivery Date</th>
                    <th>Delivery Person</th>
                    <th>Delivery Charge by Parcel</th>
                    <th>Delivery Charge Amount</th>
                </tr>
            </thead>
        </table>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
