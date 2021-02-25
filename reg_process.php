  
  <?php
  require('config.php');
  ?>
  <?php
  
		if(isset($_POST['submition'])){
			
			$reason 	 = $_POST['reason'];
			$name		 = $_POST['name'];
			$last_name   = $_POST['last_name'];
			$email 		 = $_POST['email'];
			$password 	 = $_POST['password'];

			$vkey= md5(time().$email);

			//sanitize to prevent SQL injection
			$mysqli = NEW MySQLi('127.0.0.1','root','','emails');
			$name 		= $mysqli-> real_escape_string($name);
			$last_name  = $mysqli-> real_escape_string($last_name);
			$email 		= $mysqli-> real_escape_string($email);
			$password 	= $mysqli-> real_escape_string($password);
			$reason 	= $mysqli-> real_escape_string($reason);
			
			$sql = "INSERT INTO info (TYPE_OF_CLIENT, FIRST_NAME, LAST_NAME, EMAIL, PSSWRD, VKEY ) VALUES (?,?,?,?,?,?)";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert ->execute([$reason,$name,$last_name,$email,$password,$vkey]);

			if($result){
				
				
				echo 'Saved.';

				$to=$email;
				$subject="Email Verification";
				$message="<a href='http://localhost/Login/verify.php?vkey=$vkey'>Register Account</a>";
				$headers = "From: leonardo.andrade6@hotmail.com \r\n";
				$headers.= "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
				mail($to,$subject,$message,$headers);

			}else{
				echo "ERRORS OCURRED";
				
			}

			//verificationKey
			$vkey= md5(time().$vkey);
		}