<?php $page = 'addcustomer';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Enter New Customer Details</h1>
        <form action="customeradded.php" method="post">
        <b>Add New Stock</b><br>
        <br>
        <p> Customer Id:<br>
        <input type="text" name="customer_id" size="30" value="" required />
        </p>
        <br>
        <p>Customer Name:<br>
        <input type="text" name="name" size="30" value="" required />
        </p>
        <br>
        <p>Address:<br>
        <input type="text" name="address" size="30" value="" required/>
        </p>
        <br>
        <p>Telephone:<br>
        <input type="text" name="telephone" size="30" value="" required />
        </p><br>
        
        <input class="btn btn-success btn-lg" type="submit" value="submit">
        </form>
      </div>

    </div>

    <link rel="stylesheet" href="Styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
