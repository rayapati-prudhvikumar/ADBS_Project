<?php $page = 'customers_list';include 'include/header.php'; ?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h2> Customers List </h2>
        <?php
        require_once('mysql_connection.php');
        $query = "SELECT * FROM customer;";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> Customer_id  </b></td>
        <td align="left"><b> Name </b></td>
        <td align="left"><b> Address </b></td>
        <td align="left"><b> Telephone </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['Customer_id'] . '</td><td align="left">'.
        $row['name'] . '</td><td align="left">' .
        $row['Address'] . '</td><td align="left">' .
        $row['telephone'] . '</td>';
       
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
