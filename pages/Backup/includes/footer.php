            <footer class="footer mt-auto py-3 bg-dark">
                <div class="container text-center">
                    <span class="text-light">&copy; <?php echo date('Y'); ?> Broker Application. All Rights Reserved.</span>
                </div>
            </footer>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="../assets/js/script.js"></script>

    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.3/af-2.7.0/date-1.5.3/r-3.0.2/rg-1.5.0/sc-2.4.3/sp-2.3.1/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#receiptsTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "fetch_receipts.php",  // URL to fetch data from the server
                    "type": "POST"
                }
            });

            // Handle form submission
            $('#receiptForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'submit_receipt.php',  // URL to handle form submission
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        if (data.trim() === "success") {
                            alert("Receipt submitted successfully!");
                            // Reload DataTables after form submission
                            $('#receiptsTable').DataTable().ajax.reload();
                        } else {
                            alert("Error: " + data);
                        }
                    },
                    error: function() {
                        alert("There was an error submitting the form. Please try again.");
                    }
                });
            });
        });
    </script>

</body>

</html>