const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
  
function calculateCartage() {
  const noOfParcels = document.getElementById('noOfParcels').value;
  const parcelRate = document.getElementById('parcelRate').value;
  document.getElementById('cartage').value = noOfParcels * parcelRate;
}

function calculateTotal() {
  const freight = parseFloat(document.getElementById('freight').value) || 0;
  const cartage = parseFloat(document.getElementById('cartage').value) || 0;
  const commission = parseFloat(document.getElementById('commission').value) || 0;
  const labour = parseFloat(document.getElementById('labour').value) || 0;
  const other = parseFloat(document.getElementById('other').value) || 0;

  document.getElementById('total').value = freight + cartage + commission + labour + other;
  calculateGrandTotal();
}

function calculateGrandTotal() {
  const total = parseFloat(document.getElementById('total').value) || 0;
  const refund = parseFloat(document.getElementById('refund').value) || 0;

  document.getElementById('grandTotal').value = total - refund;
}
