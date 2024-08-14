<form id="receiptForm">

    <div class="row g-3 mb-3">
        <div class="col-auto me-auto">
            <input type="text" class="form-control form-control-sm" id="" placeholder="Serial No">
        </div>

        <div class="col-auto">
            <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder="Date">
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-1">
            <input type="text" class="form-control form-control-sm" id="transportCode" name="transportCode" placeholder="Transport Code">
        </div>

        <div class="col-3">
            <input type="text" class="form-control form-control-sm" id="transportName" name="transportName" placeholder="Transport Name">
        </div>

        <div class="col-1">
            <input type="text" class="form-control form-control-sm" id="partyCode" name="partyCode" placeholder="Party Code">
        </div>

        <div class="col-3">
            <input type="text" class="form-control form-control-sm" id="partyName" name="partyName" placeholder="Party Name">
        </div>

        <div class="col-2">
            <input type="text" class="form-control form-control-sm" id="receiptNumber" name="receiptNumber" placeholder="Receipt Number">
        </div>

        <div class="col-2">
            <input type="text" class="form-control form-control-sm" id="lrNumber" name="lrNumber" placeholder="LR Number">
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-2">
            <input type="text" class="form-control form-control-sm" id="stationFrom" name="stationFrom" placeholder="Station From">
        </div>

        <div class="col-2">
            <input type="text" class="form-control form-control-sm" id="item" name="item" placeholder="Item">
        </div>

        <div class="col-1">
            <input type="number" class="form-control form-control-sm" id="no_of_parcels" name="no_of_parcels" oninput="calculateCartage()" placeholder="No. of Parcels">
        </div>

        <div class="col-1">
            <input type="number" class="form-control form-control-sm" id="parcel_rate" name="parcel_rate" oninput="calculateCartage()" placeholder="Parcel Rate">
        </div>

        <div class="col-md-2 offset-md-4">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Freight">
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="freight" name="freight" oninput="calculateTotal()" placeholder="Freight">
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="cartage" name="cartage"  placeholder="Cartage" readonly>
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="commission" name="commission" oninput="calculateTotal()" placeholder="Commission">
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="labour" name="labour" oninput="calculateTotal()" placeholder="Labour">
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="other" name="other" oninput="calculateTotal()" placeholder="Other">
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="total" name="total"  placeholder="Total" readonly>
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="refund" name="refund" oninput="calculateGrandTotal()" placeholder="Refund">
        </div>
        <div class="col-md-2 offset-md-10">
            <input type="text" class="form-control form-control-sm" id="grand_total" name="grandTotal"  placeholder="G Total" readonly>
        </div>
    </div>
    <hr>
    <div class="row g-3 mb-3">
        <div class="col-2">
            <input type="date" class="form-control form-control-sm" id="deliveryDate" name="deliveryDate" placeholder="Date">
        </div>

        <div class="col-6">
            <input type="text" class="form-control form-control-sm" id="deliveryPerson" name="deliveryPerson" placeholder="Delivery Person">
        </div>

        <div class="col-2">
            <input type="text" class="form-control form-control-sm" id="deliveryChargeByParcel" name="deliveryChargeByParcel" placeholder="Delivery Rate Charge">
        </div>

        <div class="col-2">
            <input type="text" class="form-control form-control-sm" id="deliveryChargeAmount" name="deliveryChargeAmount" placeholder="Delivery Charge">
        </div>

        <div class="form-group col-12 ">
            <p>Entry Person: <strong id="entryPersonName">John Doe</strong></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
    </div>
</form>