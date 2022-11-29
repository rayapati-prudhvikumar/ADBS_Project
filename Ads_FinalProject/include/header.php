<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Wholesale Management System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>Medical Hospital Wholesale Management System <b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($page=='home'){echo 'active';}?>"><a href="home.html">Home</a></li>
            <li class="<?php if($page=='stocks_section'){echo 'active';}?>"><a href="stocks_section.php">Stocks</a></li>
            <li class="<?php if($page=='Customer_Section'){echo 'active';}?>"><a href="Customer_Section.php">Customers</a></li>
            <li class="<?php if($page=='buyers_section'){echo 'active';}?>"><a href="buyers_section.php">Buyers</a></li>
            <li class="<?php if($page=='Payments'){echo 'active';}?>"><a href="Payments.php">Payments</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <hr>
