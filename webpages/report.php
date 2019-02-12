<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
       <table width="100%" border="0">
        <tr style="background-color:#CC0" border="0">
            <td><img src="../images/logo/img 2.jpg" width="100px" height="100px" alt="logo" /></td>
            <td style="text-align:center;font-size:24px;font-weight:bold;">JIS UNIVERSITY</td>
            <td><img src="../images/logo/img 2.jpg" width="100px" height="100px" alt="logo" /></td>

        </tr>
    </table>
<script type="text/javascript">
function Validate(){
	var x=document.getElementById("fn").value;
	if(!isNaN(x))
	{
		alert("Please Enter a Valid Name");
	}
}
function changeCase(){
	var x=document.getElementById("fn").value.toUpperCase();
	document.getElementById("fn").value=x;
}
</script>
</head>

<body>
<form name="frmregister"action="verifi.php" method="post">
<table>

<table width='100%' height='50%' border='0'>
<tr>
<td><b><center>Report</b></center></td>
</tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="42%" style="text-align:right; padding:10px; background-color:#FC6;">User Id:</td>
    <td width="58%"><input type="text" id="fn"  onblur="Validate();" onkeyup="changeCase();"/></td>
  </tr>
  <tr>
    <td style="text-align:right; padding:10px; background-color:#FC6;">No. of students:</td>
    <td width="58%"><input type="text" id="NoS"  /></td>
  </tr>
  <tr>
    <td style="text-align:right; padding:10px; background-color:#FC6;">Average Marks :</td>
     <td width="58%"><input type="text" id="Avg" /></td>
  </tr>
  <tr>
    
    <td colspan="2" style="text-align:center;"><input type="button" id="submit" width="50px;" height="20px" value="Submit"/>&nbsp;&nbsp;<input type="button" id="Reset" width="50px;" height="20px" value="Reset"/>
  </tr>
 
  
  
</table>
</table>
</form>
<table>
<table width="100% " border="0 ">
<tr style="background-color:#030 " border="0 ">
<td style="text-align:center;font-size:24px;font-weight:bold; ">
<span style="color:#FFF; ">Developed by students of JISU</span><br/>
</td>
</tr>
</table>
   </body>
</html>
