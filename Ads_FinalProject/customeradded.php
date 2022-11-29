<?php $page = 'customeradded';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
      <?php
        require_once('mysql_connection.php');

        $query = "INSERT INTO customer(Customer_id,name,Address,Telephone) VALUES (?,?,?,?)";

         $stmt = mysqli_prepare($dbc, $query);
        $customer_id = intval($_POST['customer_id']);
        $name = $_POST['name'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
         mysqli_stmt_bind_param($stmt,"ssss",$customer_id,$name,$address,$telephone);
         mysqli_stmt_execute($stmt);
         $affected_rows = mysqli_stmt_affected_rows($stmt);
         if($affected_rows == 1){
         echo 'New Customer Entered';
         mysqli_stmt_close($stmt);
        
         } else {
         echo 'Error Occurred<br />';
         echo mysqli_error();
         mysqli_stmt_close($stmt);
       }
      ?>
      </div>

    </div>

    <link rel="stylesheet" href="Styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>