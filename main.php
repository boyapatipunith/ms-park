<?php
   session_start();
   if (!isset($_SESSION["un"])){
    header('Location: index.html');
  }
?>
<html>
<head>
<frameset rows="26%,*">
<frame src="top.php" name="f1">
<frameset cols="13%,*">
<frame src="left.php" name="f2">
<frame src="right.html" name="f3">
</frameset>
</frameset>
</head>
</html>