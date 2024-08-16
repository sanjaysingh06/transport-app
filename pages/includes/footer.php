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

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

            // // Handle form submission
            $('#receiptForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'submit_receipt.php',  // URL to handle form submission
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        if (data.trim() === "success") {
                            alert("Receipt submitted successfully!");

                            // Clear the form fields
                            $('#receiptForm')[0].reset();

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

            // Handle form submission
            // $('#receiptForm').on('submit', function(e) {
            //     e.preventDefault();

            //     // Clear previous validation messages
            //     $('.form-control').removeClass('is-invalid');
            //     $('.invalid-feedback').text('');

            //     $.ajax({
            //         url: 'submit_receipt.php',  // URL to handle form submission
            //         type: 'POST',
            //         data: $(this).serialize(),
            //         dataType: 'json',
            //         success: function(response) {
            //             if (response.success) {
            //                 alert("Receipt submitted successfully!");
            //                 $('#receiptForm')[0].reset();
            //                 $('#receiptsTable').DataTable().ajax.reload();
            //             } else {
            //                 // Show validation errors
            //                 $.each(response.errors, function(key, value) {
            //                     $('#' + key).addClass('is-invalid');
            //                     $('#' + key).siblings('.invalid-feedback').text(value);
            //                 });
            //             }
            //         },
            //         error: function() {
            //             alert("There was an error submitting the form. Please try again.");
            //         }
            //     });
            // });
            
            // Fetch transport name by entering transport code
            $('#transport_code').on('input', function() {
                var transportCode = $(this).val();

                if (transportCode === '') {
                    // If the input field is cleared, also clear the transport name field
                    $('#transport_name').val('');
                } else {
                    // Fetch transport name if there is a value in the transport code field
                    $.ajax({
                        url: 'fetch_transport.php',
                        type: 'POST',
                        data: { transport_code: transportCode },
                        success: function(data) {
                            $('#transport_name').val(data);
                        },
                        error: function() {
                            alert('Error fetching transport name.');
                        }
                    });
                }
            });

            // Live transport name search and auto-fill code
            $('#transport_name').on('keyup', function() {
                var query = $(this).val();
                if (query != '') {
                    $.ajax({
                        url: 'search_transport.php',
                        type: 'POST',
                        data: { query: query },
                        success: function(data) {
                            $('#transportList').fadeIn();
                            $('#transportList').html(data);
                        }
                    });
                } else {
                    $('#transportList').fadeOut();
                    $('#transportList').html('');
                }
            });

            $(document).on('click', '.transport-item', function() {
                var transportName = $(this).text();
                $('#transport_name').val(transportName);
                $('#transportList').fadeOut();

                // Fetch transport code by selecting transport name
                $.ajax({
                    url: 'fetch_transport.php',
                    type: 'POST',
                    data: { transport_name: transportName },
                    success: function(data) {
                        $('#transport_code').val(data);
                    },
                    error: function() {
                        alert('Error fetching transport code.');
                    }
                });
            });
        });

    </script>

</body>

</html>