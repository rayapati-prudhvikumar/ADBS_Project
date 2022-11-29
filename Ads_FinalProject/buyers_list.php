<?php $page = 'customers_list';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Buyers List</h1>
        <?php
        require_once('mysql_connection.php');
        $query = "SELECT buyer_id, stock_id, Name, Address FROM Buyers";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> Buyer_Id </b></td>
        <td align="left"><b> Stock Id</b></td>
        <td align="left"><b> Name </b></td>
        <td align="left"><b> Address </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['buyer_id'] . '</td><td align="left">'.
        $row['stock_id'] . '</td><td align="left">' .
        $row['Name'] . '</td><td align="left">' .
        $row['Address'] . '</td>';
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
