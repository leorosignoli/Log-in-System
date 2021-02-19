<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Log-in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script rel="stylesheet" src="https://kit.fontawesome.com/29854222d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css";

</head>
<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="dflex  justify-content-center">
                    <div class="d-flex justify-content-center form_container">
                        <form>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                                       
                            </div>
                            <input type="text" name="email" id="email" class="form-control input_user" placeholder="E-mail" required>

                        </div>
                        <div class="input-group mb-3">
                            
                            <input type="password" name="password" id="password" class="form-control input_class" placeholder="Password" required>
        
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom checkbox">
                                <input type="checkbox" name="rememberme" id="customControlInline">
                                <label class-"custom-control-input" for="customControlInline">Remember me</label>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-center links">
                                Don't have an account? <a href="registration.php" class="ml-2">Sign up!</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="#"> Forgot your password?</a>
                                </div>

                            </div>
                        </div>
                    <div class="d-flex justify-content-center mt-3 login-container">
                    <button type="button" name="login" id="login" class="btn btn-primary">Login</button>
                    </div>                                                
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var email = $('#email').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {email: email, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>