<?php include '_sessionCheck.php'; ?>
<?php include '_setupS4s.php'; ?>
<script>
    s4s.html.subscription("#subscription");
    s4s.html.payment("#pricing");
</script>
<h1>Profile Area</h1>
<a href="app.php">App</a></br>
</br>
<div id="subscription"></div>
<div id="pricing"></div>

<form action="/charge" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-image="/square-image.png"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-amount="2000"
    data-bitcoin="true"
    data-alipay="true">
  </script>
</form>

  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-image="/square-image.png"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-amount="2000"
    data-bitcoin="true"
    data-alipay="true">
  </script>
