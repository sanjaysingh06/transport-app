<form id="receiptEntryForm" action="submit_receipt.php" method="POST">
    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group col-md-4">
        <label for="transportCode">Transport Code</label>
        <input type="text" class="form-control" id="transportCode" name="transportCode" placeholder="Enter Transport Code">
    </div>
    <div class="form-group col-md-4">
        <label for="transportName">Transport Name</label>
        <input type="text" class="form-control" id="transportName" name="transportName" placeholder="Enter Transport Name">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="partyCode">Party Code</label>
        <input type="text" class="form-control" id="partyCode" name="partyCode" placeholder="Enter Party Code">
    </div>
    <div class="form-group col-md-4">
        <label for="partyName">Party Name</label>
        <input type="text" class="form-control" id="partyName" name="partyName" placeholder="Enter Party Name">
    </div>
    <div class="form-group col-md-4">
        <label for="receiptNumber">Receipt Number</label>
        <input type="text" class="form-control" id="receiptNumber" name="receiptNumber" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="lrNumber">LR Number</label>
        <input type="text" class="form-control" id="lrNumber" name="lrNumber">
    </div>
    <div class="form-group col-md-4">
        <label for="stationFrom">Station From</label>
        <input type="text" class="form-control" id="stationFrom" name="stationFrom">
    </div>
    <div class="form-group col-md-4">
        <label for="noOfParcels">No. of Parcels</label>
        <input type="number" class="form-control" id="noOfParcels" name="noOfParcels" oninput="calculateCartage()">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="parcelRate">Parcel Rate</label>
        <input type="number" class="form-control" id="parcelRate" name="parcelRate" oninput="calculateCartage()">
    </div>
    <div class="form-group col-md-4">
        <label for="cartage">Cartage</label>
        <input type="number" class="form-control" id="cartage" name="cartage" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="item">Item</label>
        <input type="text" class="form-control" id="item" name="item">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-2">
        <label for="freight">Freight</label>
        <input type="number" class="form-control" id="freight" name="freight" oninput="calculateTotal()">
    </div>
    <div class="form-group col-md-2">
        <label for="commission">Commission</label>
        <input type="number" class="form-control" id="commission" name="commission" oninput="calculateTotal()">
    </div>
    <div class="form-group col-md-2">
        <label for="labour">Labour</label>
        <input type="number" class="form-control" id="labour" name="labour" oninput="calculateTotal()">
    </div>
    <div class="form-group col-md-2">
        <label for="other">Other</label>
        <input type="number" class="form-control" id="other" name="other" oninput="calculateTotal()">
    </div>
    <div class="form-group col-md-2">
        <label for="total">Total</label>
        <input type="number" class="form-control" id="total" name="total" readonly>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="refund">Refund</label>
        <input type="number" class="form-control" id="refund" name="refund" oninput="calculateGrandTotal()">
    </div>
    <div class="form-group col-md-4">
        <label for="grandTotal">Grand Total</label>
        <input type="number" class="form-control" id="grandTotal" name="grandTotal" readonly>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="deliveryDate">Delivery Date</label>
        <input type="date" class="form-control" id="deliveryDate" name="deliveryDate">
    </div>
    <div class="form-group col-md-4">
        <label for="deliveryPerson">Delivery Person</label>
        <input type="text" class="form-control" id="deliveryPerson" name="deliveryPerson">
    </div>
    <div class="form-group col-md-4">
        <label for="deliveryChargeByParcel">Delivery Charge by Parcel</label>
        <input type="number" class="form-control" id="deliveryChargeByParcel" name="deliveryChargeByParcel">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="deliveryChargeAmount">Delivery Charge Amount</label>
        <input type="number" class="form-control" id="deliveryChargeAmount" name="deliveryChargeAmount">
    </div>
    </div>

    <div class="form-group">
    <p>Entry Person: <strong id="entryPersonName">John Doe</strong></p>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>