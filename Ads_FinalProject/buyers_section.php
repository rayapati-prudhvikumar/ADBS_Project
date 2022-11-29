<?php $page = 'buyers_section';include 'include/header.php'; 
?>
<hr>
    <div class="container">

      <div class="starter-template">
        
        <h1> Buyers Section </h1>
        <br>
        <form method = "POST" action ="buyers_list.php">
        <input type = "submit" class="btn btn-info" value="Display Buyers List"/>
        </form>
        <br>
        <br>
        <form method = "POST" action ="addbuyer.php">
        <input type = "submit" class="btn btn-info" name="A" value = "Add New Buyer"/>
        </form>
        <br>
        <br>
      </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
