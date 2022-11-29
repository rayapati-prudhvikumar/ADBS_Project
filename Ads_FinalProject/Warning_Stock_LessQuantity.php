<?php $page = 'Warning_Stock_LessQuantity';include 'include/header.php'; ?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h2> Warning stock quantity goes less than a particular amount (10 items).</h2>
        <script>
         alert("Quantity of Items Less than 10 !!!");
         setTimeout(function() {
            $("#msg").fadeOut();
          }, 5000);
        </script>
        <?php
        require_once('mysql_connection.php');
        
        echo '<div id ="msg" class="alert warning" role="alert"><span class="closebtn">&times;</span>  
  <strong>Warning Alert !!!</strong> Quantity is Less than 10 </div>';
        $query = "SELECT * FROM stock WHERE Quantity < 10 ORDER BY Quantity DESC, Stock_id;";
        $response = @mysqli_query($dbc, $query);
        if($response){
        echo '<table id="students" align="left"
          cellspacing="5" cellpadding="8">
        <tr>
        <td align="left"><b> Stock_id </b></td>
        <td align="left"><b> name </b></td>
        <td align="left"><b> Quantity </b></td>
        <td align="left"><b> price </b></td>
        </tr>';

        while($row = mysqli_fetch_assoc($response)){
        echo '<tr><td align="left">' .
        $row['Stock_id'] . '</td><td align="left">'.
        $row['name'] . '</td><td align="left">' .
        $row['Quantity'] . '</td><td align="left">' .
        $row['price']. '</td>';
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
