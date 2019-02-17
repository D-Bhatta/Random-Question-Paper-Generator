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

</head>
<body>
<table width=100%>
    <tr>
        <td>

<table width=100%>
        <tr style="background:#002D59;">
        <td><center><img src="../images/logo.png" height="100px" weight="100px" alt="Logo"></center></td>
        <td style="text-align:center;font-size:36px;font-weight:bold; color:#FFF"><a href="index.php">Random Question Paper Generator</a></td>
        <td><center><img src="../images/logo.png" height="100px" weight="100px" alt="Logo"></center></td>
    </tr>
</table>

<table width="100%" border="1" style="border-color:#FFF;">
        <tr style="background:#FFF;">
                <td style="color:rgb(255, 255, 255); font-family: 'Times New Roman', Times, serif;"><b><center><a href="AboutTraining.php">About</a></center></b></td>
                <td style="color:#FFF; font-family: 'Times New Roman', Times, serif;"><b><center><a href="LAU.php">Login as User</a></center></b></td>
                <td style="color:#FFFFFF; font-family: 'Times New Roman', Times, serif;"><b><center><a href="LAA.php">Log in as Admin</a></center></b></td>
        </tr>
</table>
EOD;

echo $header;
