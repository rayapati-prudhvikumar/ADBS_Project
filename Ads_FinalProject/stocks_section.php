<?php $page = 'stocks_section';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        
        <h1> Stocks Section </h1>
        <form method = "POST" action ="stocks_list.php">
        <input type = "submit" class="btn btn-info"value="Display Stocks List"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="addstock.php">
        <input type = "submit" class="btn btn-info"name="A" value = "Add New Stock "/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="Stock_LessQuantity.php">
        <input type = "submit" class="btn btn-info"name="B" value = "Stocks Quantity Lessthan 10"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="Warning_Stock_LessQuantity.php">
        <input type = "submit" class="btn btn-info" name="C" value = "Warning when the quantity of an item goes less than a particular amount."/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="ProfitCalculation.php">
        <input type = "submit" class="btn btn-info" name="F" value = "Profit calculation for a month."/>
        </form>
      </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
