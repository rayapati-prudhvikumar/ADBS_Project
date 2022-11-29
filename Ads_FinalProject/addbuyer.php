<?php $page = 'addbuyer';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        <h1> Enter New Buyer Details</h1>
        <form action="buyeradded.php" method="post">
        <b>Add New Buyer</b><br>
        <br>
        <p> Buyer Id:<br>
        <input type="text" name="buyer_id" size="30" value="" required />
        </p>
        <br>
        <p>Stock Id:<br>
        <input type="text" name="stock_id" size="30" value="" required />
        </p>
        <br>
        <p>Buyer Name:<br>
        <input type="text" name="buyer_name" size="30" value="" required/>
        </p>
        <br>
        <p>Address:<br>
        <input type="text" name="address" size="30" value="" required />
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
