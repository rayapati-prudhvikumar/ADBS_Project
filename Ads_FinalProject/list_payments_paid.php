<?php $page = 'Payments_Paid';include 'include/header.php'; ?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h2> List of All payments paid </h2>
        <h4>Customers Payments Paid List</h4>
        <?php
        require_once('mysql_connection.php');
        $query = "SELECT ORDER_ID,customer_id,orderdate,Amount,Amountpaid FROM orders where AmountPaid='Y';";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> ORDER_ID </b></td>
        <td align="left"><b> customer_id </b></td>
        <td align="left"><b> orderdate </b></td>
        <td align="left"><b> Amount </b></td>
        <td align="left"><b> AmountPaid </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['ORDER_ID'] . '</td><td align="left">'.
        $row['customer_id'] . '</td><td align="left">' .
        $row['orderdate'] . '</td><td align="left">' .
        $row['Amount'] . '</td><td align="left">' .
        'Yes' . '</td>';
        echo '</tr>';
        }
        echo '</table><br>';
        } else {
        echo "Couldn't issue database query<br />";
        echo mysqli_error($dbc);
        }

        echo "<br>";
        //mysqli_close($dbc);


        echo '<br> <br> <div> <h4> Buyers Payments Paid List </h4></div><br>';
        $query = "SELECT ORDER_ID,buyer_id,orderdate,Amount,Amountpaid FROM buyers_orders where AmountPaid='Y';";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> ORDER_ID </b></td>
        <td align="left"><b> Buyer_Id </b></td>
        <td align="left"><b> orderdate </b></td>
        <td align="left"><b> Amount </b></td>
        <td align="left"><b> AmountPaid </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['ORDER_ID'] . '</td><td align="left">'.
        $row['buyer_id'] . '</td><td align="left">' .
        $row['orderdate'] . '</td><td align="left">' .
        $row['Amount'] . '</td><td align="left">' .
        'Yes' . '</td>';
        echo '</tr>';
        }
        echo '</table>';
        } else {
        echo "Couldn't issue database query<br />";
        echo mysqli_error($dbc);
        }
        mysqli_close($dbc);

        ?>

      </div>

    </div>
        <link rel="stylesheet" href="css/Styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
