<?php include("header.php"); ?>
<h1>Invoice Logged</h1>

<ul>
<li><a href=new-billing.php>Log Another</a></li>
<li><a href=index.php>View All Invoices</a></li>
</ul>


<?php include("con.php"); ?>


<?php

$sql="INSERT INTO billing (client, due, employee, phasecode1, decription1, cost1, phasecode2, decription2, cost2, phasecode3, decription3, cost3, phasecode4, decription4, cost4, phasecode5, decription5, cost5, phasecode6, decription6, cost6, phasecode7, decription7, cost7, total, comments, status) VALUES ('$_POST[client]','$_POST[paymentdue]','$_POST[employee]','$_POST[phasecode1]','$_POST[description1]','$_POST[costs1]','$_POST[phasecode2]','$_POST[description2]','$_POST[costs2]','$_POST[phasecode3]','$_POST[description3]','$_POST[costs3]','$_POST[phasecode4]','$_POST[description4]','$_POST[costs4]','$_POST[phasecode5]','$_POST[description5]','$_POST[costs5]','$_POST[phasecode6]','$_POST[description6]','$_POST[costs6]','$_POST[phasecode7]','$_POST[description7]','$_POST[costs7]','$_POST[total]','$_POST[comments]','pending')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "";


$result = mysql_query("SELECT id FROM billing order by id desc limit 1")
or die(mysql_error());  

$row = mysql_fetch_array( $result );


$to = "harry@thelukenscompany.com";
$subject = "New Billing Request Generated";
$body = "Nathan,\n\nA new billing request for ".$_POST['client']." totalling $".$_POST['total']." has been posted to the billing system.  To view the invoice click the link below\n\nhttp://billing.emotivellc.com/view-invoice.php?id=".$row['id'];
$headers = "From: info@emotivellc.com\r\nReply-To: team@emotivellc.com";
if (mail($to, $subject, $body, $headers)) {
  echo("");
 } else {
  echo("<p>Message delivery failed...</p>");
 }



?>



<?php include("footer.php"); ?>