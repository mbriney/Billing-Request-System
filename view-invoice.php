<?php include("header.php"); ?>

<script src="calendar.js" type="text/javascript"></script>
<link href="calendar.css" type="text/css" rel="stylesheet" />

<?php 

include("con.php");


$result = mysql_query("SELECT * FROM billing WHERE id = ".$_GET['id']) or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>


<h1>Billing Request #<?php echo $_GET['id']; ?></h1>


<div class="fieldset">
	<div class="label">Invoice Date: </div>
	<div class="fields">
		<?php echo $row['submit_date'] ?>
		</div>
</div>
<br><br>



<div class="fieldset">
	<div class="label">Client Name: </div>
	<div class="fields">
		<?php echo $row['client'] ?>
		</div>
</div>
<br><br>

<div class="fieldset">
	<div class="label">Payment Due: </div>
	<div class="fields">
	<?php echo $row['due'] ?>
	</div>
</div>
<br><br>


<div class="fieldset">
	<div class="label">Employee Name: </div>
	<div class="fields">
	<?php echo $row['employee'] ?>
	</div>
</div>
<br><br>
<hr>
<div class="fieldset_header">
	<div class="phasecode">Job Code</div>
	<div class="description">Description</div>
	<div class="costs">Costs</div>	
</div>
<br><br>

<!-- Start Line Items -->

<div class="fieldset">
	<div class="phasecode">
		<?php echo $row['phasecode1'] ?>
	</div>
	<div class="description">
		<?php echo $row['decription1'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost1'] ?>
	</div>
<br><br>
</div>


<div class="fieldset" <?php if ($row['phasecode2'] == 0) 
echo " style='display:none;'"; 
?>>
	<div class="phasecode">
		<?php echo $row['phasecode2'] ?>	</div>
	<div class="description">
		<?php echo $row['decription2'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost2'] ?>
	</div>
<br><br>
</div>


<div class="fieldset" <?php if ($row['phasecode3'] == 0) 
echo " style='display:none;'"; 
?>>
	<div class="phasecode">
		<?php echo $row['phasecode3'] ?>	</div>
	<div class="description">
		<?php echo $row['decription3'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost3'] ?>
	</div>
<br><br>
</div>


<div class="fieldset" <?php if ($row['phasecode4'] == 0) 
echo " style='display:none;'"; 
?>>
	<div class="phasecode">
		<?php echo $row['phasecode4'] ?>	</div>
	<div class="description">
		<?php echo $row['decription4'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost4'] ?>
	</div>
<br><br>
</div>


<div class="fieldset" <?php if ($row['phasecode5'] == 0) 
echo " style='display:none;'"; 
?>>
	<div class="phasecode">
		<?php echo $row['phasecode5'] ?>	</div>
	<div class="description">
		<?php echo $row['decription5'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost5'] ?>
	</div>
<br><br>
</div>



<div class="fieldset" <?php if ($row['phasecode6'] == 0) 
echo " style='display:none;'"; 
?>>
		<?php echo $row['phasecode6'] ?>	</div>
	<div class="description">
		<?php echo $row['decription6'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost6'] ?>
	</div>
<br><br>
</div>



<div class="fieldset" <?php if ($row['phasecode7'] == 0) 
echo " style='display:none;'"; 
?>>
	<div class="phasecode">
		<?php echo $row['phasecode7'] ?>	</div>
	<div class="description">
		<?php echo $row['decription7'] ?>
	</div>
	<div class="costs">
		$<?php echo $row['cost7'] ?>
	</div>
<br><br>
</div>


<div class="fieldset">
<div style="width:850px;float:left;text-align:right;"><b>Total Costs: $<?php echo $row['total'] ?></b></div>
<br><br>
</div>


<div class="fieldset">
	<div class="label">Notes for Accounting: </div>
	<div class="fields" style="float:left;"><?php echo $row['comments'] ?></div>
</div>	
<br><br>	<br><br>	<br>	
<?php

if ($row['status'] == 'processed')
   echo "<hr>Processed on ".$row['invoice_sent']." by ".$row['initials']." invoice #".$row['invoiceno'];
?>
<hr>
<h4>For Accounting Use Only</h4>
<form action="accounting-update.php" method="post">

<div class="fieldset">
	<div class="phasecode">
		Date Entered: <input type="text" name="date_entered" id="date_entered" size="10" value=""><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">		
		<script type="text/javascript">
calendar.set("date_entered");
</script>
		</div>
	<div class="description">
		Entered by <span class="small">(initials)</span> <input name="initials" value="" size="3"> 		
		&nbsp; &nbsp; &nbsp; 
		Invoice #: <input name="invoiceno" value="" size="3"> 		
		
		
		
		
		<input type="submit" name="submit" value="Record Entry">
		
		
	</div>
	<div class="costs">

	</div>
<br><br>
</div>


</form>


<?php include("footer.php"); ?>