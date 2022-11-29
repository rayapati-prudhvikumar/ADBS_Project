<?php $page = 'ProfitCalculation';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Profit Calculation For a Month</h1>
        <?php
        require_once('mysql_connection.php');
        $query = "WITH totalIncome(month, incomecost) as
    (SELECT Month(Orderdate), sum(amount)
    FROM orders where AmountPaid = 'Y'
    GROUP BY Month(Orderdate)),
    totalExpense(sumExpense) as 
    (SELECT sum(Invested_price*Quantity)
    FROM stock)
    SELECT totalIncome.month as Month,totalIncome.incomecost As Total_Income,totalExpense.sumExpense as Total_Expense,totalIncome.incomecost-totalExpense.sumExpense as Profit
    FROM totalIncome, totalExpense;";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> Month </b></td>
        <td align="left"><b> Total_Income </b></td>
        <td align="left"><b> Total_Expense </b></td>
        <td align="left"><b> Profit </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['Month'] . '</td><td align="left">'.
        $row['Total_Income'] . '</td><td align="left">' .
        $row['Total_Expense'] . '</td><td align="left">' .
        $row['Profit'] . '</td>';
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
