<?php


require_once ('php/CreateDb.php');
require_once ('./php/component.php');
require_once ('./php/header.php');


 

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FBI Fear Of Being Innocent</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
</head>		
	
	
	<br>
	<br>
<center>	<h6>Your total : R<span type="text"  id ="total" placeholder=""></h6></center>
     
	<br>
	<br>
	
	
	
<body>
<center>
<button id="ipayButton" type="button" style="width: 400px; padding: 10px 16px; font-size: 18px; line-height: 1.33; border-radius: 6px; color: rgb(68, 175, 133); background-color: rgb(255, 255, 255); border-color: rgb(68, 175, 133); display: inline-block; margin-bottom: 20px; font-weight: 800; text-align: center; white-space: nowrap; vertical-align: middle; cursor: pointer; user-select: none; box-shadow: rgb(136, 136, 136) 3px 3px 20px;"  onmouseover="this.style.backgroundColor='#EEE'" onmouseout="this.style.backgroundColor='#FFFFFF'"><div style="float:left;padding-top: 22px;padding-left: 15px;">Click Here<br>to pay with</div><img src="https://cdn.i-station.co.za/img/ozow-payment-logo-c.png"></button>

<div id="ipayModal" class="modal" style="display:none;position:fixed;z-index:1;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4);">
  <div style="background-color:#fefefe;margin:15% auto;padding:20px;border:1px solid #888;width:80%;border-radius:9px;">
	<span class="ipayClose" style="color:#aaa;float:right;font-size:28px;font-weight:bold;cursor:pointer">&times;</span>
	<form method="post" action="https://pay.ozow.com/" id="ipayForm">
		<p class="ipay-name">
			<input type="text" id="ipayFullName" name="Optional1" placeholder="Full Name" class="fields" required>
		</p>
		<p class="ipay-email">
			<input type="email" name="Customer" placeholder="Email" class="fields" required>
		</p>
		<p class="ipay-contact">
			<input type="text" name="Optional2" placeholder="Contact Number" class="fields" required>
		</p>
		<p class="ipay-amount" >
			<input type="text" id="ipayAmount" name="Amount" placeholder="Amount" value="0.00" class="fields" required>
		</p>
			<script>
				
				   
				
				
				     const total = localStorage.getItem("Total");
					 
					 
					var buy = document.getElementById('total').innerHTML = total;
					 
					 console.log(total);
					 </script>
<button id="ipayButton" type="submit" style="padding: 10px 16px; font-size: 18px; line-height: 1.33; border-radius: 6px; color: rgb(68, 175, 133); background-color: rgb(255, 255, 255); border-color: rgb(68, 175, 133); display: inline-block; margin-bottom: 20px; font-weight: 800; text-align: center; white-space: nowrap; vertical-align: middle; cursor: pointer; user-select: none; box-shadow: rgb(136, 136, 136) 3px 3px 5px;" onmouseover="this.style.backgroundColor='#EEE'" onmouseout="this.style.backgroundColor='#FFFFFF'"><div style="float:left;padding-top: 15px;padding-left: 15px;">Click Here<br>To Pay Now</div><img src="https://cdn.i-station.co.za/img/ozow-payment-logo-c.png" style="margin: 5px 0 -5px 20px;"></button>

		<input type="hidden" name="SiteCode" value="FBI-FBI-001">
		<input type="hidden" name="CountryCode" value="ZA">
		<input type="hidden" name="CurrencyCode" value="ZAR">
		<input type="hidden" id="ipayTransactionRef" name="TransactionReference" value="">
		<input type="hidden" id="ipayBankRef" name="BankReference" value="">
		<input type="hidden" name="Optional5" value="Buy Now">
		<input type="hidden" name="CancelUrl" value="https://ozow.com/demo-cancelled/">
		<input type="hidden" name="ErrorUrl" value="https://ozow.com/demo-cancelled/">
		<input type="hidden" name="SuccessUrl" value="https://ozow.com/demo-success/">
		<input type="hidden" name="IsTest" value="false">
		<input type="hidden" id="ipayHash" name="HashCheck" value="">
	</form>
	
  </div>
</div>
<script src="https://cdn.i-station.co.za/js/sha512.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script>
jQuery(function($) {
	$("#ipayButton").click(function() {
		$("#ipayModal").show();
	});

	$(".ipayClose").click(function() {
		$("#ipayModal").hide();
	});

	$("window").click(function(event) {
		if (event.target == $("#ipayModal")[0]) {
			$("#ipayModal").hide();
		}
	});
	
	$.fn.form = function() {
		var formData = [];
		$($(this).serializeArray()).each(function(index, item) {
			formData[item.name] = item.value;  
		});
		return formData;
	};
	
	$("#ipayForm").validate({
		rules: {
			Amount: {
				required: true,
				number: true
			}
		}
	});
	
	$("#ipayForm").submit(function( event ) {
		var d = new Date();
		var n = d.getTime();
		var ref = n + $("#ipayFullName").val();
		
		ref = ref.replace(/[^a-zA-Z0-9]/g,'');
		
		$("#ipayAmount").val(parseFloat($("#ipayAmount").val()).toFixed(2));
		$("#ipayTransactionRef").val(ref.substr(0,50));
		$("#ipayBankRef").val(ref.substr(0,20));
		
		var data = $(this).form();
		var hashString = data['SiteCode']
							 + data['CountryCode']
							 + data['CurrencyCode']
							 + data['Amount']
							 + data['TransactionReference']
							 + data['BankReference']
							 + data['Optional1']
							 + data['Optional2']
							 + data['Optional5']
							 + data['Customer']
							 + data['CancelUrl']
							 + data['ErrorUrl']
							 + data['SuccessUrl']
							 + data['IsTest']
							 + "6uVL6JRlqMmpyqYBi7mbFiwlhwIjE8gd";
							 
		var hash = sha512(hashString.toLowerCase());
		$("#ipayHash").val(hash);
	});
});
</script>

</center>
</body>


  
	
	
	<br>
	<br>
	
	<br>
	<br>
	

	
	
	
	<?php
    require_once ('./footer.php');
?>
	