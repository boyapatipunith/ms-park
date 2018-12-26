<?php
   session_start();
   if (!isset($_SESSION["un"])){
    header('Location: index.html');
  }
?>
<html>
<head>
<style>
h2
{
	text-color:yellow;
}
</style>
<title>aleft</title>
<link rel="stylesheet" type="text/css" href="left.css">
</head>
<body>
<?php
echo "<span style='color:yellow'><h3>welcome</h3><h2>".$_SESSION['un']."</h2></span>";
?>
<table width="100%">
<tr>
<td>
<a href="ticket1.html" target="f3">Ticket</a>
</td>
</tr>
<tr>
<td>
<a href="database.php" target="f3">Database</a>
</td>
</tr>
<tr>
<td>
<a href="image.html" target="f3">Images</a>
</td>
</tr>
<tr>
<td>
<a href="about.html" target="f3">About</a>
</td>
</tr>
<tr>
<td>
<a href="map.html" target="f3">Map</a>
</td>
</tr>
<tr>
<td>
<a href="details.html" target="f3">Details</a>
</td>
</tr>
<tr>
<td>
<a href="lout.php"target="_blank">Logout</a>
</td>
</tr>
</table>

</body>
</html>
