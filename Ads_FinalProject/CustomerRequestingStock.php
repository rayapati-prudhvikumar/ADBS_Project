<?php $page = 'CustomerRequestingStock';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Customer Order Stock</h1>
        <div id="errdisp"></div>
        <script>
            function create () {
              var customer_id = document.getElementById("customer_id").value;
              var customer_name = document.getElementById("customer_name").value;
              var stock_id = document.getElementById("stock_id").value;
              var stock_name = document.getElementById("stock_name").value;
              var Quantity = document.getElementById("Quantity").value;
              var delivery_date = document.getElementById("delivery_date").value;
              var amount_paid = document.getElementById("amount_paid").value;
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("errdisp").innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET", "StockRequestedWarning.php?customer_id=" + customer_id+"&customer_name="+customer_name+"&stock_id="+stock_id+"&stock_name="+stock_name+"&Quantity="+Quantity+"&delivery_date="+delivery_date+"&amount_paid="+amount_paid , true);
              xmlhttp.send();
              
                /*$.ajax({
                    url:"StockRequestedWarning.php",    //the page containing php script
                    type: "post", 
                    dataType: "json",   
                    data: {user_id:"user_id"},
                    success:function(data){
                      alert("hell");
                        //var jsonData = JSON.parse(response);
                        
                    }
                });*/
            }
        </script>
        <form action="StockRequestedWarning.php" method="get">
        <b>New Order! Ajax Request</b><br>
        <br>
        <p> <b> Customer Id: </b><br>
        <input type="text" id="customer_id" name="customer_id" size="30" value="" required />
        </p>
        <br>
        <p> <b>Customer Name:</b><br>

        <input type="text"  id= "customer_name" name="customer_name" size="30" value="" required />
        </p>
        <br>
        <p> <b> Stock Id:</b><br>
        <input type="text" id="stock_id" name="stock_id" size="30" value="" required />
        </p>
        <br>
        <p><b>Stock Name:</b><br>
        <input type="text" id="stock_name" name="stock_name" size="30" value="" required />
        </p>
        <br>
        <p><b>Required Quantity:</b><br>
        <input type="text" id= "Quantity" name="Quantity" size="30" value="" required/>
        </p>
        <br>
        <p><b>Delivery Date:</b><br>
        <input type="text" id= "delivery_date" name="delivery_date" size="30" value="" required/>
        </p>
        <br>
        
        <p><b>Amount Paid:</b><br>
        <input type="text" id= "amount_paid" name="amount_paid" size="30" value="" required/>
        </p>
        <br>
        <input class="btn btn-success btn-lg" type="button" onclick="create()" value="submit">
        </form>
      </div>

    </div>

    <link rel="stylesheet" href="Styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>
