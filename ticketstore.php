<html>
<head>
<link rel="stylesheet" type="text/css" href="ticket.css">
</head>
<script>
	function getprice() {
		var ticket=document.getElementById("ticket").value;
    if (ticket == "") {
        document.getElementById("price").innerHTML = "";
        return;
    } else{ 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("price").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getprice.php?ticket="+ticket,true);
        xmlhttp.send();
    }
}
</script>
<body text="cyan">
<div style="margin-left:150px;border:2px dashed cyan;width:700px;float:left;top:200px">
<form  align="center" name="f1" method="POST" action="ticketstore.php">
<table align="center">
<marquee><h1>MS NATIONAL ZOOLOGICAL PARK</h1></marquee>
<tr>
<td>
<h3>name</h3>
</td>
<td>
<input type="text" name="name" size="30">
</td>
</tr>
<tr>
<td>
<h3>category</h3>
</td>
<td>
<select name="s1" id='ticket' onchange="getprice()">
<option></option>
<option value="child">child</option>
<option value="gents">gents</option>
<option value="ladies">ladies</option>
<option value="family">family</option>
<option value="couples">couples</option>
</select>
</td>
</tr>
<tr>
<td>
<h3>Price:</h3>
</td>
<td>
<span id='price' name='price'>
<input type='number' name='price' >
</span>
</td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT">
<input type="reset" name="reset" value="RESET">
</form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
   $f2=$_POST['name'];
   $f3=$_POST['s1'];
   $con=new mysqli("localhost","root",'',"ticket");
   $sql="insert into booking(name,cat)values('$f2','$f3');";
   if($con->query($sql)==true)
   {
     echo "Details entered successfully";
	 }
	 else
	 {
	     echo "Error:".$sql."<br>".$con->error;
		 }
		 $con->close();
}		
?>		
