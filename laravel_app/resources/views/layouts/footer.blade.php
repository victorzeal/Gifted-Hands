

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <h3>HANDS OF HOPE</h3>
      <p>Changing the lives of the Orphan child one penny at a time.</p>
      <div class="social-links">
        animate.css        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>HANDS OF HOPE</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Victor Zeal</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--  JS Files -->
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/glightbox/js/glightbox.min.js"></script>
  <script src="css/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="css/swiper/swiper-bundle.min.js"></script>
  <script src="css/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="css/bootstrap/js/main.js"></script>
  <script src="https://js.paystack.co/v1/inline.js"></script>

  <script>



    var paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener('submit', payWithPaystack, false);
    
            function payWithPaystack(e) {
                e.preventDefault();
                var handler = PaystackPop.setup({
                key: 'pk_test_7f6a0cc8d74923bdb848c47f933329f490110891', // Replace with your public key
                email: document.getElementById('email-address').value,
                amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
                ref:  Math.floor((Math.random() * 100000000)+ 1), // Replace with a reference you generated
                callback: function(response) {
                //this happens after the payment is completed successfully
                var reference = response.reference;
    
                // var  orphan_id = "";
                // var orphan_join = "orphanid_"+ orphan_id
    
                //var test = "orprppromrmr0001"
    
                alert('Payment complete! Reference: ' + reference );
                // Make an AJAX call to your server with the reference to verify the transaction
                
                    
                window.location.href = "payment/callback?ref=" + reference + "&id=" + phpId
    
    
                },
                onClose: function() {
                alert('Transaction was not completed, window closed.');
                },
            });
            handler.openIframe();
            }
    
      </script>


</body>
</html>