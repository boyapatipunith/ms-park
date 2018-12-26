<html>
<body bgcolor="#fffggg" text="green">
<form align="center" name="f2" method="POST" action="ticketview.php">
<table align="center">
<marquee><h1>MS NATIONAL ZOOLOGICAL PARK</h1></marquee>
<tr>
<td>
<h2></h2>
</td>
</tr>
</table>
<input type="submit" value="Click here" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
 {
  $category=$_POST['s1'];
  $con=new mysqli("localhost","root",'',"ticket");
  $sql="select * from booking";
  $res=$con->query($sql);
  if($res->num_rows>=1)
  {
	  echo "<table align='center' border=2>";
	  echo "<tr><th>sno</th><th>name</th><th>category</th><th>price</th></tr>";
	  while($row=$res->fetch_assoc())
	  {
		  echo "<tr><td>".$row['sno']."</td><td>".$row['name']."</td><td>".$row['category']."</td><td>".$row['price']."</td></tr>";
	  }
echo "</table>";
echo "<button align='center'>print</button>";
  }
else
{
  echo "No records found";
}
}
?>  