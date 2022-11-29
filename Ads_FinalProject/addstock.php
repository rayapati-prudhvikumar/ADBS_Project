<?php $page = 'addstock';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Enter New Stock Details</h1>
        <form action="stockadded.php" method="post">
        <b>Add New Stock</b><br>
        <br>
        <p> <b> Stock Id:</b><br>
        <input type="text" name="stock_id" size="30" value="" required />
        </p>
        <br>
        <p><b>Stock Name:</b><br>
        <input type="text" name="stock_name" size="30" value="" required />
        </p>
        <br>
        <p><b>Quantity:</b><br>
        <input type="text" name="Quantity" size="30" value="" required/>
        </p>
        <br>
        <p><b>Selling Price:</b><br>
        <input type="text" name="price" size="30" value="" required />
        </p><br>
        <p><b>Invested Price:</b><br>
        <input type="text" name="invested_price" size="30" value="" required />
        </p><br>
        <p><b>Expiry Date:</b><br>
        <input type="text" name="expiry_date" size="30" value="" required/>
        </p><br>
        <input class="btn btn-success btn-lg" type="submit" value="submit">
        </form>
      </div>

    </div>

    <link rel="stylesheet" href="css/Styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
