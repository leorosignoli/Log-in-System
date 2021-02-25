<?php
	require_once('reg_process.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css";
</head>

<body>
<center>
		<div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div  class="user_card">
                <div class="dflex  justify-content-center">
                    <div class="d-flex justify-content-center form_container">

			<form name="registration" method="post" action="">

			<div class="mt-4">
			<h3>Registration</h3>
			</div>

				<div class="form-group" role="group" aria-label="Group">
				<center>
					<h4>Client Type:</h4>
					<input type="radio" name="reason" id="supplier_of_goods" value="supplier_of_goods" required/> 
					<label for="reason" class="input-sm">Supplier of Goods</label>

					<input type="radio" name="reason" id="supplier_of_services" value="supplier_of_services" />
					 <label for="reason" class="input-sm">Supplier of Services</label>

					<input type="radio" name="reason" id="administrator" value="administrator" /> 
					<label for="reason" class="input-sm">Administrator</label>

					<input type="radio" name="reason" id="farmer" value="farmer" />
					<label for="reason" class="input-sm">Farmer</label>

					<input type="radio" name="reason" id="buyer" value="buyer" />
					<label for="reason" class="input-sm">Buyer</label>
				</center>
				</div>



				<div class="input-group mb-3">
					
						<label for="name"></label> 
						<input type="text" name="name" placeholder="First Name" class="form-control input_user" required />
				</div>

				<div class="input-group mb-3">
						<label for="last_name"></label> 
						<input type="text" name="last_name" placeholder="Last Name" class="form-control input_user" required />
				</div>


				
					<?php 
						$email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
						if ( isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) ) {
							 echo "<p class=\"alert\">Email is required</p>"; 
							 $form_complete = false;
						} else if( isset( $_POST['email'] ) && ! preg_match( $email_regex, $_POST['email'] ) ) {
							echo "<p class=\"alert\">Please enter a valid Email Address.</p>"; 
						}
			?>	
				<div class="input-group mb-3">
					<label for="name"></label>
					<input type="email" name="email" placeholder="Your Email" class="form-control input_user" required />
				</div>

				<div class="input-group mb-3">
					<label for="password"></label> 
					<input type="password" name="password" placeholder="Your password" class="form-control input_class" required />
				</div>
				
				<div class="d-flex justify-content-center mt-3 login-container">
					<input type="submit" name="submition" value="Submit" class="btn btn-primary" />
				</div>

			</form>
					</div>
                </div>
            </div>
        </div>
    </div>	
</center>

	
</body>
