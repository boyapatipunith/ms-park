<?php
session_start();
if(isset($_POST['submit']))
{
  $un=$_POST['un'];
  $pwd=$_POST['pwd'];
  $con=new mysqli("localhost","root","","khaja");
  $sql="select * from register where un='$un' and pwd='$pwd'";
  $result=$con->query($sql);
  if($result->num_rows>=1)
  { 
      $row=$result->fetch_assoc();
      $_SESSION["un"]=$un;
    header('Location: main.php');
  }
  else
  {
    echo"<p>invalid login</p>";
  }
  $con->close();
}
?>