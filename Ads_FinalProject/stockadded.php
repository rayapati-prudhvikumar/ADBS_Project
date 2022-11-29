<?php $page = 'stockadded';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
      <?php
        require_once('mysql_connection.php');

        $query = "INSERT INTO stock VALUES (?,?,?,?,?,?)";

         $stmt = mysqli_prepare($dbc, $query);
         $a = intval($_POST['stock_id']);
         $b = $_POST['stock_name'];
         $c = intval($_POST['Quantity']);
         $d = intval($_POST['price']);
         $invested_price = intval($_POST["invested_price"]);
         $expiry_date = $_POST["expiry_date"];

         mysqli_stmt_bind_param($stmt,"ssssss",$a,$b,$c,$d,$invested_price,$expiry_date);
         mysqli_stmt_execute($stmt);
         $affected_rows = mysqli_stmt_affected_rows($stmt);
         if($affected_rows == 1){
         echo 'Stock Entered';
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