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
    <script>
        $(document).ready(function() {
            $('#receiptForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                $.ajax({
                    url: 'submit_receipt.php', // The PHP script that processes the form
                    type: 'POST',
                    data: $(this).serialize(), // Serialize the form data
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            alert(response.message);
                            $('#receiptForm')[0].reset(); // Clear the form fields
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('An error occurred while submitting the form.');
                    }
                });
            });
        });
    </script>
</body>

</html>