<?php $page = 'Default_CustomerNotPaid';include 'include/header.php'; ?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h2>Defaulter’s list of customers not paid their pending amount </h2>
        <div id ="msg1" class="alert" role="alert"><span class="closebtn">&times;</span>  
  <strong>Warning Alert !!!</strong> Payment Not Yet Completed! Deadline is Passed Away.  </div>
        <div hidden id="msg" class="alert warning" role="alert"><span class="closebtn">&times;</span>
             <strong>Warning Alert!!! </strong> Customer who have not paid their pending amount is requesting more items.
              </div>
        <script type="text/javascript">
          function displayWarning(){
            alert("Customer who have not paid their pending amount is requesting more items.");
            var x = document.getElementById("msg");
            x.style.display = "block";
          }
          setTimeout(function() {
            $("#msg1").fadeOut();
          }, 5000);
          setTimeout(function() {
            $("#msg").fadeOut();
          }, 5000);

        </script>
        <?php
        require_once('mysql_connection.php');
        $query = "SELECT ORDER_ID,customer_id,orderdate,Amount,Amountpaid FROM orders where AmountPaid='N' and orderdate < NOW() - INTERVAL 7 DAY;";
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
        <td align="left"><b> Make Order </b></td>
        </tr>';

        while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['ORDER_ID'] . '</td><td align="left">'.
        $row['customer_id'] . '</td><td align="left">' .
        $row['orderdate'] . '</td><td align="left">' .
        $row['Amount'] . '</td><td align="left">' .
        'NO' . '</td><td align="left">' .
        '<button type="button" onclick="displayWarning()" class="btn btn-success">Requesting More Items</button></td>';
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
    <link rel="stylesheet" href="css/warning_alert.css">
    <script type="text/javascript">
      var close = document.getElementsByClassName("closebtn");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
        }
      }
</script>
  </body>
</html>
