<?php $page = 'Payments';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        
        <h1> Stocks Section </h1>
        <form method = "POST" action ="list_payments_paid.php">
        <input type = "submit" class="btn btn-info"value="Payments Paid List"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="list_payments_pending.php">
        <input type = "submit" class="btn btn-info"name="A" value = "Payments Pending List"/>
        </form>
        <br>
      </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
