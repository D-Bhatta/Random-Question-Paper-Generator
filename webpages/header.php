<?php

$header=<<<'EOD'
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Random Question Paper Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSecond" aria-controls="navbarSecond" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse offcanvas-collapse text-light" id="navbarSecond">
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
?>