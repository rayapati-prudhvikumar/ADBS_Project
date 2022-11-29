<?php $page = 'stocks_list';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Stocks List</h1>
        <?php
        require_once('mysql_connection.php');
        $query = "SELECT * FROM Stock";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> Stock_id </b></td>
        <td align="left"><b> Name </b></td>
        <td align="left"><b> Quantity </b></td>
        <td align="left"><b> Price </b></td>
        <td align="left"><b> Invested_Price </b></td>
        <td align="left"><b> Expiry_Date </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['Stock_id'] . '</td><td align="left">'.
        $row['name'] . '</td><td align="left">' .
        $row['Quantity'] . '</td><td align="left">' .
        $row['price'] . '</td><td align="left">'.
        $row['invested_price'].'</td><td align="left">'.
        $row['expiry_date'].'</td';
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
