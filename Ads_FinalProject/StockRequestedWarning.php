<?php $page = 'StockRequestedWarning';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
      <?php
      
        require_once('mysql_connection.php');

         $customer_id = intval($_GET['customer_id']);
         $customer_name = $_GET['customer_name'];
         $stock_id = intval($_GET['stock_id']);
         $stock_name = $_GET['stock_name'];
         $quantity = intval($_GET['Quantity']);
         $delivery_date = $_GET['delivery_date'];
         $amount_paid = $_GET['amount_paid'];
         $query = "SELECT Quantity,Price,expiry_date from stock where stock_id=?";
         $stmt = $dbc->prepare($query); 
        $stmt->bind_param("i", $stock_id);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            if($row['Quantity'] < $quantity || $row['expiry_date'] < $delivery_date){
              echo ' <div class="alert alert-danger" role="alert"> Customer is Requesting More Quantity! OR Delivery Date is greater than Stock Expiry Date </div>';
              exit();
            }
            else{
            
              $amount = $row['Quantity'] * $row['Price'];
              $query = "INSERT INTO ORDERS(Customer_id,orderdate,delivery_date,amount,AmountPaid) VALUES($customer_id,CURDATE(),CONVERT('$delivery_date', DATE),$amount,'$amount_paid');";
              if (mysqli_query($dbc, $query)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            }

        }


      ?>
      </div>

    </div>

    <link rel="stylesheet" href="css/Styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>