
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

</head>		
<body>	


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
		  
		  
<form action="buy.php " id= "contactForm" class="billing-form">
 

		
		     <h3 class="mb-4 billing-heading"><b>Billing Details</b></h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
	                  <input type="text" class="form-control" id ="firstname" placeholder="first name">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" id ="lastname" placeholder="last name">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group" name ="area">
		            		<label for="country">Province</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">Gauteng</option>
		                    <option value="">Mpumalanga</option>
		                    <option value="">Western Cape</option>
		                    <option value="">Limpopo</option>
		                    <option value="">North West</option>
		                    <option value="">Eastern Cape</option>
							<option value="">Free State</option>
							<option value="">Kwa-Zulu Natal</option>
							<option value="">Northern Cape</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" id ="address" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" id ="apartment" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" id ="city" placeholder="city">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" id ="postcode" placeholder="postal code">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" id ="phone" placeholder="phone number">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" id ="email" placeholder="email address">
	                </div>
                </div>
				<h6>Products : <span type="text"  id ="products" placeholder=""></h6>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="submit">
										<button type="submit"  class="btn btn-warning my-3" id = "submit" name="submit">Submit <i class="fas fa-shopping-cart" ></i></button>
										</div>
									</div>
                </div>
	            </div>
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase.js"></script>					
			
				<script>
				
				   
				
				
				     const product = localStorage.getItem("Products");
					 
					 
					var buy = document.getElementById('products').innerHTML = product;
					 
					 console.log(product);
					 
					 
					  var firebaseConfig = {
    apiKey: "AIzaSyC05hC0ThbDF30SDIlYd84ZaaQUuZKRUCQ",
    authDomain: "fearofbeing-c6ca3.firebaseapp.com",
    projectId: "fearofbeing-c6ca3",
    storageBucket: "fearofbeing-c6ca3.appspot.com",
    messagingSenderId: "778465840446",
    appId: "1:778465840446:web:1e930f081a47300b6a306f",
    measurementId: "G-PGGFGGHNW5"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
 
  
  var messageRef = firebase.database().ref('messages');
 

document.getElementById('contactForm').addEventListener('submit',submitForm);


function submitForm(e){
	e.preventDefault();
	

	var firstname = getInputValue('firstname');
	var lastname = getInputValue('lastname');
	var address = getInputValue('address');
	var apartment = getInputValue('apartment');
	var city = getInputValue('city');
	var postcode = getInputValue('postcode');
	var phone = getInputValue('phone');
	var email = getInputValue('email');


	 saveMessage(firstname,lastname,address,apartment,city,postcode,phone,email,buy)
	 
     window.location = 'buy.php'
	
}


function getInputValue(id){

   return document.getElementById(id).value; 


}


function saveMessage(firstname,lastname,address,apartment,city,postcode,phone,email,buy)
{
	
	var newMessageRef = messageRef.push();
	newMessageRef.set({
		
		firstname:firstname,
		lastname:lastname,
		address:address,
		apartment:apartment,
		city:city,
		postcode:postcode,
		phone:phone,
		email:email,
		buy:buy
		
	});
	
}

					 
					 
				
				</script>
</form>



	       
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->



	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>	
    <br>
	<br>
<footer>
	<?php
    require_once ('./footer.php');
?>
</footer>	