<?php include("header.php"); ?>

<script>
function gettotal() {

document.newinvoice.total.value = parseFloat(document.newinvoice.costs1.value) + parseFloat(document.newinvoice.costs2.value) + parseFloat(document.newinvoice.costs3.value) + parseFloat(document.newinvoice.costs4.value) + parseFloat(document.newinvoice.costs5.value) + parseFloat(document.newinvoice.costs6.value) + parseFloat(document.newinvoice.costs7.value);

}

</script>


<h1>Create a New Billing Item</h1>
<form name="newinvoice" action="invoice-logged.php" method="post">
<div class="fieldset">
	<div class="label">Client Name: </div>
	<div class="fields">
		<select name="client">
		<?php 

	    	require('Basecamp.class.php');
    		$bc = new Basecamp('YOURBASECAMPURL','YOURBASECAMPLOGIN','YOURBASECAMPPASS');
    		$response = $bc->getCompanies();
			$companies_xml = new SimpleXMLElement($response['body']);
        
    		foreach($companies_xml->company as $company) {
  					echo "<option value='" . $company->name ."'>" . $company->name . "</option>";
			}
		?>
	</select>
	</div>
</div>
<br><br>

<div class="fieldset">
	<div class="label">Payment Due: </div>
	<div class="fields">
	<input type="radio" name="paymentdue" value="Upon Receipt">Upon Receipt
	<input type="radio" name="paymentdue" value="15 Days">15 Days
	<input type="radio" name="paymentdue" value="30 Days">30 Days
	<input type="radio" name="paymentdue" value="60 Days">60 Days
	<input type="radio" name="paymentdue" value="Other">Other <span class="small">(please specify in comments)</span>
	</div>
</div>
<br><br>


<div class="fieldset">
	<div class="label">Employee Name: </div>
	<div class="fields">
	<input name="employee" size="30"></input>
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
		<select name="phasecode1">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description1" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs1" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>

<div class="fieldset">
	<div class="phasecode">
		<select name="phasecode2">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description2" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs2" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>

<div class="fieldset">
	<div class="phasecode">
		<select name="phasecode3">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description3" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs3" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>

<div class="fieldset">
	<div class="phasecode">
		<select name="phasecode4">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description4" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs4" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>


<div class="fieldset">
	<div class="phasecode">
		<select name="phasecode5">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description5" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs5" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>

<div class="fieldset">
	<div class="phasecode">
		<select name="phasecode6">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description6" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs6" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>


<div class="fieldset">
	<div class="phasecode">
		<select name="phasecode7">
			<option value=""></option>
			<option value="2001">2001 - Strategy & Creative</option>
			<option value="3001">3001 - Site Development</option>
			<option value="4001">4001 - Site Maintenance & Updates</option>
			<option value="5001">5001 - Advertising</option>
			<option value="6001">6001 - Software & Data Services</option>
		</select>
	</div>
	<div class="description">
		<input name="description7" size="70"></input>
	</div>
	<div class="costs">
		$<input name="costs7" size="10" value="0" onkeyup="gettotal();"></input>
	</div>
</div>
<br><br>

<div class="fieldset">
<div style="width:760px;float:left;text-align:right;"><b>Total Costs:</b></div>
<div class="costs">$<input name="total" size="10"></input></div>
</div>
<br><br>

<div class="fieldset">
	<div class="label">Notes for Accounting: </div>
	<div class="fields"><textarea rows="3" cols="40" name="comments"></textarea></div>
</div>	
<br><br>	<br><br>	<br>	
	
<center>
<input name="Submit" type="Submit" value="Submit Invoice"></input>
</center>

</form>

<?php include("footer.php"); ?>