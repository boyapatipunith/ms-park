<?php
$ticket = $_GET['ticket'];
if($ticket=="child")
{
	echo "<input type='text' name='price' value='50' disabled=yes>";
}
if($ticket=="gents")
{
	echo "<input type='text' name='price' value='100' disabled=yes>";
}
if($ticket=="ladies")
{
	echo "<input type='text' name='price' value='100' disabled=yes>";
}
if($ticket=="family")
{
	echo "<input type='text' name='price' value='300' disabled=yes>";
}
if($ticket=="couples")
{
	echo "<input type='text' name='price' value='200' disabled=yes>";
}
?>