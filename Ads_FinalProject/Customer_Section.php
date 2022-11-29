<?php $page = 'Customer_Section';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        
        <h1> Customers Section </h1>
        <form method = "POST" action ="customers_list.php">
        <input type = "submit" class="btn btn-info" value="Display Customers List"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="addcustomer.php">
        <input type = "submit" class="btn btn-info" name="A" value = "Add New Customer"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="Default_CustomerNotPaid.php">
        <input type = "submit" class="btn btn-info" name="B" value = "Default_Customers NotPaid Pending Amount"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="Payments_Paid.php">
        <input type = "submit" class="btn btn-info"  name="C" value = "Payements Paid List"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="Customer_Requesting_MoreItems.php">
        <input type = "submit" class="btn btn-info" name="D" value = "Customer who have not paid their pending amount is requesting more items. "/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="CustomerRequestingStock.php">
        <input type = "submit" class="btn btn-info" name="F" value = "Customer Requesting More Stock "/>
        </form>
      </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
