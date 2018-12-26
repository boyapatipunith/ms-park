<html>
<body bgcolor="yellow" text="green">
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
  
  $con=new mysqli("localhost","root",'',"ticket");
  $sql="select * from booking";
  $res=$con->query($sql);
  if($res->num_rows>=1)
  {
	  echo "<table align='center' border=2>";
	  echo "<tr><th>name</th><th>catagory</th><th>Price</th></tr>";
	  while($row=$res->fetch_assoc())
	  {
		  echo "<tr><td>".$row['name']."</td><td>".$row['cat']."</td><td>";
		  if($row['cat']=="child")
{
	echo "50";
}
if($row['cat']=="gents")
{
	echo "100";
}
if($row['cat']=="ladies")
{
	echo "100";
}
if($row['cat']=="family")
{
	echo "300";
}
if($row['cat']=="couples")
{
	echo "200";
}
		  echo "</td></tr>";
	  }
echo "</table>";

  }
else
{
  echo "No records found";
}
}
?>  