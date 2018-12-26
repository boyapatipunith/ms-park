<?php
session_start();
if(isset($_POST['submit']))
{
	
  $uname=$_POST['username'];
  $pwd=$_POST['password'];
  if($uname="admin" and $pwd="admin123")
  {
	  $_SESSION["un"]=$uname;
	  header('Location: amain.php');
  }
  else
  {
	  echo "<p>invalid login</p>";
  }
}
?>