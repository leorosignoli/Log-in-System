<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
		body {
			font: 14px sans-serif;
		}

		.wrapper {
			width: 350px;
			padding: 20px;
		}
	</style>
</head>



<body>
	<center>
		<div class="wrapper">
			<h2>Register</h2>




			<form name="registration" method="POST" action="database.php">

				<div class="form-group">
					<h4>Client Type:</h4>
					<input type="radio" name="reason" id="supplier_of_goods" value="supplier_of_goods" /> <label
						for="supplier_of_goods" class="input-sm">Supplier of Goods</label>

					<input type="radio" name="reason" id="supplier_of_services" value="supplier_of_services" /> <label
						for="supplier_of_services" class="input-sm">Supplier of Services</label>

					<input type="radio" name="reason" id="administrator" value="administrator" /> <label
						for="administrator" class="input-sm">Administrator</label>

					<input type="radio" name="reason" id="farmer" value="farmer" /> <label for="farmer" class="input-sm">Farmer</label>

					<input type="radio" name="reason" id="buyer" value="buyer" /> <label for="buyer" class="input-sm">Buyer</label>

				</div>


				<br />

				<div>
					<p>
						<label for="name">First Name:</label> <input type="text" name="name" placeholder="First Name"
							class="form-control" required />

						<label for="last_name">Last Name:</label> <input type="text" name="last_name"
							placeholder="Last Name" class="form-control" required />
					</p>
				</div>

				<br />

				<div>
					<?php 
				$email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
				if ( isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) ) {
				 echo "<p class=\"alert\">Email is required</p>"; 
				 $form_complete = false;
				} else if( isset( $_POST['email'] ) && ! preg_match( $email_regex, $_POST['email'] ) ) {
					echo "<p class=\"alert\">Please enter a valid Email Address.</p>"; 
				}
			?>
					<label for="name">Email:</label> <input type="email" name="email" placeholder="Your Email"
						class="form-control" required />
				</div>


				<br />

				<div>
					<label for="password">Password:</label> <input type="password" name="password"
						placeholder="Your password" class="form-control" required />
				</div>
				<br />
				<div><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></div>

			</form>
		</div>
	</center>
</body>