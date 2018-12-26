<?php
   session_start();
   if (!isset($_SESSION["un"])){
    header('Location: index.html');
  }
?>
<html>
<head>
<title>National Parks</title>
<link rel="stylesheet" type="text/css" href="top.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<img src="images.png" width="100" height="100" alt="object not found">
</td>
<td align="center" colspan="4">
<marquee><h1>MS NATIONAL ZOOLOGICAL PARK</h1></marquee>
</td>
</tr>
<tr>
<td>
<a href="home.html" target="f3">HOME</a>
</td>
<td>
<a href="birds.html" target="f3">BIRDS</a>
</td>
<td>
<a href="animals.html" target="f3">ANIMALS</a>
</td>
<td>
<a href="reptiles.html" target="f3">REPTILES</a>
</td>
<td>
<a href="aquatics.html" target="f3">AQUATICS</a>
</td>
<td>
<a href="help.html" target="f3">CONTACT US</a>
</td>
</tr>
</table>
</body>
</html>