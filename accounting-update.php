<?php include("header.php"); ?>
<h1>Item Updated</h1>




<?php include("con.php"); ?>

<?
$result = mysql_query("UPDATE billing SET status='processed', invoice_sent='".$_POST['date_entered']."', initials='".$_POST['initials']."', invoiceno='".$_POST['invoiceno']."' WHERE id=".$_POST['id']) 
or die(mysql_error());

?>
Thank you, you will be redirected in 3 seconds... 
<meta http-equiv="refresh" content="5;url=http://billing.emotivellc.com" />
<?php include("footer.php"); ?>