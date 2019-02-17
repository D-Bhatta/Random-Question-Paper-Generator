<?php

$header=<<<'EOD'
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Random Question Paper Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dekko|Josefin+Sans|Libre+Barcode+128+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-static-top navbar-dark bg-primary">
    <div class="container-fluid">        
        <img src="../images/logo.png" class="image-thumbnail float-left" alt="Logo" style="width:100px;height:100px;">
        <a class="navbar-brand text-light" href="index.php">Random Question Paper Generator</a>
        <img src="../images/logo.png" class="image-thumbnail float-right" alt="Logo" style="width:100px;height:100px;">        
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-static-top navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">RQG</a>
    <div class="navbar-collapse offcanvas-collapse text-light" id="navbarSecond">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="genqpaper.php">Generate<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insqs.php">Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fas fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login_admin.php"><i class="fas fa-bullseye"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php"><i class="fas fa-user-plus"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="about.php">About</a>
              <a class="dropdown-item" href="consoleUser.php">User Console</a>
              <a class="dropdown-item" href="consoleAdmin.php">Admin Console</a>
            </div>
          </li>
        </ul>
      </div>
</nav>

EOD;

echo $header;
