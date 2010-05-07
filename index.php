<?php include("header.php"); ?>
<h1>List of all Billing Requests</h1>

<table cellpadding="2" cellspacing="0" border="0" width="100%">
<tr class="heading">
	<td></td>
	<td>Invoice Date</td>
	<td>Client</td>
	<td>Logged by</td>
	<td>Total</td>
</tr>

<?php

include("con.php");

$result = mysql_query("SELECT * FROM billing order by id desc") 
or die(mysql_error());  


while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr class='item' onclick=window.location='view-invoice.php?id=".$row['id']."';>"; 
	echo "<td class='row'><img src=/images/".$row['status'].".png height='18' border=0></td>";
	echo "<td class='row'>".$row['submit_date']."</td>";
	echo "<td class='row'>".$row['client']."</td>";
	echo "<td class='row'>".$row['employee']."</td>";
	echo "<td class='row'>$".$row['total']."</td>";
	echo "</tr>"; 
} 



?>

</table>



<?php include("footer.php"); ?>