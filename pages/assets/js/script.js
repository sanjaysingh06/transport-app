const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
  
function calculateCartage() {
  var noOfParcelsElement = document.getElementById('no_of_parcels');
  var parcelRateElement = document.getElementById('parcel_rate');
  var cartageElement = document.getElementById('cartage');

  if (noOfParcelsElement && parcelRateElement && cartageElement) {
    var noOfParcels = parseFloat(noOfParcelsElement.value) || 0;
    var parcelRate = parseFloat(parcelRateElement.value) || 0;
    var cartage = noOfParcels * parcelRate;
    cartageElement.value = cartage.toFixed(2);
    calculateTotal();
  } else {
    console.error("One or more elements are missing!");
  }
}

function calculateTotal() {
  var freight = parseFloat(document.getElementById('freight').value) || 0;
  var cartage = parseFloat(document.getElementById('cartage').value) || 0;
  var commission = parseFloat(document.getElementById('commission').value) || 0;
  var labour = parseFloat(document.getElementById('labour').value) || 0;
  var other = parseFloat(document.getElementById('other').value) || 0;
  var total = freight + cartage + commission + labour + other;
  document.getElementById('total').value = total.toFixed(2);
  calculateGrandTotal();
}

function calculateGrandTotal() {
  var total = parseFloat(document.getElementById('total').value) || 0;
  var refund = parseFloat(document.getElementById('refund').value) || 0;
  var grandTotal = total - refund;
  document.getElementById('grand_total').value = grandTotal.toFixed(2);
}

